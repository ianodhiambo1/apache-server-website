<?php
header('Content-Type: application/json');

require_once '../config/db_connection.php';

// Fetch users
$sql = "SELECT username, email FROM users";
$result = $conn->query($sql);

$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);

$conn->close();
?>

