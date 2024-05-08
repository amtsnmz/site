<?php
session_start(); // Oturumu başlat

// Eğer kullanıcı çıkış yapmak istiyorsa
if (isset($_POST['logout'])) {
    session_destroy(); // Oturumu sonlandır
    header("Location: /admin"); // Kullanıcıyı giriş sayfasına yönlendir
    exit; // Opsiyonel olarak, kodun devam etmemesi için exit kullanabilirsin.
}

// Eğer kullanıcı giriş yapmışsa, ana sayfayı göster
if (isset($_SESSION['user'])) {
    ?>
    <!DOCTYPE html>
    <html lang="tr">

    <head>
        <?php include ("inc/head.php"); ?>

        <style>
            .logout-btn {
                transform: translateY(20px);
                font-size: 16px;
                font-weight: 500;
                padding: 12px 35px;
                color: white;
                border-radius: 40px;
                display: inline-block;
                white-space: nowrap;
                border: none;
                background: var(--skin-color);
                transition: all 0.5s ease;
                cursor: pointer;
            }

            @media (max-width: 1199px) {
                .logout-btn {
                    margin-left: 50px;
                }
            }
        </style>
    </head>

    <body class="dark">
        <div class="main-container">
            <?php include ("inc/aside.php"); ?>
            <div class="main-content">
                <section class="footer">
                    <form method="post">
                        <button class="logout-btn" name="logout">Çıkış Yap</button>
                    </form>
                </section>
                <!-- Geri kalan kodlar devam eder -->
                <?php include ("inc/homeSection.php"); ?>
                <?php include ("inc/aboutSection.php"); ?>
                <?php include ("inc/portfolioSection.php"); ?>
                <?php include ("inc/contactSection.php"); ?>
                <?php include ("inc/footer.php"); ?>
            </div>
        </div>
    </body>

    </html>
    <?php
} else {
    // Kullanıcı giriş yapmamışsa, giriş formunu göster
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "admin" && $password === "123") {
            $_SESSION['user'] = $username;
            header("Refresh:0");
        } else {
            // Hatalı giriş
            echo "Kullanıcı adı veya şifre yanlış.";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="tr">

    <head>
        <?php include ("inc/head.php"); ?>
        <style>
            .box {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                padding: 20px;
                background-color: var(--bg-black-100);
            }

            .box input {
                width: 100%;
                height: 50px;
                border-radius: 25px;
                background: var(--bg-black-100);
                border: 1px solid var(--bg-black-50);
                padding: 10px 25px;
                font-size: 16px;
                color: var(--text-black-700);
                transition: all 0.5s ease;
                ;
            }

            .box input,
            .box button {
                width: 100%;
                margin-bottom: 10px;
                padding: 10px;
                box-sizing: border-box;
            }

            .box button {
                ;
                color: #fff;
                border: none;
                cursor: pointer;
            }
        </style>
    </head>

    <body class="dark">
        <div class="box">
            <form method="post">
                <input type="text" name="username" placeholder="Kullanıcı Adı" required><br>
                <input type="password" name="password" placeholder="Şifre" required><br>
                <button type="submit" class="btn">Giriş Yap</button>
            </form>
        </div>
    </body>

    </html>
    <?php
}
?>