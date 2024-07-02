<?php
include 'db.php'; // Mengimpor koneksi database yang sudah ada

// Ambil data dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Cek apakah username atau email sudah digunakan
$sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username or email already taken";
    header("Location: register.html");
} else {
    // Masukkan data ke database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
