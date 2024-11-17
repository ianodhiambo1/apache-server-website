<?php
$servername = "localhost"; // or your server name
$username = "root"; // your database username
$password = "owilio22"; // your database password
$dbname = "CAT1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

