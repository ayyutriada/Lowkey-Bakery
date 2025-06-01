<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';
$query = mysqli_query($koneksi, "
    SELECT komentar.*, produk.nama AS nama_produk, admin.username AS nama_admin
    FROM komentar 
    JOIN produk ON komentar.id_produk = produk.id
    JOIN admin ON komentar.id_admin = admin.id
    ORDER BY komentar.tanggal DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Komentar</title>
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
            border-radius: 5px;
        }

        .judul-komentar {
            background-color:rgb(252, 63, 63);
            color: white;
            padding: 10px 425px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 0;
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
            background-color: #f1f1f1;
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
    <h2 class="judul-komentar">Manajemen Komentar</h2>

    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Admin</th>
                <th>Komentar</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama_produk']) ?></td>
                    <td><?= htmlspecialchars($row['nama_admin']) ?></td>
                    <td><?= htmlspecialchars($row['isi']) ?></td>
                    <td><?= $row['tanggal'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>




