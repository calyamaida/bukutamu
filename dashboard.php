<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <title>Dashboard</title>
        <style>
            body {
                font-family: 'Lato', sans-serif;
                background-image: url('dashboard.png');
                background-size: cover;
                background-position: center;
                margin: 0;
                padding: 0;
            }

            .navbar {
                background-color: #162860;
                text-align: center;
                padding: 10px;
            }

            .navbar a {
                color: #f3f3f3;
                text-decoration: none;
                margin-right: 15px;
            }

            .logout-btn {
                display: inline-block;
                padding: 10px 20px;
                background-color: #ffd9ea;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="dashboard.php">Home</a>
            <a href="buku_tamu.php">Buku Tamu</a>
            <a href="settings.php">Settings</a>
            <a href="help.php">Help</a>
        </div>
    </body>
</html>
