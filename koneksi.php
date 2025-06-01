<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "lowkeybakery";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>
