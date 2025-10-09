<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    /**
     * Show file upload form
     */
    public function index()
    {
        return view('input'); // Your upload form view
    }

    /**
     * Handle file upload and QR generation
     */
    public function upload(Request $request)
    {
        $request->validate([
            'upload_method' => 'required|in:file,url',
            'document' => 'required_if:upload_method,file|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
            'document_url' => 'required_if:upload_method,url|url|max:500',
        ]);

        $url = '';
        $fileName = '';

        if ($request->upload_method === 'file') {
            // Handle file upload
            $file = $request->file('document');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . preg_replace('/\s+/', '_', $originalName);

            // Compress file if image
            $compressed = $this->compressFile($file, $extension);
            $savePath = public_path('documents/' . $fileName);

            if ($compressed) {
                file_put_contents($savePath, $compressed);
            } else {
                $file->move(public_path('documents'), $fileName);
            }

            $url = asset("documents/" . $fileName);

            File::create([
                'FileName' => $fileName,
                'FilePath' => $url,
                'UploadMethod' => 'file',
            ]);
        } else {
            // Handle URL input (like Google Maps, Drive, etc.)
            $url = trim($request->document_url);
            $fileName = parse_url($url, PHP_URL_HOST) ?: 'External Link';

            File::create([
                'FileName' => $fileName,
                'FilePath' => $url,
                'UploadMethod' => 'url',
            ]);
        }

        // Encode URL safely for QR generation
        $safeUrl = htmlspecialchars_decode(urldecode($url));

        // Generate QR code
        $qrCodeImage = $this->generateQRWithLogo($safeUrl);

        return response($qrCodeImage)
            ->header('Content-Type', 'image/png')
            ->header('Content-Disposition', 'inline; filename="qrcode.png"');
    }

    private function compressFile($file, $extension)
    {
        try {
            $ext = strtolower($extension);
            if (!in_array($ext, ['jpg', 'jpeg', 'png'])) {
                return null;
            }

            $image = ($ext === 'png') ? imagecreatefrompng($file->getRealPath()) : imagecreatefromjpeg($file->getRealPath());
            if (!$image) return null;

            $maxWidth = 1920;
            $width = imagesx($image);
            $height = imagesy($image);

            if ($width > $maxWidth) {
                $newHeight = (int)(($maxWidth / $width) * $height);
                $resized = imagecreatetruecolor($maxWidth, $newHeight);
                if ($ext === 'png') {
                    imagealphablending($resized, false);
                    imagesavealpha($resized, true);
                }
                imagecopyresampled($resized, $image, 0, 0, 0, 0, $maxWidth, $newHeight, $width, $height);
                imagedestroy($image);
                $image = $resized;
            }

            ob_start();
            ($ext === 'png') ? imagepng($image, null, 6) : imagejpeg($image, null, 85);
            $compressed = ob_get_clean();
            imagedestroy($image);

            return $compressed;
        } catch (\Exception $e) {
            \Log::error('Compression failed: ' . $e->getMessage());
            return null;
        }
    }

    private function generateQRWithLogo($url)
    {
        $logoPath = public_path('images/logo.png');

        $qrCode = QrCode::format('png')
            ->size(500)
            ->errorCorrection('H')
            ->margin(1)
            ->generate($url);

        return file_exists($logoPath)
            ? $this->mergeLogoManually($qrCode, $logoPath)
            : $qrCode;
    }

    private function mergeLogoManually($qrCode, $logoPath)
    {
        try {
            $qrImg = imagecreatefromstring($qrCode);
            $logo = imagecreatefrompng($logoPath);
            if (!$qrImg || !$logo) return $qrCode;

            $qrW = imagesx($qrImg);
            $qrH = imagesy($qrImg);
            $logoW = imagesx($logo);
            $logoH = imagesy($logo);

            $newW = (int)($qrW * 0.2);
            $newH = (int)($logoH * ($newW / $logoW));
            $x = ($qrW - $newW) / 2;
            $y = ($qrH - $newH) / 2;

            imagecopyresampled($qrImg, $logo, $x, $y, 0, 0, $newW, $newH, $logoW, $logoH);

            ob_start();
            imagepng($qrImg);
            $output = ob_get_clean();

            imagedestroy($qrImg);
            imagedestroy($logo);

            return $output;
        } catch (\Exception $e) {
            \Log::error('QR merge failed: ' . $e->getMessage());
            return $qrCode;
        }
    }
}
