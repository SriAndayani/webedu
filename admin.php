<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}
// Process form submissions for adding, editing, and deleting materials here
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <form method="POST" action="add_material.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="youtube_link">YouTube Link:</label>
        <input type="url" id="youtube_link" name="youtube_link" required>
        <br>
        <button type="submit">Add Material</button>
    </form>
    <hr>
    <?php
    // Code to fetch and display materials with edit and delete options
    ?>
</body>
</html>
