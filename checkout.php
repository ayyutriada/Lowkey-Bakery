<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script  src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/checkout.css">
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
            <a href="keranjang.php" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="profile.php" id="user"><i data-feather="user"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
     </nav>

     <section class="checkout-container">
    <div class="left-box">
        <h3>Delivery</h3>
        <div class="address-box">
            <label for="address">Shipping Address</label>
            <textarea id="address" name="address" rows="5" placeholder="Masukkan alamat lengkap Anda di sini..."></textarea>
            <button class="change-btn">Change Address</button>
        </div>

        <div class="order-box">
            <h4>Order Details</h4>
            <p>Roti Coklat<br>Rp 10.600<br>Quantity: 1</p>
            <p class="subtotal">Subtotal: <span>Rp 8.900</span></p>
        </div>
    </div>

    <div class="right-box">
        <div class="info-box">
            <label for="date">Date At</label>
            <input type="datetime-local" id="date" name="date">

            <div class="info-row">
                <p>Delivery</p>
                <button class="info-btn">From Shop</button>
            </div>

            <div class="info-row">
                <p>Pembayaran</p>
                <button class="info-btn">COD Only</button>
            </div>
        </div>

        <div class="summary-box">
            <h4>Shopping Summary</h4>
            <p>Total Price (1 product): <span>Rp 8.900</span></p>
            <p>Grand Total: <span class="total">Rp 8.900</span></p>
            <a href="pembayaran_berhasil.php"><button class="pay-btn">BAYAR</button></a>
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