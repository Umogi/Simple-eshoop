<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            color: #9c27b0;
        }

        p {
            text-align: center;
            margin: 20px 0;
            font-size: 16px;
        }

        .back-button {
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 10px 20px;
            background-color: #9c27b0;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .back-button:hover {
            background-color: #7b1fa2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($user_name); ?></h1>
        <p>This is your profile page. You can update your details and view your orders here.</p>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>