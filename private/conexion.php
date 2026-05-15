<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "placehoder_name";

$conn = new mysqli($server, $username, $password, $db);

if (!$conn->connect_error) {
    echo "Connected succesfully";
} else {
    die($conn->error);
}

$conn->close();
?>