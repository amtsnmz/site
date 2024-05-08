<!DOCTYPE html>
<html lang="tr">

<head>
    <?php include ("inc/head.php"); ?>
</head>

<body class="dark">
    <!-- == main container start == -->
    <div class="main-container">
        <!-- == aside start == -->
        <?php include ("inc/aside.php"); ?>
        <!-- == aside end == -->
        <!-- == main content start == -->
        <div class="main-content">
            <!-- == home section start == -->
            <?php include ("inc/homeSection.php"); ?>
            <!-- == home section end == -->
            <!-- == about section start == -->
            <?php include ("inc/aboutSection.php"); ?>
            <!-- == about section end == -->
            <!-- == portfolio section start == -->
            <?php include ("inc/portfolioSection.php"); ?>
            <!-- == portfolio section end == -->
            <!-- == contact section start == -->
            <?php include ("inc/contactSection.php"); ?>
            <!-- == contact section end == -->
            <!-- == footer start == -->
            <?php include ("inc/footer.php"); ?>
            <!-- == footer end == -->
        </div>
        <!-- == main content end == -->
    </div>
    <!-- == main container end == -->
    <!-- == style switcher start == -->
    <?php include ("inc/styleSwitcher.php"); ?>
    <!-- == style switcher end == -->
    <!-- == preloader start == -->
    <?php include("inc/preloader.php"); ?>
    <!-- == preloader end == -->
    <!-- == up btn start == -->
    <div id="top">
        <i class="fa-solid fa-up-long"></i>
    </div>
    <!-- == up btn end == -->
    <!-- js link -->
    <?php include ("inc/scriptLink.php"); ?>
</body>

</html>