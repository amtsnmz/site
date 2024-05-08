<?php

include("../inc/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instagram = $_POST['ig'];
    $discord = $_POST['discord'];
    $email = $_POST['email'];
    $website = $_POST['website'];

    $sql = "UPDATE contact SET instagram='$instagram', discord='$discord', email='$email', website='$website'";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the same page after successful update
        header("Location: ../#contact");
        exit();
    } else {
        echo "<p class='padd-15' style='color: red; padding: 10px 15px; backgorund-color: white; border-radius: 10px; width: 50%; margin-left: 20px;'>Hata: " . $sql . "</p><br>" . $conn->error;
    }
}

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $igValue = $row['instagram'];
    $discordValue = $row['discord'];
    $emailValue = $row['email'];
    $websiteValue = $row['website'];
} else {
    $igValue = '';
    $discordValue = '';
    $emailValue = '';
    $websiteValue = '';
}

$conn->close();
?>