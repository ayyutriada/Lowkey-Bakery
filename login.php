<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
            padding: 20px;
            border: 1px solid #ddd;
            margin-top: 30px;
        }
        label {
            margin-bottom: 10px;
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 250px;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color:#rgb(252, 63, 63);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color:rgb(63, 252, 227)
        }
        .error {
            color: red;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Login Admin</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$user' AND password='$pass'");
        if (mysqli_num_rows($cek) == 1) {
            session_start();
            $_SESSION['admin'] = $user;
            header("Location: index.php");
        } else {
            echo "<p class='error'>Login gagal, username atau password salah!</p>";
        }
    }
    ?>
</body>
</html>
