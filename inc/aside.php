<?php

include("inc/connect.php");

$sql = "SELECT * FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $usernameValue = $row['username'];
} else {
    $usernameValue = '';
}

$conn->close();
?>

<div class="aside">
    <div class="logo">
        <a href="/"><?php echo $usernameValue; ?></a>
    </div>
    <div class="nav-toggler">
        <span></span>
    </div>
    <ul class="nav">
        <li><a href="#home" class="active"><i class="fa fa-home"></i> Anasayfa</a></li>
        <li><a href="#about"><i class="fa fa-user"></i> Hakkımda</a></li>
        <li><a href="#portfolio"><i class="fa fa-briefcase"></i> Portfolyo</a></li>
        <li><a href="#contact"><i class="fa fa-comments"></i> İletişim</a></li>
    </ul>
</div>