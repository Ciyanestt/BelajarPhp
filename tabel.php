<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna - Pinky Edition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            /* Background gradasi pink lembut */
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
            overflow: hidden;
        }

        h2 {
            color: #ad1457;
            letter-spacing: -0.5px;
        }

        /* Styling Tabel */
        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #fce4ec;
            color: #c2185b;
            text-transform: uppercase;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 20px;
            border: none;
        }

        .table tbody td {
            padding: 18px 20px;
            border-bottom: 1px solid #f8bbd0;
            color: #4a148c;
        }

        .table tbody tr:hover {
            background-color: #fff1f6 !important;
            transition: 0.3s;
        }

        /* Badge Kota */
        .badge-city {
            background-color: #fce4ec;
            color: #d81b60;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid #f8bbd0;
        }

        /* Tombol Pink */
        .btn-pink {
            background-color: #e91e63;
            color: white;
            border-radius: 12px;
            padding: 10px 24px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-pink:hover {
            background-color: #c2185b;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(233, 30, 99, 0.3);
        }

        /* Tombol Aksi */
        .btn-action {
            width: 35px;
            height: 35px;
            padding: 0;
            line-height: 35px;
            border-radius: 10px;
            border: 1px solid #f8bbd0;
            background: white;
            color: #e91e63;
            transition: 0.2s;
        }

        .btn-action:hover {
            background: #e91e63;
            color: white;
        }

        .back-link {
            color: #ad1457;
            font-weight: 600;
            transition: 0.3s;
        }

        .back-link:hover {
            color: #e91e63;
            padding-left: 5px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold"><i class="bi bi-heart-fill me-2"></i>Daftar Pengguna</h2>
            <p class="text-muted">Kelola data cantik Anda di bawah ini ✨</p>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="form.php" class="btn btn-pink shadow-sm">
                <i class="bi bi-plus-circle-fill me-2"></i>Tambah Data
            </a>
        </div>
    </div>

    <div class="card main-card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th class="ps-4 text-center" style="width: 80px;">No</th>
                            <th>Nama Lengkap</th>
                            <th>Email Address</th>
                            <th>Kota Asal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 text-center fw-bold text-pink-light">01</td>
                            <td>
                                <div class="fw-bold">Ahmad Hidayat</div>
                            </td>
                            <td>ahmad@email.com</td>
                            <td><span class="badge-city">Jakarta</span></td>
                            <td class="text-center">
                                <button class="btn btn-action me-1"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-action text-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 text-center fw-bold">02</td>
                            <td>
                                <div class="fw-bold">Siti Nurhaliza</div>
                            </td>
                            <td>siti@email.com</td>
                            <td><span class="badge-city">Bandung</span></td>
                            <td class="text-center">
                                <button class="btn btn-action me-1"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-action text-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 text-center fw-bold">03</td>
                            <td>
                                <div class="fw-bold">Budi Santoso</div>
                            </td>
                            <td>budi@email.com</td>
                            <td><span class="badge-city">Surabaya</span></td>
                            <td class="text-center">
                                <button class="btn btn-action me-1"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-action text-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 text-center fw-bold">04</td>
                            <td>
                                <div class="fw-bold">Rina Wijaya</div>
                            </td>
                            <td>rina@email.com</td>
                            <td><span class="badge-city">Semarang</span></td>
                            <td class="text-center">
                                <button class="btn btn-action me-1"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-action text-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="belajar.php" class="text-decoration-none back-link">
            <i class="bi bi-arrow-left-circle-fill me-1"></i> Kembali ke Halaman Belajar
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
