<section class="portfolio section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Portfolyo Düzenle</h2>
            </div>
        </div>
        <?php include ("inc/portfolioAdd.php"); ?>
        <div class="form padd-15">
            <form action="inc/portfolioAdd.php" method="post">
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <label class="padd-15">Portfolyo Resmi (url)</label>
                            <br>
                            <input type="text" class="form-control" name="img" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <button type="submit" class="btn">Portfolyo Resim Ekle</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="section-title padd-15">
                <h2>Portfolyo Resimleri</h2>
            </div>
            <div class="row padd-15" id="portfolioContainer">
                <?php
                
                include("../inc/connect.php");

                $sql = "SELECT id, image FROM portfolio";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="portfolio-item padd-15" id="portfolio_' . $row["id"] . '">
                        <button onclick="portfolio_delete(' . $row["id"] . ')" class="delete-button btn-delete" data-id="' . $row["id"] . '"><i class="bi bi-trash3-fill"></i></button>
                    <div class="portfolio-item-inner shadow-dark">
                        <div class="portfolio-img">
                            <img src="' . $row["image"] . '" alt="Portfolyo Resmi">
                        </div>
                    </div>
                </div>';
                    }
                } else {
                    echo "<p class='padd-15' style='color: var(--skin-color); background-color: white; padding: 10px 15px; width: 100%; border-radius: 10px;'>Hiçbir resim bulunmadı</p>";
                }
                $conn->close();
                ?>
            </div>
        </div>

        <script>
            function portfolio_delete(id) {
                if (confirm("Bu resmi silmek istediğinize emin misiniz?")) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "inc/delete_portfolio.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                var portfolioItem = document.getElementById("portfolio_" + id);
                                portfolioItem.parentNode.removeChild(portfolioItem);
                            } else {
                                alert("Bir hata oluştu, resim silinemedi.");
                            }
                        }
                    };
                    xhr.send("id=" + id);
                }
            }
        </script>
    </div>
</section>