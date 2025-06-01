<?php
session_start();

$user = [
    "email" => $_SESSION['email'] ?? "user@example.com",
    "telepon" => "083812345678",
    "tanggal_lahir" => "2004-08-20",
    "alamat" => "Jl. Mawar No. 123, jakarta"
];
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script  src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/edit_profile.css">
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

    <main>
    <section class="edit-profile">
      <form action="update_profile.php" method="POST">
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="input-group">
          <i data-feather="calendar"></i>
          <input type="date" name="birthdate" required>
        </div>
        <div class="input-group">
          <i data-feather="map-pin"></i>
          <input type="text" name="address" placeholder="Address" required>
        </div>
        <button type="submit" class="btn-edit">Edit Profile</button>
      </form>
    </section>
  </main>

     <!-- Feather Icons -->
    <script>
        feather.replace();
      </script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>

</body>