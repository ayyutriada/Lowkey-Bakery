<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Pesanan</title>
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
            background-color: rgb(248, 63, 63);
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
            background-color: rgb(248, 63, 63);
            color: white;
            padding: 10px;
            text-align: center;
        }

        
        .btn-danger {
            background-color: #f44336;
        }

        .btn-danger:hover {
            background-color: #c0392b;
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
            background-color: rgb(248, 81, 81);
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
    <header>
        <h2>Manajemen Pesanan</h2>
    </header>
<br><br>
  
    <table>
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Pembeli</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM pesanan");
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nama_pembeli']}</td>";
                echo "<td>{$row['produk']}</td>";
                echo "<td>{$row['jumlah']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "<td>
                        <a href='ubah_status.php?id={$row['id']}' class='btn'>Ubah Status</a>
                        <a href='hapus_pesanan.php?id={$row['id']}' class='btn btn-danger'>Hapus</a>
                        <a href='tambah_pembayaran.php?id_pesanan={$row['id']}' class='btn'>Bayar</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>





