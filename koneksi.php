<?php
$servername = "localhost";
$database = "auth";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
    header("Location: dashboard.html");
}