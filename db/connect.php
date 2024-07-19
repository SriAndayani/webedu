<?php
    $hostname = "localhost";
    $username = "root"; // sesuai dengan username database Anda
    $password = ""; // sesuaikan dengan password database Anda
    $dbname = "webedu"; // sesuaikan dengan nama database Anda
    $connect = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$connect){
        die("Koneksi database GAGAL: " . mysqli_connect_error());
    } 
?>
