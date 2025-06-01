<?php
include 'koneksi.php';

$email = $_POST['email'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$ulang = $_POST['ulang_telepon'];

if ($telepon !== $ulang) {
    echo "<script>alert('Nomor telepon tidak cocok!'); window.history.back();</script>";
    exit;
}

$query = "INSERT INTO users (email, username, telepon) VALUES ('$email', '$nama', '$telepon')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Registrasi berhasil!'); window.location.href='login.php';</script>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>