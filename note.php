<?php
session_start();

$_SESSION['email'] = "user@contoh.com";

$note = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['note'])) {
        $_SESSION['note'] = $_POST['note'];
        $note = $+SESSION['note'];
    }

    if (isset($_POST['back'])) {
        header("Location: cart.php");
        exit();
    }

    if (isset($_POST['cancel'])) {
        unset($_SESSION['note']);
        $note = "";
    }
}

if (isset($_SESSION['note'])) {
    $note = $_SESSION['note'];
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
    <link rel="stylesheet" href="css/style.css">
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

<div class="note-container">
    <h2>Note</h2>
    <form method="POST" action="note.php">
        <textarea name="note" placeholder="Tulis catatan di sini..." rows="6"><?= htmlspecialchars($note) ?></textarea>
        <div class="btn-group">
            <button type="submit" name="cancel" class="btn red">Batal</button>
            <button type="submit" class="btn">Simpan</button>
            <button type="submit" name="back" class="btn red">Back</button>
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