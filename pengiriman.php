<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Pengiriman</title>
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

        .btn {
            background-color: rgb(252, 63, 63);
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<nav>
    <h3 style="color: white; text-align: center;">Menu Admin</h3>
    <a href="index.php">Dashboard</a>
    <a href="pengguna.php">Manajemen Akun</a>
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
        <h2>Manajemen Pengiriman</h2>
    </header>

    <table>
        <thead>
            <tr>
                <th>ID Pengiriman</th>
                <th>Nama Penerima</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM pengiriman");
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nama_penerima']}</td>";
                echo "<td>{$row['alamat']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "<td>
                        <a class='btn' href='ubah_status_pengiriman.php?id={$row['id']}'>Ubah Status</a>
                        <a class='btn' href='hapus_pengiriman.php?id={$row['id']}' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
