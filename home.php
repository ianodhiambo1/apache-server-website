<?php
if (!isset($_SESSION['username'])) {
    header("Location: index.php?page=login");
    exit;
}

echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
echo "<a href='index.php?page=logout'>Logout</a>";
?>

