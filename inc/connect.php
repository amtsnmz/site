<?php
$servername = "sql105.infinityfree.com";
$username = "if0_36504319";
$password = "Xsara4664";
$dbname = "if0_36504319_ahmet";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>