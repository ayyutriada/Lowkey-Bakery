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
    <link rel="stylesheet" href="css/login.css">
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
    <main>
        <div class="login-box">
            <h2 class="login-title">Login</h2>
            <form action="proses_login.php" method="POST">
                <label>Email</label> <br>
                <input type="email" name="email" placeholder="Masukkan Email Anda" required> <br><br>

                <label>Kata Sandi</label> <br>
                <small><i>(Silahkan masukkan nomor telepon lengkap anda, contoh: 0838xxxxxxxx)</i></small> <br>
                <input type="password" name="password" placeholder="Masukkan Kata Sandi Anda" required> <br>

                <div class="forgot-password">
                    <a href="forgot-password.html">Lupa Kata Sandi Anda?</a>
                </div>

                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>