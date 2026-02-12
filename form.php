<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data - Pinky Edition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #fff5f7 0%, #fce4ec 100%);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            color: #880e4f;
        }

        .main-card {
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 35px rgba(233, 30, 99, 0.1);
        }

        .card-header {
            background: linear-gradient(45deg, #e91e63, #ff80ab) !important;
            border-radius: 25px 25px 0 0 !important;
            padding: 20px;
            border: none;
        }

        .form-label {
            font-weight: 600;
            color: #ad1457;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border-radius: 12px;
            border: 2px solid #f8bbd0;
            padding: 12px;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #e91e63;
            box-shadow: 0 0 0 0.25rem rgba(233, 30, 99, 0.1);
            background-color: #fff;
        }

        .btn-pink {
            background: #e91e63;
            color: white;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            border: none;
            transition: 0.3s;
        }

        .btn-pink:hover {
            background: #c2185b;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(233, 30, 99, 0.3);
        }

        .btn-reset {
            background: #fce4ec;
            color: #ad1457;
            border-radius: 12px;
            border: none;
            font-weight: 600;
        }

        .btn-reset:hover {
            background: #f8bbd0;
            color: #880e4f;
        }

        .back-link {
            color: #ad1457;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .back-link:hover {
            color: #e91e63;
            padding-left: 5px;
        }

        .input-group-text {
            background: #fce4ec;
            border: 2px solid #f8bbd0;
            border-right: none;
            border-radius: 12px 0 0 12px;
            color: #e91e63;
        }

        .has-icon .form-control {
            border-radius: 0 12px 12px 0;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card main-card">
                <div class="card-header text-center text-white">
                    <h3 class="mb-0 fw-bold"><i class="bi bi-pencil-heart me-2"></i>Input Data Mahasiswa</h3>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <div class="input-group has-icon">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM Mahasiswa</label>
                            <div class="input-group has-icon">
                                <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nomor induk" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <div class="input-group has-icon">
                                <span class="input-group-text"><i class="bi bi-mortarboard-fill"></i></span>
                                <select class="form-select" id="prodi" name="prodi" required>
                                    <option value="">-- Pilih Program Studi --</option>
                                    <option value="Teknik Informatika Kampus Pusat">Teknik Informatika Kampus Pusat</option>
                                    <option value="Teknik Informatika PSDKU Nganjuk">Teknik Informatika PSDKU Nganjuk</option>
                                    <option value="Teknik Informatika PSDKU Sidoarjo">Teknik Informatika PSDKU Sidoarjo</option>
                                    <option value="Rekayasa Perangkat Lunak PSDKU Saburaijua">Rekayasa Perangkat Lunak PSDKU Saburaijua</option>
                                    <option value="Teknologi Rekayasa Komputer">Teknologi Rekayasa Komputer</option>
                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                    <option value="Teknik Komputer">Teknik Komputer</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-pink">
                                <i class="bi bi-cloud-arrow-up-fill me-2"></i>Simpan Data
                            </button>
                            <button type="reset" class="btn btn-reset">
                                <i class="bi bi-arrow-counterclockwise me-2"></i>Reset Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="belajar.php" class="back-link">
                    <i class="bi bi-arrow-left-circle-fill me-1"></i> Kembali ke Halaman Belajar
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
