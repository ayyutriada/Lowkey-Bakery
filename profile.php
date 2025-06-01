<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>alert('Silahkan login terlebih dahulu.'); window.location.href='login.php';</script>";
    exit;
}

$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$userData = mysqli_fetch_assoc($result);

if (!$userData) {
    echo "<script>alert('Akun tidak ditemukan. Silahkan daftar terlebih dahulu.'); window.location.herf='register.php';</script>";
    exit;
}
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>

    <!-- Navbar  -->
     <nav class="navbar">
        <a href="#" class="navbar-logo">
            <img src="image/Logo.png" alt="Logo Lowkey Bakery"/></a>
          
        <div class="navbar-nav">
            <a href="#menu">Menu</a>
            <a href="#sosial&store">Sosial&Store</a>
            <a href="#review">Review</a>
            <a href="#about us">About Us</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="profil.php" id="user"><i data-feather="user"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
     </nav>

    <section class="profile-box">
        <div class="profile-container">
            <img src="image/profile (2).png" alt="Foto Profil" class="profile-img">
            <div class="profile-data">
            <h2>Profile</h2>
            <p><i data-feather="mail"></i> <?= htmlspecialchars($userData['email']) ?></p>
            <p><i data-feather="phone"></i> <?= htmlspecialchars($userData['telepon']) ?></p>
            <p><i data-feather="calendar"></i> <?= htmlspecialchars($userData['tanggal_lahir'] ?? '-') ?></p>
            <p><i data-feather="map-pin"></i> <?= htmlspecialchars($userData['alamat'] ?? '-') ?></p>

            <div class="actions">
                <a href="edit_profile.php"><button class="edit">Edit Profile</button></a>
                <a href="detele.php"><button class="delete">Delete Account</button></a>
            </div>
            </div>
        </div>
    </section>

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>