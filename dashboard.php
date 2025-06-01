<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?= $_SESSION['admin']['email']; ?></h2>
    <p>Dashboard </p>

    <ul>
        <li><a href="manage_account.php">Management Akun</a></li>
        <li><a href="manage_admin.php">Management Admin</a></li>
        <li><a href="manage_products.php">Management Produk</a></li>
        <li><a href="manage_orders.php">Management Pesanan</a></li>
        <li><a href="manage_payments.php">Management Pembayaran</a></li>
        <li><a href="manage_shipping.php">Management Pengiriman</a></li>
        <li><a href="comments.php">Komentar</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
