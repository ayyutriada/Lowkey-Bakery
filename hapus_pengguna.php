<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM pengguna WHERE id = '$id'";
mysqli_query($koneksi, $query);
header("Location: pengguna.php");
?>
