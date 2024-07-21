<?php 
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM tbl_users
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0){
    header("Location: dashboard.html");
} 
else {
    echo "Error";
}
?>