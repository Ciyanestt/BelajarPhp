<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel 💗</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ffe4f2, #e0f2fe);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        h1 {
            color: #ff69b4;
            font-weight: 600;
        }

        .table-card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        table {
            border-radius: 15px;
            overflow: hidden;
        }

        thead {
            background: linear-gradient(135deg, #ff8ccf, #ffb6e6);
            color: white;
        }

        tbody tr:hover {
            background-color: #fff0f7;
            transition: 0.2s;
        }

        .btn-cute {
            background-color: #ff85c1;
            border: none;
            border-radius: 50px;
            padding: 8px 20px;
            color: white;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-cute:hover {
            background-color: #ff5fa2;
            transform: scale(1.05);
        }

        .btn-outline-cute {
            border-radius: 50px;
        }

        .emoji {
            font-size: 28px;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="text-center mb-4">
        <div class="emoji">📊✨💖</div>
        <h1>Data Tabel Mahasiswa</h1>
        <p class="text-muted">rapi, lucu, dan enak dilihat 👀</p>
    </div>

    <div class="table-card">
        <table class="table table-hover align-middle text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kota</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ahmad Hidayat</td>
                    <td>ahmad@email.com</td>
                    <td>Jakarta</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Siti Nurhaliza</td>
                    <td>siti@email.com</td>
                    <td>Bandung</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Budi Santoso</td>
                    <td>budi@email.com</td>
                    <td>Surabaya</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Rina Wijaya</td>
                    <td>rina@email.com</td>
                    <td>Semarang</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center mt-4">
        <a href="form.php" class="btn btn-cute me-2">➕ Input Form</a>
        <a href="belajar.php" class="btn btn-outline-primary btn-outline-cute">⬅ Halaman Belajar</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
