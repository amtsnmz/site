<section class="home section" id="home">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Site Genel Ayarlar</h2>
            </div>
        </div>
        <?php include ("inc/siteSettings.php"); ?>
        <div class="form padd-15">
            <form action="inc/siteSettings.php" method="post">
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Site Başlık</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Örn: Kroxly | Kişisel Site"
                                name="title" value="<?php echo htmlspecialchars($titleValue); ?>" required>
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Site İcon</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Favicon Url (60x60 Önerilir)"
                                name="favicon" value="<?php echo htmlspecialchars($faviconValue); ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Meta Kelimeleri</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Örn: kroxly, vibescripts, script"
                                name="keywords" value="<?php echo htmlspecialchars($keywordsValue); ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Meta Açıklaması</label>
                            <br>
                            <textarea name="description" class="form-control"
                                required><?php echo htmlspecialchars($descriptionValue); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <button type="submit" class="btn">Site Ayarlarını Düzenle</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="row">
            <div class="section-title padd-15">
                <h2>Anasayfa Düzenle</h2>
            </div>
        </div>
        <?php include ("inc/homeEdit.php"); ?>
        <div class="form padd-15">
            <form action="inc/homeEdit.php" method="post">
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <img src="<?php echo $imgValue; ?>" style="width: 25%; border-radius: 100%;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">İsminiz</label>
                            <br>
                            <input type="text" class="form-control" placeholder="İsim" name="username"
                                value="<?php echo $usernameValue; ?>">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Tür</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Örn: Web Designer" name="type"
                                value="<?php echo $typeValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Profil Resmi (url)</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Profil Resmi (url)" name="img"
                                value="<?php echo $imgValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Hakkında Kısa Bilgi</label>
                            <br>
                            <textarea name="about" class="form-control" id=""
                                placeholder="Hakkında kısa bilgi"><?php echo $aboutValue; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <button type="submit" class="btn">Anasayfa Bilgilerini Düzenle</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>