<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';

// Proses untuk Edit Produk
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
    $produk = mysqli_fetch_assoc($query);
}

// Proses untuk Tambah Produk
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori']; // Kategori yang dipilih
    $foto = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($foto_tmp, "gambar/$foto");

    if (isset($produk)) {
        // Jika produk sudah ada, update produk
        $query = "UPDATE produk SET nama = '$nama', deskripsi = '$deskripsi', harga = '$harga', kategori = '$kategori', foto = '$foto' WHERE id = '$id'";
    } else {
        // Jika produk baru, insert produk baru
        $query = "INSERT INTO produk (nama, deskripsi, harga, kategori, foto) VALUES ('$nama', '$deskripsi', '$harga', '$kategori', '$foto')";
    }

    mysqli_query($koneksi, $query);
    header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($produk) ? 'Edit' : 'Tambah'; ?> Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 70%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: rgb(252, 63, 63);
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            color: #333;
            text-decoration: none;
            background-color: rgb(252, 63, 63);
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: bold;
        }

        a:hover {
            background-color: #c0392b;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"], textarea, select, input[type="number"], input[type="file"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: rgb(252, 63, 63);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b;
        }

        textarea {
            resize: vertical;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo isset($produk) ? 'Edit' : 'Tambah'; ?> Produk</h2>
        <a href="produk.php">Kembali</a>
        <form method="POST" enctype="multipart/form-data">
            Nama Produk: <input type="text" name="nama" value="<?= isset($produk) ? $produk['nama'] : '' ?>" required><br>
            Deskripsi: <textarea name="deskripsi" required><?= isset($produk) ? $produk['deskripsi'] : '' ?></textarea><br>
            Harga: <input type="number" name="harga" value="<?= isset($produk) ? $produk['harga'] : '' ?>" required><br>

            Kategori: 
            <select name="kategori" required>
                <option value="">Pilih Kategori</option>
                <option value="Kue Lapis" <?= isset($produk) && $produk['kategori'] == 'Bread' ? 'selected' : '' ?>>Bread</option>
                <option value="Kue Cubir" <?= isset($produk) && $produk['kategori'] == 'Cake' ? 'selected' : '' ?>>Cake</option>
                <option value="Kue Tart" <?= isset($produk) && $produk['kategori'] == 'Pastry' ? 'selected' : '' ?>>Pastry</option>
                <option value="Cookies" <?= isset($produk) && $produk['kategori'] == 'Cookies' ? 'selected' : '' ?>>Cookies</option>
                <option value="Snack Tradisional" <?= isset($produk) && $produk['kategori'] == 'Snack Tradisional' ? 'selected' : '' ?>>Traditional Snack</option>
            </select><br>

            Foto: <input type="file" name="foto"><br>
            <button type="submit" name="tambah"><?php echo isset($produk) ? 'Update' : 'Tambah'; ?> Produk</button>
        </form>
    </div>
</body>
</html>


