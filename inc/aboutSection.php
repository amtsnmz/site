<section class="about section" id="about">
    <?php
    
    include("inc/connect.php");

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
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Hakkımda</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>Websiteme hoşgeldin! Ben <?php echo $usernameValue; ?> &
                            <span><?php echo $typeValue; ?></span></h3>
                        <p><?php echo $aboutTxtValue; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="personel-info padd-15">
                        <div class="row">
                            <div class="info-item padd-15">
                                <p>Doğum Günü : <span><?php echo $birthdayValue; ?></span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Yaş : <span><?php echo $yearValue; ?></span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Website : <span><?php echo $websiteValue; ?></span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Email : <span><?php echo $emailValue; ?></span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Instagram : <span><?php echo $instagramValue; ?></span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Şehir : <span><?php echo $cityValue; ?></span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="buttons padd-15">
                                <a href="#contact" class="btn">İletişim</a>
                            </div>
                        </div>
                    </div>
                    <div class="skills padd-15">
                        <div class="row">
                            <div class="skill-item padd-15">
                                <h5>HTML</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: <?php echo $htmlValue; ?>%;"></div>
                                    <div class="skill-percent">%<?php echo $htmlValue; ?></div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>CSS</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: <?php echo $cssValue; ?>%;"></div>
                                    <div class="skill-percent">%<?php echo $cssValue; ?></div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>JS</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: <?php echo $jsValue; ?>%;"></div>
                                    <div class="skill-percent">%<?php echo $jsValue; ?></div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>PHP</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: <?php echo $phpValue; ?>%;"></div>
                                    <div class="skill-percent">%<?php echo $phpValue; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>