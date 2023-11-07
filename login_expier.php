<?php
session_start();

// Check if the user is logged in and the session has not expired.
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && time() < $_SESSION["timeout"]) {
    echo "Welcome, " . $_SESSION["username"] . "!";

    // You can add your content here for the logged-in user.
} else {
    // Redirect to the login page if the session has expired or the user is not logged in.
    header("Location: index.html");
    exit;
}
?>
