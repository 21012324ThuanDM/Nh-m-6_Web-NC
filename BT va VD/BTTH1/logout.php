<?php
session_start();
$_SESSION["IsLogin"] = false; // Reset login status
session_destroy(); // Optional: Destroy all session data

header("Location: login.php"); // Redirect to login page
exit();
?>