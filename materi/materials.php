<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
// Fetch materials from the database and display them here
?>
<!DOCTYPE html>
<html>
<head>
    <title>Materials</title>
</head>
<body>
    <h1>Materials</h1>
    <?php
    // Code to fetch and display materials
    ?>
</body>
</html>
