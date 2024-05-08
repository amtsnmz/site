<?php
include("inc/connect.php");

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $igValue = $row['instagram'];
    $discordValue = $row['discord'];
    $emailValue = $row['email'];
    $websiteValue = $row['website'];
} else {
    $igValue = '';
    $discordValue = '';
    $emailValue = '';
    $websiteValue = '';
}

$conn->close();
?>

<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>İletişim</h2>
            </div>
        </div>
        <h3 class="contact-title padd-15">Benimle sosyal medya hesaplarımdan iletişime geçebilirsin</h3>
        <h4 class="contact-sub-title padd-15">Yazılara tıklayarak bana ulaş</h4>
        <div class="row">
            <!-- == contact info start == -->
            <div class="contact-info-item padd-15">
                <div class="icon">
                <i class="bi bi-instagram"></i>
                    <h4>Instagram</h4>
                    <p><a target="_blank" href="https://instagram.com/<?php echo $igValue; ?>"><?php echo $igValue; ?></a></p>
                </div>
            </div>
            <div class="contact-info-item padd-15">
                <div class="icon">
                    <i class="bi bi-discord"></i>
                    <h4>Discord</h4>
                    <p><a target="_blank" href="https://discord.com/users/<?php echo $discordValue; ?>">Profilimi Görmek İçin Tıkla</a></p>
                </div>
            </div>
            <div class="contact-info-item padd-15">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                    <h4>Email</h4>
                    <p><a target="_blank" href="mailto:<?php echo $emailValue; ?>"><?php echo $emailValue; ?></a></p>
                </div>
            </div>
            <div class="contact-info-item padd-15">
                <div class="icon">
                    <i class="fa fa-globe-europe"></i>
                    <h4>Website</h4>
                    <p><a target="_blank" href="https://<?php echo $websiteValue; ?>"><?php echo $websiteValue; ?></a></p>
                </div>
            </div>
            <!-- == contact info end == -->
        </div>
        <h3 class="contact-title padd-15">Benimle iletişime geçebilirsin</h3>
        <h4 class="contact-sub-title padd-15">Aklına takılan herhangi bir soruyu sorabilirsin.</h4>
        <!-- == contact form start == -->
        <div class="contact-form padd-15">
            <form action="inc/sendMessage.php" method="POST">
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="İsim" name="name" required>
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Konu" name="subject" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="" placeholder="Mesaj" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <button type="submit" class="btn">Mesajı Gönder</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- == contact form end == -->
    </div>
</section>
