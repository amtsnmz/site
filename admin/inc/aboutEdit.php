<?php

include("../inc/Adminconnect.php");
include("../inc/connect.php");

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aboutTxt = $_POST['aboutTxt'];
    $birthday = $_POST['birthday'];
    $website = $_POST['website'];
    $instagram = $_POST['instagram'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $html = $_POST['html'];
    $css = $_POST['css'];
    $js = $_POST['js'];
    $php = $_POST['php'];
    // Escaping single quotes in input fields
    $aboutTxt = mysqli_real_escape_string($conn, $_POST['aboutTxt']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $website = mysqli_real_escape_string($conn, $_POST['website']);
    $instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $html = mysqli_real_escape_string($conn, $_POST['html']);
    $css = mysqli_real_escape_string($conn, $_POST['css']);
    $js = mysqli_real_escape_string($conn, $_POST['js']);
    $php = mysqli_real_escape_string($conn, $_POST['php']);

    // Constructing the SQL query with escaped input
    $sql = "UPDATE about SET aboutTxt='$aboutTxt', birthday='$birthday', website='$website', instagram='$instagram', year='$year', email='$email', city='$city', html='$html', css='$css', js='$js', php='$php' WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the same page after successful update
        header("Location: ../");
        exit();
    } else {
        echo "<p class='padd-15' style='color: red; padding: 10px 15px; backgorund-color: white; border-radius: 10px; width: 50%; margin-left: 20px;'>Hata: " . $sql . "</p><br>" . $conn->error;
    }
}

// Fetching data for pre-filling the form
$sql = "SELECT * FROM about";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $aboutTxtValue = $row['aboutTxt'];
    $birthdayValue = $row['birthday'];
    $websiteValue = $row['website'];
    $instagramValue = $row['instagram'];
    $yearValue = $row['year'];
    $emailValue = $row['email'];
    $cityValue = $row['city'];
    $htmlValue = $row['html'];
    $cssValue = $row['css'];
    $jsValue = $row['js'];
    $phpValue = $row['php'];
} else {
    $aboutTxtValue = '';
    $birthdayValue = '';
    $websiteValue = '';
    $instagramValue = '';
    $yearValue = '';
    $emailValue = '';
    $cityValue = '';
    $htmlValue = '';
    $cssValue = '';
    $jsValue = '';
    $phpValue = '';
}

$conn->close();
?>