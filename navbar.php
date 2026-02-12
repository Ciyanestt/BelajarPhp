<?php
session_start();
?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<nav style="
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(15px);
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #f8bbd0;
    font-family: 'Poppins', sans-serif;
    position: sticky;
    top: 0;
    z-index: 1000;
">
    
    <div style="color: #e91e63; font-weight: 800; font-size: 24px; display: flex; align-items: center;">
        <i class="bi bi-heart-pulse-fill me-2"></i> Ciyanest
    </div>

    <div style="display: flex; align-items: center;">
        <a href="index.php" class="nav-link-pink">Home</a>
        <a href="#" class="nav-link-pink">About</a>
        <a href="#" class="nav-link-pink">Service</a>

        <?php if(isset($_SESSION['login'])): ?>
            <a href="logout.php" class="btn-logout-pink">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </a>
        <?php else: ?>
            <a href="login.php" class="btn-login-pink">
                <i class="bi bi-person-heart me-1"></i> Login
            </a>
        <?php endif; ?>
    </div>
</nav>

<style>
    .nav-link-pink {
        color: #ad1457;
        margin-right: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
        font-size: 15px;
    }

    .nav-link-pink:hover {
        color: #e91e63;
        transform: translateY(-2px);
    }

    .btn-login-pink {
        background: #e91e63;
        color: white !important;
        padding: 8px 20px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
        box-shadow: 0 4px 10px rgba(233, 30, 99, 0.2);
    }

    .btn-login-pink:hover {
        background: #c2185b;
        transform: scale(1.05);
    }

    .btn-logout-pink {
        background: #fce4ec;
        color: #ad1457 !important;
        padding: 8px 20px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        border: 1px solid #f8bbd0;
        transition: 0.3s;
    }

    .btn-logout-pink:hover {
        background: #f8bbd0;
        color: #880e4f !important;
    }
</style>