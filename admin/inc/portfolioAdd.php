<?php

include("../inc/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $img = $_POST['img'];

    // Ekleme işlemi için SQL sorgusu
    $sql = "INSERT INTO portfolio (image) VALUES ('$img')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the same page after successful insertion
        header("Location: ../#portfolio");
        exit();
    } else {
        echo "<p class='padd-15' style='color: red; padding: 10px 15px; backgorund-color: white; border-radius: 10px; width: 50%; margin-left: 20px;'>Hata: " . $sql . "</p><br>" . $conn->error;
    }
}

$conn->close();
?>