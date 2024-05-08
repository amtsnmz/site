<?php

include("../inc/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini güvenli bir şekilde al
    $title = $_POST['title'];
    $favicon = $_POST['favicon'];
    $keywords = $_POST['keywords'];
    $description = $_POST['description'];

    // Güncelleme sorgusunu hazırla
    $sql = "UPDATE settings SET title=?, favicon=?, keywords=?, description=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $title, $favicon, $keywords, $description);

    if ($stmt->execute()) {
        // Başarılı bir şekilde güncellendiğinde, başka bir sayfaya yönlendir
        header("Location: ../#home");
        exit();
    } else {
        echo "<p class='padd-15' style='color: red; padding: 10px 15px; background-color: white; border-radius: 10px; width: 50%; margin-left: 20px;'>Hata: Güncelleme sırasında bir hata oluştu.</p>";
    }
}

$sql = "SELECT * FROM settings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $titleValue = $row['title'];
    $faviconValue = $row['favicon'];
    $keywordsValue = $row['keywords'];
    $descriptionValue = $row['description'];
} else {
    $titleValue = '';
    $faviconValue = '';
    $keywordsValue = '';
    $descriptionValue = '';
}

$conn->close();
?>
