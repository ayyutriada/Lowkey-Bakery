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
    <title>Manajemen Admin</title>
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
            background-color: rgb(252, 63 , 63);
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
            background-color:rgb(248, 228, 228);
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 5px;
        }

        .btn-danger {
            background-color: #f44336;
        }

        .btn-danger:hover {
            background-color: #c0392b;
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
        <h1>Manajemen Admin</h1>
    </header><br><br>

    <a href="tambah_admin.php" class="btn">Tambah Admin</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM admin");
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>
                    <a href='edit_admin.php?id={$row['id']}' class='btn'>Edit</a>
                    <a href='hapus_admin.php?id={$row['id']}' class='btn btn-danger'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>   
