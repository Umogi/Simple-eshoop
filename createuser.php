<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection wasn't succefull". mysqli_connect_error());
    }
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO clients (username, email, password)
            VALUES ('$username','$email','$password')";
    $conn -> query($sql);

    header("Location: eshoop.php");
    exit();

?>