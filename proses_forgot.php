<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if (!empty($email)) {
        echo "
        <script>
            alert('Tautan reset sudah dikirim ke email: $email');
            window.location.href = 'login.html';
        </script>";
    } else {
        echo "
        <script>
            alert('Email tidak boleh kosong!');
            window.history.back();
        </script>";
    }
}
?>