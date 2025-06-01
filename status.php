<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script  src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/status.css">
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

    <section class="status-container">
  <table class="status-table">
    <thead>
      <tr>
        <th>Order</th>
        <th>Date</th>
        <th>Status</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>-</td>
        <td>-</td>
        <td><span class="status-label">-</span></td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
  <a href="index.php"><button class="back-btn">BACK</button></a>
</section>

     <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>