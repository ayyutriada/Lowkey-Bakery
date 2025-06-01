<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $label = $_POST['label'];
  $penerima = $_POST['penerima'];
  $alamat = $_POST['alamat'];
  $catatan = $_POST['catatan'];

  $data = [
    'label' => $label,
    'penerima' => $penerima,
    'alamat' => $alamat,
    'catatan' => $catatan
  ];

  if (!isset($_SESSION['alamat'])) $_SESSION['alamat'] = [];
  $_SESSION['alamat'][] = $data;

  header("Location: alamat.php");
  exit();
}
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script  src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/alamat_form.css.css">
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


  <div class="form-container">
    <form method="POST">
      <label>Nama Label</label>
      <input type="text" name="label" placeholder="Misalnya: Rumah, Kantor, Apartemen" required>

      <label>Nama Penerima</label>
      <input type="text" name="penerima" required>

      <label>Alamat</label>
      <textarea name="alamat" rows="3" required></textarea>

      <label>Catatan</label>
      <textarea name="catatan" rows="2"></textarea>

      <div class="btn-row">
        <a href="alamat.php" class="btn grey">Batal</a>
        <button type="submit" class="btn">Simpan</button>
      </div>
    </form>
  </div>

  <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>