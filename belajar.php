<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo 💖</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ffd6e8, #dbeafe);
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cute-card {
            border-radius: 25px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            background-color: #ffffff;
            padding: 30px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0); }
        }

        .cute-title {
            font-weight: 600;
            color: #ff69b4;
        }

        .cute-text {
            color: #6b7280;
            margin-bottom: 20px;
        }

        .btn-cute {
            background-color: #ff85c1;
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: 500;
            color: white;
            transition: 0.3s;
        }

        .btn-cute:hover {
            background-color: #ff5fa2;
            transform: scale(1.05);
        }

        .emoji {
            font-size: 40px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card cute-card">
                    <div class="emoji">✨💖🌸</div>
                    <h1 class="cute-title mt-3">Welcome to Halo</h1>
                    <p class="cute-text">
                        Haiii~ selamat datang ✨  
                        klik tombol di bawah buat mulai petualangan kamu 💕
                    </p>
                    <a href="tabel.php" class="btn btn-cute">Get Started 💫</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
