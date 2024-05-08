<section class="portfolio section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Portfolyo</h2>
            </div>
        </div>
        <div class="row">
            <div class="portfolio-heading padd-15">
                <h2>Projelerim :</h2>
            </div>
        </div>
        <div class="row">
            <!-- == portfolio item start == -->
            <?php
            
            include("inc/connect.php");

            $sql = "SELECT id, image FROM portfolio";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="portfolio-item padd-15" id="portfolio_' . $row["id"] . '">
                    <div class="portfolio-item-inner shadow-dark">
                        <div class="portfolio-img">
                            <a href="' . $row["image"] . '" target="_blank"><img src="' . $row["image"] . '" alt="Portfolyo"></a>
                        </div>
                    </div>
                </div>';
                }
            } else {
                echo "<p class='padd-15' style='color: var(--skin-color); background-color: white; padding: 10px 15px; width: 100%; border-radius: 10px;'>Yakında..</p>";
            }
            $conn->close();
            ?>
            <!-- == portfolio item end == -->
        </div>
    </div>
</section>