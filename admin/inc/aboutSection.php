<section class="about section" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Hakkımda Düzenle</h2>
            </div>
        </div>
        <?php include("inc/aboutEdit.php"); ?>
        <div class="form padd-15">
            <form action="inc/aboutEdit.php" method="post">
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Hakkında Bilgi</label>
                            <br>
                            <textarea name="aboutTxt" class="form-control" id=""
                                placeholder="Hakkında bilgi"><?php echo $aboutTxtValue; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Doğum Günü</label>
                            <input type="text" name="birthday" class="form-control" placeholder="Örn: 16 Mart"
                                value="<?php echo $birthdayValue; ?>">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Website</label>
                            <input type="text" name="website" class="form-control"
                                placeholder="Örn: vibescripts.com.tr" value="<?php echo $websiteValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Instagram Kullanıcı Adı</label>
                            <input type="text" name="instagram" class="form-control" placeholder="Örn: kroxly"
                                value="<?php echo $instagramValue; ?>">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Yaş</label>
                            <input type="text" name="year" class="form-control" placeholder="Örn: 18"
                                value="<?php echo $yearValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Örn: kroxly@gmail.com"
                                value="<?php echo $emailValue; ?>">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Şehir</label>
                            <input type="text" name="city" class="form-control" placeholder="Örn: İstanbul"
                                value="<?php echo $cityValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Html</label>
                            <input type="text" name="html" class="form-control" placeholder="Örn: 52"
                                value="<?php echo $htmlValue; ?>">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Css</label>
                            <input type="text" name="css" class="form-control" placeholder="Örn: 46"
                                value="<?php echo $cssValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Javascript</label>
                            <input type="text" name="js" class="form-control" placeholder="Örn: 78"
                                value="<?php echo $jsValue; ?>">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Php</label>
                            <input type="text" name="php" class="form-control" placeholder="Örn: 25"
                                value="<?php echo $phpValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <button type="submit" class="btn">Hakkımda Bilgilerini Düzenle</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>