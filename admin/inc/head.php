<?php

include("inc/connect.php");

$sql = "SELECT * FROM settings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $titleValue = $row['title'];
    $faviconValue = $row['favicon'];
    $keywordsValue = $row['keywords'];
    $descriptionValue = $row['description'];
} else {
    $usernameValue = '';
    $faviconValue = '';
    $keywordsValue = '';
    $descriptionValue = '';
}

$conn->close();
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $descriptionValue; ?>">
<meta name="keywords" content="<?php echo $keywordsValue; ?>">
<title>Admin Panel</title>

<!-- css link -->
<link rel="shortcut icon" href="<?php echo $faviconValue; ?>" type="image/x-icon">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- style switcher -->
<link rel="stylesheet" href="assets/css/skins/color-1.css" class="alternate-style" title="color-1">
<link rel="stylesheet" href="assets/css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
<link rel="stylesheet" href="assets/css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
<link rel="stylesheet" href="assets/css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
<link rel="stylesheet" href="assets/css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
<link rel="stylesheet" href="assets/css/style-switcher.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">