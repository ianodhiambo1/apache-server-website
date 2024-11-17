<?php
// Include the database connection
require 'db.php';

// Start session for login session management
session_start();

// Routing logic
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page) {
    case 'signup':
        include 'signup.php';
        break;
    case 'login':
        include 'login.php';
        break;
    case 'home':
        include 'home.php';
        break;
    case 'logout':
        session_destroy();
        header("Location: index.php?page=login");
        break;
    default:
        echo "Page not found!";
        break;
}
?>

