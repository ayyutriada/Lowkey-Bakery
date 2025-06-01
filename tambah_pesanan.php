<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
    $produk = mysqli_fetch_assoc($query);
}

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori']; 
    $foto = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($foto_tmp, "gambar/$foto");

    if (isset($produk)) {
        $query = "UPDATE produk SET nama = '$nama', deskripsi = '$deskripsi', harga = '$harga', kategori = '$kategori', foto = '$foto' WHERE id = '$id'";
    } else {
        $query = "INSERT INTO produk (nama, deskripsi, harga, kategori, foto) VALUES ('$nama', '$deskripsi', '$harga', '$kategori', '$foto')";
    }

    mysqli_query($koneksi, $query);
    header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($produk) ? 'Edit' : 'Tambah'; ?> Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(160, 245, 234);
            margin: 0;
            padding: 0;
        }

        .container {
            background: white;
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: white;
            background-color: rgb(252, 63, 63);
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            color: rgb(252, 63, 63);
            text-decoration: none;
            font-weight: bold;
        }

        label, input, textarea, select {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input[type="text"], input[type="number"], textarea, select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: rgb(252, 63, 63);
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo isset($produk) ? 'Edit' : 'Tambah'; ?> Produk</h2>
        <a href="produk.php">← Kembali ke Produk</a>
        <form method="POST" enctype="multipart/form-data">
            <label>Nama Produk:</label>
            <input type="text" name="nama" value="<?= isset($produk) ? $produk['nama'] : '' ?>" required>

            <label>Deskripsi:</label>
            <textarea name="deskripsi" required><?= isset($produk) ? $produk['deskripsi'] : '' ?></textarea>

            <label>Harga:</label>
            <input type="number" name="harga" value="<?= isset($produk) ? $produk['harga'] : '' ?>" required>

            <label>Kategori:</label>
            <select name="kategori" required>
                <option value="">Pilih Kategori</option>
                <option value="Bread" <?= isset($produk) && $produk['kategori'] == 'Bread' ? 'selected' : '' ?>>Bread</option>
                <option value="Cake" <?= isset($produk) && $produk['kategori'] == 'Cake' ? 'selected' : '' ?>>Cake</option>
                <option value="Pastry" <?= isset($produk) && $produk['kategori'] == 'Pastry' ? 'selected' : '' ?>>Pastry</option>
                <option value="Cookies" <?= isset($produk) && $produk['kategori'] == 'Cookies' ? 'selected' : '' ?>>Cookies</option>
                <option value="Snack Tradisional" <?= isset($produk) && $produk['kategori'] == 'Snack Tradisional' ? 'selected' : '' ?>>Traditional Snack</option>
            </select>

            <label>Foto:</label>
            <input type="file" name="foto">

            <button type="submit" name="tambah"><?php echo isset($produk) ? 'Update' : 'Tambah'; ?> Produk</button>
        </form>
    </div>
</body>
</html>


