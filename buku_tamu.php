<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-image: url('login.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .container, .tamu-container, .comment-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 50%;
            margin: 20px auto;
        }

        .comment-container {
            color: #f3f3f3;
        }

        input, button, textarea {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            color: #435e8a;
            cursor: pointer;
        }

        button:hover {
            background-color: #3a4f73;
        }

        .navbar, .footer {
            background-color: #162860;
            text-align: center;
            padding: 10px;
        }

        .navbar a, .footer a {
            color: #f3f3f3;
            text-decoration: none;
            margin-right: 15px;
        }

        .navbar a:last-child {
            margin-right: 0;
        }

        .footer {
            margin-top: 30px;
        }

        .comment {
            margin-bottom: 20px;
        }

        hr {
            margin: 20px 0;
            color: #f3f3f3;
        }

        h1, h2 {
            color: #f3f3f3;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p, form {
            color: #f3f3f3;
            font-family: 'Lato', sans-serif;
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

    <div class="tamu-container">
        <h1>Buku Tamu</h1>
        <form action="#" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="5" required></textarea>
            
            <input type="submit" value="Submit" style="background-color: #ffd9ea; color: #162860; border: none; cursor: pointer; padding: 10px; border-radius: 5px;">
        </form>
    </div>

    <div class="comment-container">
        <h2>Daftar Pengunjung</h2>
        <hr>
        <?php
        if (!empty($_GET['name']) && !empty($_GET['comment'])) {
            $name = htmlspecialchars($_GET['name']);
            $comment = htmlspecialchars($_GET['comment']);
            echo "<div class='comment'><b>Pengirim:</b> $name (" . date('Y-m-d H:i:s') . ")<br>";
            echo "<b>Komentar:</b> $comment</div><hr>";
        }
        ?>
    </div>

    <div class="footer">
        <p>&copy; 2025 Buku Tamu</p>
        <a href="logout.php" style="display: inline-block; padding: 10px 20px; background-color: #ffd9ea; color: #162860; text-decoration: none; border-radius: 5px;">Logout</a>
    </div>
</body>
</html>
