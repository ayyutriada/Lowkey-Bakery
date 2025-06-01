<?php
// Kirim ulang email jika tombol ditekan
$status = "";
if (isset($_POST['resend'])) {
    $to = $_POST['email']; // email tujuan
    $subject = "Aktivasi Ulang Akun - Lowkey Bakery";
    $message = "Klik link berikut untuk mengaktifkan akun anda:\n\n";
    $message .= "http://yourdomain.com/aktivasi.pho?email=" . urlencode($to);
    $headers = "From: no-reply@lowkeybakery.com";

    if (mail($to, $subject, $message, $headers)) {
        $status = "✅ Email aktivasi telah dikirim ke $to";
    } else {
        $status = "❌ Gagal mengirim email. Coba lagi.";
    }
}
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/notifikasi.css">
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

     <main class="notification-container">
        <h2>Notifikasi</h2>
        <p>Silahkan cek Email untuk  mengaktifkan Akun anda.<br>
        Jika dalam 15 menit belum menerima Email konfirmasi,<br>
        Silahkan dapat menghubungi kami di Layanan Chat, Wa atau Telp ke Call Center</p>

        <a href="index.html" class="btn">Beranda</a>

        <p>Belum menerima Email? Klik tombol di bawah!</p>
        <?php if (!empty($status)) echo "<p class='status-msg'>$status</p>"; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Masukkan Email Anda" required>
            <button type="submit" name="resend" class="btn">Kirim ulang Aktivasi Email</button>
        </form>
    </main>

     <!-- Feather Icons -->
    <script>
        feather.replace();
      </script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>