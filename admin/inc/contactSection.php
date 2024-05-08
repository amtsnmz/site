<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>İletişim Düzenle</h2>
            </div>
        </div>
        <?php include ("inc/contactEdit.php"); ?>
        <div class="form padd-15">
            <form action="inc/contactEdit.php" method="post">
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Instagram Kullanıcı Adı</label>
                            <br>
                            <input type="text" class="form-control" placeholder="İsim" name="ig"
                                value="<?php echo $igValue; ?>">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Discord Kullanıcı Id</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Örn: 882582406358515713" name="discord"
                                value="<?php echo $discordValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Email</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Örn: efwlxc@gmail.com" name="email"
                                value="<?php echo $emailValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Website</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Örn: efwlxc.com.tr" name="website"
                                value="<?php echo $websiteValue; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <button type="submit" class="btn">İletişim Bilgilerini Düzenle</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="section-title padd-15">
                <h2>Mesajlar</h2>
            </div>
        </div>
        <div class="row padd-15">
            <div class="table-responsive padd-15">
                <table id="contactMessagesTable" class="table padd-15">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>İsim</th>
                            <th>Email</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Veritabanı bağlantısı
                        include ("../inc/connect.php");

                        $query = "SELECT * FROM messages";
                        $result = $conn->query($query);

                        // Sorgu başarılı bir şekilde çalıştırıldı mı?
                        if (!$result) {
                            // Sorgu başarısız olduğunda hatayı yazdır
                            echo "Sorgu hatası: " . $conn->error;
                        } else {
                            // Verileri çekme işlemini devam ettir
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<style>table {display: inline-block;}</style>";
                                    echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['subject'] . "</td>";
                                    echo "<td>" . $row['message'] . "</td>";
                                    echo "<td><a href='inc/messageDelete.php?id=" . $row['id'] . "'><i class='delete-icon bi bi-trash-fill'></i></a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<style>table {display: none;}</style>";
                                echo "<p style='border-radius: 10px; padding: 10px 15px; background-color: white; color: var(--skin-color);'>Henüz mesaj yok</p>";
                            }
                        }

                        // Bağlantıyı kapatma
                        $conn->close();
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<style>
    #contactMessagesTable {
        width: 100%;
        border-radius: 10px;
        margin-top: 20px;
        color: var(--text-black-700);
    }

    #contactMessagesTable th,
    #contactMessagesTable td {
        border: 1px solid gray;
        padding: 8px;
        text-align: left;
    }

    #contactMessagesTable th {
        color: var(--skin-color)
    }

    .delete-icon {
        color: var(--skin-color);
    }
</style>