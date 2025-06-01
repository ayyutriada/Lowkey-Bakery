<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Email aktivasi telah dikirim ke $email</h2>";
    } else {
        echo "<h2>Email Salah!</h2>";
    }
}
?>