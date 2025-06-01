<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM admin WHERE id = '$id'";
mysqli_query($koneksi, $query);
header("Location: admin_manage.php");
?>
