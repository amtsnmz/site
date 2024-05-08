<?php
// Veritabanı bağlantısı için gerekli bilgileri içe aktarın
include("../inc/Adminconnect.php");
include("../inc/connect.php");

// POST isteği aracılığıyla gelen resim kimliğini alın
$id = $_POST['id'];

// Veritabanı bağlantısını oluşturun
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol edin
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// Silme sorgusunu hazırlayın
$sql = "DELETE FROM portfolio WHERE id = $id";

// Sorguyu çalıştırın ve sonucu kontrol edin
if ($conn->query($sql) === TRUE) {
    echo "Resim başarıyla silindi";
} else {
    echo "Bir hata oluştu, resim silinemedi: " . $conn->error;
}

// Veritabanı bağlantısını kapatın
$conn->close();
?>