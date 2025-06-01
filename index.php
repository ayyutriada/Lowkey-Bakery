<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(160, 245, 234);
            display: flex;
        }

        /* Sidebar */
        nav {
            width: 200px;
            background-color:rgb(248, 81, 81);;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
        }
        nav a {
            display: block;
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            text-align: left;
        }
        nav a:hover {
            background-color: rgb(248, 81, 81);
        }

        /* Main content */
        .content {
            margin-left: 220px;
            padding: 20px;
            width: 100%;
        }

        header {
            background-color: rgb(248, 81, 81);
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:hover {
            background-color:rgb(252, 63, 63);
        }

        .btn {
            background-color: rgb(252, 63, 63);
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
        }

        .btn-danger {
            background-color: #f44336;
        }

        .btn-success {
            background-color:rgb(248, 81, 81);
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
        <h1>Selamat Datang di Dashboard Admin</h1>
    </header>

    <h2>Daftar Pesanan</h2>
    <a href="pesanan.php" class="btn">Lihat Semua Pesanan</a>

    <h3>Daftar Produk</h3>
    <table>
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
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
                echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
                echo "<td><img src='gambar/{$row['foto']}' width='100'></td>";
                echo "<td><a href='edit_produk.php?id={$row['id']}' class='btn btn-success'>Edit</a> | 
                        <a href='hapus_produk.php?id={$row['id']}' class='btn btn-danger'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
