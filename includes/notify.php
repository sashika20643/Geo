<?php
session_start();

// Check if the message exists in the session
if (isset($_SESSION['message'])) {
    // Display the message and then remove it from the session
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
