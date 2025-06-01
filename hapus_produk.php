<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Ambil data produk untuk menghapus foto jika ada
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
    $produk = mysqli_fetch_assoc($query);

    // Hapus foto dari folder gambar
    if (file_exists("gambar/{$produk['foto']}")) {
        unlink("gambar/{$produk['foto']}");
    }

    // Hapus data produk dari database
    $query_delete = "DELETE FROM produk WHERE id = '$id'";
    mysqli_query($koneksi, $query_delete);
    header("Location: produk.php");
}
?>

