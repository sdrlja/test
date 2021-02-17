<?php
/**
 * Load global footer 
 * 
 */

 ?>
 </div> <!-- Closing of page-content -->
 <footer class="footer-content">
    <div class="footer-main">
        <div class="footer-left">
            <h4 class="footer-title">Foto studio Blic Mostar</h4>
            <?php wp_nav_menu(array('footer-left')); ?>
        </div>
        <div class="footer-centre">
        <h4 class="footer-title">Za korisnike</h4>
        <p>Korisničke stranice u pripremi. Naši registrirani korisnici će moći poslati slike na ispis izravno preko naše WEB Stranice. Obavijest o implementaciji usluge će biti na našoj stranici i društvenim mrežama. Vidimo se uskoro.</p>
        </div>
        <div class="footer-right">
        <h4 class="footer-title">Kontaktirajte nas</h4>
        <?php echo get_contacts_function(); ?>
        <h4 class="footer-title">Pratite nas na društvenim mrežema</h4>
        <?php echo get_social_networks_function(); ?>
        </div>
        
    </div>
    
    <hr class="footer-separator">
    
    <div class="footer-bottom">
    
        <div class="">
            <p>Made with&nbsp;</p>
        </div>
        <div class="heart">
            <i class="fas fa-heart heart-red pulsing"></i>
        </div>
        <div class="">
            <span>&nbsp;and&nbsp;</span>
            <i class="fas fa-glass-cheers"></i> 
        </div>
        
    </div>

    <div class="footer-creator">
        <a href="https://mojkist.com">
                <svg class="footer-logo-svg">
                    <use xlink:href="#mojkistlogo"></use>
                </svg>
            </a>
        </div>
 <?php wp_footer(); ?>
 </footer>



</body>
</html>