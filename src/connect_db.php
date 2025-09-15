<?php
$servername = "mysql";
$username = "test";
$password = "test1234";
$db = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";