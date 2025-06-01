<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>

<html lang="id">
    
<head>
    <meta charset="UTF-8">
    <title>Login | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/keranjang.css">
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
            <a href="#" id="user"><i data-feather="user"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
     </nav>

    <div class="cart-container">
        <h2>Cart</h2>
        <div class="delivery-box">
            <p><strong>DELIVERY HOUR</strong><br>Monday - Sunday: 07.00 AM - 19.00m</p>
        </div>

        <?php foreach ($cart as $item): ?>
            <div class="cart-item">
                <div class="item-nama"><?= htmlspecialchars($item['nama']) ?></div>
                <div class="item-opsi">
                    <button class="note-btn">Note</button>
                    <button class="delete-btn">Delete</button>
                </div>
                <div class="item-subtotal">
                    Subtotal<br>Rp. <?= number_format($item['harga'], 0, ',', '.') ?>
                </div>
            </div>
            <?php endforeach; ?>

            <div class="total">
                <strong>Total</strong>
                <span>Rp. <?= number_format($total, 0, ',', '.') ?></span>
            </div>

            <div class="cart-nav">
                <a href="index.html" class="back-btn"><- Go to shop</a>
                <a href="#" class="buy-btn">Purchase Now -></a>
            </div>
    </div>

<!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

<!-- JavaScript -->
<script src="js/script.js"></script>

</body>
</html>