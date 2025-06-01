<!DOCTYPE html>

<html lang="id">
    
<head>
    <meta charset="UTF-8">
    <title>Registrasi | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/register.css">
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

     <!-- Start -->
        <form action="proses_register.php" method="POST" class="form-box">
        <h2>Registrasi</h2>

            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan Email Anda" required>

            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>

            <label>Telepon/Seluler/Kata Sandi</label>
            <p class="note">
                Nomor telepon anda akan menjadi kata sandi default anda. <br>
                <em>(Silahkan masukkan nomor telepon lengkap anda, contoh: 0838xxxxxxxx)</em>
            </p>
            <input type="text" name="telepon" placeholder="Nomor Telepon/Seluler" required>

            <label>Silahkan ketik ulang nomor Telepon/Seluler</label>
            <input type="text" name="ulang_telepon" placeholder="Nomor telepon/Seluler" required>

            <div class="checkbox">
                <input type="checkbox" required>
                <span>Saya menerima <a href="#">Persyaratan Pengguna</a> & <a href="#">kebijakan Privasi</a></span>
            </div>

            <button type="submit">Kirim</button>
        </form>

<!-- Feather Icons -->
<script>
        feather.replace();
      </script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>