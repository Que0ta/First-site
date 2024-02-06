<?php

$name = $_POST["name"];
$email = $_POST["email"];
$submit = $_POST["terms"];

$host = "localhost";
$dbname = "message_ac";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host, 
                        username: $username, 
                        pass: $password,
                        database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error");
}

$sql = "INSERT INTO Form (name, email)
        VALUES (?, ?)";

$stmt = mysqli_stmt_init();

if ( ! mysqli_stmt_prepare($stmt, $sql) ) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ss",
                        $name, $email);

mysqli_stmt_execute($stmt);


echo "successful!";