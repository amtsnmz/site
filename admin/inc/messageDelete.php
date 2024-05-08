<?php
include("../inc/connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $silme_sorgusu = "DELETE FROM messages WHERE id=$id";
    if (mysqli_query($conn, $silme_sorgusu)) {
        echo "Mesaj başarıyla silindi.";
    } else {
        echo "Hata: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

header("Location: ../#contactMessagesTable");
exit;
?>
