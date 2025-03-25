<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="weblogo-removebg-preview.png">
    <title>Login</title>
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-image: url('login.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            margin-top: 20px;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            margin: 20px auto;
            text-align: left;
        }

        input {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background: #435e8a;
            color: white;
            padding: 8px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #3a4f73;
        }

        .error {
            background: #f9d0d0;
            border: 1px solid #f29595;
            color: #333;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }

        .success {
            background: #d0f9d0;
            border: 1px solid #95f295;
            color: #333;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 30px;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 30px;
            font-family: 'Lato', sans-serif;
        }

        .login-container h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container input {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            background: #435e8a;
            color: white;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container button:hover {
            background: #3a4f73;
        }

        .login-container .error {
            background: #f9d0d0;
            border: 1px solid #f29595;
            color: #333;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h1 style="text-align: center; color:#f3f3f3;">Login</h1>
            <form action="action_login.php" method="post">
                <input type="text" name="username" id="username" placeholder="Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>