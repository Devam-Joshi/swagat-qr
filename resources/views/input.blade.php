<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            animation: slideUp 0.5s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
            text-align: center;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            font-size: 14px;
        }

        .file-input-wrapper {
            position: relative;
            border: 2px dashed #667eea;
            border-radius: 12px;
            padding: 40px 20px;
            text-align: center;
            background: #f8f9ff;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-input-wrapper:hover {
            border-color: #764ba2;
            background: #f0f2ff;
            transform: translateY(-2px);
        }

        .file-input-wrapper.dragover {
            border-color: #764ba2;
            background: #e8ebff;
        }

        input[type="file"] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .upload-icon {
            font-size: 48px;
            color: #667eea;
            margin-bottom: 10px;
        }

        .file-input-text {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .file-input-subtext {
            color: #999;
            font-size: 12px;
            margin-top: 10px;
        }

        .file-name {
            margin-top: 15px;
            padding: 10px;
            background: #e8f5e9;
            border-radius: 8px;
            color: #2e7d32;
            font-size: 14px;
            display: none;
        }

        .file-name.show {
            display: block;
        }

        button {
            width: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        button:active {
            transform: translateY(0);
        }

        .alert {
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 12px;
            animation: slideDown 0.4s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            border-left: 4px solid #28a745;
        }

        .alert-error {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            color: #721c24;
            border-left: 4px solid #dc3545;
        }

        .alert ul {
            list-style: none;
            margin: 5px 0 0 0;
        }

        .alert li {
            padding: 3px 0;
        }

        .alert li:before {
            content: "• ";
            font-weight: bold;
            margin-right: 5px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
            }

            h2 {
                font-size: 24px;
            }
        }

        .upload-method-toggle {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .upload-method-toggle input[type="radio"] {
            display: none;
        }

        .upload-method-toggle label {
            flex: 1;
            padding: 0.75rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .upload-method-toggle input[type="radio"]:checked+label {
            background: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        .url-input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }

        .url-input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .input-help {
            display: block;
            margin-top: 0.5rem;
            color: #666;
            font-size: 0.875rem;
        }

        .file-input-wrapper.drag-over {
            border-color: #4CAF50;
            background: #f0f9f0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>📤 Upload Your File</h2>
        <p class="subtitle">Share your documents securely</p>

        @if (session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <strong>⚠ Upload Failed:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" target="_blank">

            @csrf

            <!-- Upload Method Selection -->
            <div class="form-group">
                <label>Choose Upload Method</label>
                <div class="upload-method-toggle">
                    <input type="radio" name="upload_method" id="methodFile" value="file" checked>
                    <label for="methodFile">📄 Upload File</label>

                    <input type="radio" name="upload_method" id="methodUrl" value="url">
                    <label for="methodUrl">🔗 Enter URL</label>
                </div>
            </div>

            <!-- File Upload Section -->
            <div class="form-group" id="fileUploadSection">
                <label for="document">Select Document</label>
                <div class="file-input-wrapper" id="fileInputWrapper">
                    <div class="upload-icon">☁️</div>
                    <div class="file-input-text">Click to browse or drag and drop</div>
                    <div class="file-input-subtext">PDF, DOC, DOCX, JPG, PNG (Max 2MB)</div>
                    <input type="file" name="document" id="document">
                    <div class="file-name" id="fileName"></div>
                </div>
            </div>

            <!-- URL Input Section -->
            <div class="form-group" id="urlInputSection" style="display: none;">
                <label for="document_url">Enter Document URL</label>
                <input type="url" name="document_url" id="document_url"
                    placeholder="https://example.com/document.pdf" class="url-input">
                <small class="input-help">Enter a direct link to your document</small>
            </div>

            <button type="submit">Generate QR Code</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const methodFile = document.getElementById('methodFile');
            const methodUrl = document.getElementById('methodUrl');
            const fileSection = document.getElementById('fileUploadSection');
            const urlSection = document.getElementById('urlInputSection');
            const fileInput = document.getElementById('document');
            const urlInput = document.getElementById('document_url');

            // Toggle between file and URL input
            methodFile.addEventListener('change', function() {
                if (this.checked) {
                    fileSection.style.display = 'block';
                    urlSection.style.display = 'none';
                    fileInput.required = true;
                    urlInput.required = false;
                    urlInput.value = '';
                }
            });

            methodUrl.addEventListener('change', function() {
                if (this.checked) {
                    fileSection.style.display = 'none';
                    urlSection.style.display = 'block';
                    fileInput.required = false;
                    urlInput.required = true;
                    fileInput.value = '';
                }
            });

            // File name display
            const fileInputWrapper = document.getElementById('fileInputWrapper');
            const fileNameDisplay = document.getElementById('fileName');

            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    fileNameDisplay.textContent = this.files[0].name;
                    fileInputWrapper.classList.add('has-file');
                }
            });

            // Drag and drop
            fileInputWrapper.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('drag-over');
            });

            fileInputWrapper.addEventListener('dragleave', function() {
                this.classList.remove('drag-over');
            });

            fileInputWrapper.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('drag-over');

                if (e.dataTransfer.files.length) {
                    fileInput.files = e.dataTransfer.files;
                    fileNameDisplay.textContent = e.dataTransfer.files[0].name;
                    this.classList.add('has-file');
                }
            });
        });
    </script>

</body>

</html>
