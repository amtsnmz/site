<?php
include("../inc/connect.php");

$isim = $_POST['name'];
$email = $_POST['email'];
$konu = $_POST['subject'];
$mesaj = $_POST['message'];

$query = "INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ssss', $isim, $email, $konu, $mesaj);

if (mysqli_stmt_execute($stmt)) {
    // If message is successfully inserted, trigger Swal notification
    mysqli_close($conn);
    $response = [
        'status' => 'success',
        'message' => 'Mesajınız gönderildi!'
    ];
    echo json_encode($response);
    exit();
} else {
    mysqli_close($conn);
    $response = [
        'status' => 'error',
        'message' => 'Mesajınız gönderilemedi!'
    ];
    echo json_encode($response);
    exit();
}
?>
