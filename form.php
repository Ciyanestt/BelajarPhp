<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa 💖</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #fde2ff, #e0f2fe);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .cute-card {
            border-radius: 25px;
            box-shadow: 0 20px 35px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        .cute-header {
            background: linear-gradient(135deg, #ff8ccf, #ffb6e6);
            border-radius: 25px 25px 0 0;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .form-control, .form-select {
            border-radius: 15px;
        }

        .btn-cute {
            background-color: #ff85c1;
            border: none;
            border-radius: 50px;
            padding: 10px;
            color: white;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-cute:hover {
            background-color: #ff5fa2;
            transform: scale(1.03);
        }

        .btn-reset {
            border-radius: 50px;
        }

        .back-btn {
            border-radius: 50px;
        }

        .emoji {
            font-size: 32px;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card cute-card">
                <div class="cute-header">
                    <div class="emoji">🎓✨💗</div>
                    <h3 class="mb-0">Form Input Data Mahasiswa</h3>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama kamu siapa 👀" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NIM Mahasiswa</label>
                            <input type="text" class="form-control" name="nim" placeholder="NIM jangan typo ya bestie" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Program Studi</label>
                            <select class="form-select" name="prodi" required>
                                <option value="">-- Pilih Prodi Kamu --</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat lengkap yaa 🏡" required></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cute">💾 Simpan Data</button>
                            <button type="reset" class="btn btn-outline-secondary btn-reset">🔄 Reset</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-3 text-center">
                <a href="belajar.php" class="btn btn-outline-primary back-btn">⬅ Kembali ke Halaman Belajar</a>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = $_POST['nama'];
    $nim    = $_POST['nim'];
    $prodi  = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    echo "<div class='container mt-4'>";
    echo "<div class='card p-4 shadow' style='border-radius:20px'>";
    echo "<h4>📌 Data Mahasiswa</h4>";
    echo "Nama : $nama <br>";
    echo "NIM : $nim <br>";
    echo "Program Studi : $prodi <br>";
    echo "Alamat : $alamat <br>";
    echo "</div></div>";
}
?>

?>


