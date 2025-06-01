<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email = '$email' AND telepon = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) === 1) {
        session_start();
        $_SESSION['email'] = $email;
        echo "<script>alert('Login berhasil!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Email atau kata sandi salah. Silahkan coba lagi.'); window.history.back();</script>";
    }
}
?>