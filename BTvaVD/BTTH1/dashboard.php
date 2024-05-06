<?php
session_start();

if ($_SESSION["IsLogin"] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Welcome to Dashboard</h2>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>