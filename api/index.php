<?php
header('Content-Type: application/json');

require_once './db_connection.php';

// Fetch users
$sql = "SELECT username, email FROM users";
$result = $db_connect->query($sql);

$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);

$db_connect->close();
?>

