<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'calyamaida' && $password === 'rahasia20') {
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['login'] = false;
        echo "<div class='error'>Gagal login, pastikan username dan password benar</div>";
        echo "<br>Klik disini untuk kembali ke halaman login <a href='login.php'>Login</a>";
    }
}

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit;
}
?>
