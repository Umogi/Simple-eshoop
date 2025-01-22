<?php
    $wrong_password = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['password'] !== $_POST['password_sec']) {
            $wrong_password = true;
        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <style>

            body {
                background-color: #121212;
                color: #ffffff;
                font-family: Arial, sans-serif;
                justify-content: center;
                display: flex;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .singup-form {
                background-color: #1e1e1e;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                width: 300px;
                text-align: center;
                padding: 20px 40px;
            }
            
            .singup-form h2 {
                margin-bottom: 20px;
                color: #9c27b0;
            }

            .singup-form input[type="text"],
            .singup-form input[type="email"],
            .singup-form input[type="password"]{
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: none;
                border-radius: 5px;
                background-color: #2b2b2b;
                color: #ffffff;
                box-sizing: border-box;
            }

            .singup-form input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #9c27b0;
                border: none;
                border-radius: 5px;
                color: #ffffff;
                font-weight: bold;
                cursor: pointer;
            }

            .singup-form input[type="submit"]:hover {
                background-color: #7b1fa2;
            }

            .singup-form a {
                color: #9c27b0;
                text-decoration: none;
                display: block;
                margin-top: 15px;
            }

            .singup-form a:hover {
                text-decoration: underline;
            }

        </style>
    </head>
    <body>
        <div class="singup-form">
            <h2>Sing Up</h2>

            <?php if ($wrong_password): ?>
                <p style="color: red;">Passwords do not match!</p>
            <?php endif; ?> 

            <form action="createuser.php" method="POST">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password", placeholder="Password">
                <input type="password" id="password_sec" name="password_sec", placeholder="Password Again">
                <input type="submit" value="Sing Up">
                <a href="login.php">Login</a>
            </form>
        </div>
    </body>
</html>