<?php
session_start();

$_SESSION['email'] = "user@contoh.com";

$alamatList = isset($_SESSION['alamat']) ? $_SESSION['alamat'] : [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newAlamat = [
            'penerima' => $_POST['penerima'],
            'alamat' => $_POST['alamat'],
            'catatan' => $_POST['catatan']
        ];
        $alamatList[] = $newAlamat;
        $_SESSION['alamat'] = $alamatlist;
    }

    if (isset($_POST['go_purchase'])) {
        header("Location: checkout.php");
        exit;
    }
}
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alamat | Lowkey Bakery</title>
  
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,
     wght@0,100,;0,300;0,400;0,700;1,700&display=swap"
     rel="stylesheet">

    <!-- Feather Icons -->
    <script  src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/alamat.css">
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

    <div class="container">
        <form method="POST">
            <button type="button" onclick="document.getElemenById('form-alamat').style.display='block'" class="btn grey">Tambahkan Alamat Baru</button>

            <div id="form-alamat" style="display:none; margin: 20px 0;">
                <input type="text" name="penerima" placeholder="Nama Penerima" required>
                <input type="text" name="alamat" placeholder="Alamat Lengkap" required>
                <input type="text" name="catatan" placeholder="Catatan (opsional)">
                <button type="submit" name="add" class="btn">Simpan Alamat</button>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Penerima</th>
                    <th>Alamat Pengirim</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($alamatList) === 0): ?>
                    <tr><td colspan="3">Belum ada Alamat.</td></tr>
                    <?php else: ?>
                        <?php foreach ($alamatList as $alamat): ?>
                            <tr>
                                <td><?= htmlspecialchars($alamat['penerima']) ?></td>
                                <td><?= htmlspecialchars($alamat['alamat']) ?></td>
                                <td><?= htmlspecialchars($alamat['catatan']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </tbody>
        </table>

        <form method="POST">
            <button type="submit" name="go_purchase" class="btn purchase">Go To Purchase</button>
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