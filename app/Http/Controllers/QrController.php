<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|max:2048',
        ]);

        // Upload the document
        $file = $request->file('document');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('documents'), $fileName);

        // Save to database
        File::create([
            'FileName' => $fileName,
            'FilePath' => asset("documents/" . $fileName),
        ]);

        $url = asset("documents/" . $fileName);

        // Generate QR Code with logo using GD only
        $qrCodeImage = $this->generateQRWithLogo($url);

        // Return image directly to browser
        return response($qrCodeImage)->header('Content-Type', 'image/png');
    }

    private function generateQRWithLogo($url)
    {
        $logoPath = public_path('images/logo.png');

        // Generate QR with GD backend (no imagick)
        $qrCode = QrCode::format('png')   // force PNG, but still works with GD
            ->size(500)
            ->errorCorrection('H')
            ->margin(1)
            ->generate($url);

        // If logo exists, merge it
        if (file_exists($logoPath)) {
            return $this->mergeLogoManually($qrCode, $logoPath);
        }

        return $qrCode;
    }

    private function mergeLogoManually($qrCode, $logoPath)
    {
        try {
            // Convert QR code string to GD image
            $qrImage = imagecreatefromstring($qrCode);

            // Load logo
            $logoInfo = getimagesize($logoPath);
            if ($logoInfo[2] == IMAGETYPE_PNG) {
                $logo = imagecreatefrompng($logoPath);
            } elseif ($logoInfo[2] == IMAGETYPE_JPEG) {
                $logo = imagecreatefromjpeg($logoPath);
            } else {
                return $qrCode; // unsupported logo format
            }

            // Get dimensions
            $qrWidth = imagesx($qrImage);
            $qrHeight = imagesy($qrImage);
            $logoWidth = imagesx($logo);
            $logoHeight = imagesy($logo);

            // Resize logo (20% of QR size)
            $logoQrWidth = $qrWidth / 5;
            $logoQrHeight = $logoHeight * $logoQrWidth / $logoWidth;

            // Center position
            $x = ($qrWidth - $logoQrWidth) / 2;
            $y = ($qrHeight - $logoQrHeight) / 2;

            // Add white background behind logo
            $white = imagecolorallocate($qrImage, 255, 255, 255);
            $padding = 10;
            imagefilledrectangle(
                $qrImage,
                $x - $padding,
                $y - $padding,
                $x + $logoQrWidth + $padding,
                $y + $logoQrHeight + $padding,
                $white
            );

            // Merge logo
            imagecopyresampled(
                $qrImage,
                $logo,
                $x,
                $y,
                0,
                0,
                $logoQrWidth,
                $logoQrHeight,
                $logoWidth,
                $logoHeight
            );

            // Convert back to PNG string
            ob_start();
            imagepng($qrImage);
            $mergedImage = ob_get_clean();

            // Free resources
            imagedestroy($qrImage);
            imagedestroy($logo);

            return $mergedImage;

        } catch (\Exception $e) {
            return $qrCode; // fallback: return plain QR
        }
    }
}
