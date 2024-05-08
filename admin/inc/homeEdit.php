<?php

include("../inc/Adminconnect.php");
include("../inc/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini güvenli bir şekilde al
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $img = mysqli_real_escape_string($conn, $_POST['img']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);

    // Güncelleme sorgusunu hazırla
    $sql = "UPDATE home SET username=?, type=?, img=?, about=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $type, $img, $about);

    if ($stmt->execute()) {
        // Başarılı bir şekilde güncellendiğinde, başka bir sayfaya yönlendir
        header("Location: ../#home");
        exit();
    } else {
        echo "<p class='padd-15' style='color: red; padding: 10px 15px; backgorund-color: white; border-radius: 10px; width: 50%; margin-left: 20px;'>Hata: Güncelleme sırasında bir hata oluştu.</p>";
    }
}

$sql = "SELECT * FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $usernameValue = $row['username'];
    $typeValue = $row['type'];
    $imgValue = $row['img'];
    $aboutValue = $row['about'];
} else {
    $usernameValue = '';
    $typeValue = '';
    $imgValue = '';
    $aboutValue = '';
}

$conn->close();
?>
