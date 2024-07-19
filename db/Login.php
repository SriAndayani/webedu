<?php
session_start();
include 'connect.php'; // Mengimpor koneksi database yang sudah ada

// Ambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Cek data di database
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $row['username'];
        echo "Login successful";
        header("Location: welcome.php");
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found";
}

$conn->close();
?>
