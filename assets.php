<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users_db";

    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE users_db";
    $conn->query($sql);

    echo "Users DataBase created succesfully";


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE clients (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(256) NOT NULL,
        password VARCHAR(80) NOT NULL
    )";
    $conn->query($sql);

    echo "Table created successfully";
?>
