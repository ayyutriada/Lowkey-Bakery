<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: rgb(160, 245, 234);
        display: flex;
    }

    nav {
        width: 200px;
        background-color: rgb(252, 63, 63);
        height: 100vh;
        padding-top: 20px;
        position: fixed;
    }

    nav a {
        display: block;
        color: white;
        padding: 14px 16px;
        text-decoration: none;
    }

    nav a:hover {
        background-color: #ff9999;
    }

    .content {
        margin-left: 220px;
        padding: 20px;
        width: 100%;
    }

    header {
        background-color: rgb(252, 63, 63);
        color: white;
        padding: 10px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: rgb(252, 63, 63);
        color: white;
    }

    tr:hover {
        background-color: rgb(248, 228, 228);
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 6px 12px;
        text-decoration: none;
        border-radius: 4px;
        margin-right: 5px;
    }

    .btn-success {
        background-color: #4CAF50;
    }

    .btn-danger {
        background-color: #f44336;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }

    img {
        max-width: 100px;
        height: auto;
    }
    </style>
</head>
<body>


<nav>
    <h3 style="color: white; text-align: center;">Menu Admin</h3>
    <a href="index.php">Dashboard</a>
    <a href="pengguna.php">Manajemen Pengguna</a>
    <a href="admin_manage.php">Manajemen Admin</a>
    <a href="produk.php">Manajemen Produk</a>
    <a href="pesanan.php">Manajemen Pesanan</a>
    <a href="pembayaran.php">Manajemen Pembayaran</a>
    <a href="pengiriman.php">Manajemen Pengiriman</a>
    <a href="komentar.php">Komentar</a>
    <a href="logout.php">Logout</a>
</nav>


<div class="content">
    <header>
        <h1>Daftar Produk</h1>
    </header><br><br>
    <a href="tambah_produk.php" class="btn btn-success">Tambah Produk</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM produk");
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nama']}</td>";
                echo "<td>{$row['deskripsi']}</td>";
                echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
                echo "<td>{$row['kategori']}</td>";
                echo "<td><img src='gambar/{$row['foto']}'></td>";
                echo "<td>
                        <a href='edit_produk.php?id={$row['id']}' class='btn btn-success'>Edit</a> 
                        <a href='hapus_produk.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus produk ini?\");'>Hapus</a>
                        </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
