<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
    mysqli_query($koneksi, $query);
    header("Location: admin_manage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(160, 245, 234);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background-color: white;
            border: 2px solid rgb(252, 63, 63);
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(252, 63, 63, 0.3);
        }

        h2 {
            text-align: center;
            color: rgb(252, 63, 63);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .btn {
            background-color: rgb(252, 63, 63);
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: gray;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Tambah Admin</h2>
        <form method="POST">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="tambah" class="btn">Tambah Admin</button>
        </form>
        <a href="admin_manage.php" class="back-link">← Kembali</a>
    </div>
</body>
</html>
