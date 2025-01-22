<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "users_db");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (strstr($_POST['username_email'], "@")){
            $email = $_POST['username_email'];
            $password = $_POST['password'];
            
            $sql = "SELECT * FROM clients WHERE email = '$email'";
            $result = $conn -> query($sql);
            
        }else{
            $username = $_POST['username_email'];
            $password = $_POST['password'];
            
            $sql = "SELECT * FROM clients WHERE username = '$username'";
            $result = $conn -> query($sql);
        }

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: eshoop.php");
                exit();
            } else {
                $error = "Invalid credentials.";
            }
        } else {
            $error = "User not found.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: #1e1e1e;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }

        .login-form h2 {
            margin-bottom: 20px;
            color: #9c27b0;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #2b2b2b;
            color: #ffffff;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #9c27b0;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background-color: #7b1fa2;
        }

        .login-form a {
            color: #9c27b0;
            text-decoration: none;
            display: block;
            margin-top: 15px;
        }

        .login-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-form">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" id="username_email" name="username_email" placeholder="Username or Email" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="submit" value="Log In">
    </form>
    <a href="singup.php">Sign Up</a>
</div>

</body>
</html>
