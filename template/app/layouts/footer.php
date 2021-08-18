

<footer class="footer">

    <section class="app bg-map">

        <div class="footer-row">
        
            <div class="footer-col">

                <img class="footer-logo" src="http://localhost/cms-php/<?php echo $setting['logo'] ?>" alt="">
                
                <p class="footer-p"><?php echo $setting['description'] ?></p>                    
                </p>

            </div>

            <div class="footer-col">

                <h3 class="footer-section-title">MOST POPULAR</h3>
                <div class="footer-section-link-item">
                    <a href="#"><?php echo $article['title']; ?></a>
                    <p><?php echo $article['created_at']; ?></p>
                </div>

                <div class="footer-line"></div>
                
                <div class="footer-section-link-item">
                    <a href="#"><?php echo $article['title']; ?></a>
                    <p><?php echo $article['created_at']; ?></p>
                </div>

            </div>

            <div class="footer-col">

                <h3 class="footer-section-title">MOST POPULAR</h3>
                <div class="footer-section-link-item">
                    <a href="#"><?php echo $article['title']; ?></a>
                    <p><?php echo $article['created_at']; ?></p>
                </div>

                <div class="footer-line"></div>
                <div class="footer-section-link-item">
                    <a href="#"><?php echo $article['title']; ?></a>
                    <p><?php echo $article['created_at']; ?></p>
                </div>
                
            </div>

        </div>

        <div class="footer-line"></div>

        <div class="footer-row">
            <ul class="footer-menu">

                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy policy</a></li>
                <li><a href="">Jobs advertising</a></li>
                <li><a href="">Contact us</a></li>

            </ul>

            <ul class="footer-social-network">

                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-bitcoin"></i></a></li>

            </ul>
            
        </div>

    </section><!--fin de la deuxième section de l'application -->

</footer><!--fin de pied de page -->

<script type="text/javascript">
    function showMenu() {
        var x = document.getElementById("menu");
        if (x.className === "header-menu") {
            x.className += " show";
            console.log(1);
        } else {
            x.className = "header-menu";
            console.log(0);
        }
    }
</script>

</body>
</html>