<?php
$conn = mysqli_connect("localhost", "root", "", "news");
mysqli_set_charset($conn, "utf8mb4");
if (!$conn) {
    die("Error " . mysqli_connect_error());
}

session_start();
?>