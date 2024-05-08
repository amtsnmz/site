<?php

include("inc/connect.php");

$sql = "SELECT * FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $usernameValue = $row['username'];
    $typeValue = $row['type'];
    $aboutValue = $row['about'];
    $imgValue = $row['img'];
} else {
    $usernameValue = '';
    $typeValue = '';
    $aboutValue = '';
    $imgValue = '';
}

$conn->close();
?>

<section class="home section" id="home">
    <div class="container">
        <div class="row">
            <div class="home-info padd-15">
                <h3 class="hello">Merhaba, ben <span class="name">
                        <?php echo $usernameValue; ?>
                    </span></h3>
                <h3 class="my-profession"><span class="typing"> <?php echo $typeValue; ?></span></h3>
                <p><?php echo $aboutValue; ?></p>
                <a href="#about" class="btn hire-me">Hakkımda</a>
            </div>
            <div class="home-img padd-15">
                <img src="<?php echo $imgValue; ?>" alt="Profile">
            </div>
        </div>
    </div>
</section>