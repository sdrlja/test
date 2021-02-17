<?php

?>

<div class="mobile__menu">
        <ul class="menu-close">
            <li class="menu-close-item mobile"><i class="fas fa-times"></i></li>
        </ul>
        <h4 class="mobile__menu-title">Izbornik</h4>
        <ul class="modal">
                <li class="modal-item <?php echo $pageFront; ?>"><a href="<?php echo esc_url(site_url()); ?>"><i class="fas fa-home"></i>&nbsp;Studio</a></li>
                <li class="modal-item <?php echo $pageStudio ?>"><a href="<?php echo esc_url(site_url('/studio')); ?>"><i class="fas fa-camera-retro"></i>&nbsp;O nama</a></li>
                <li class="modal-item <?php echo $pageCjenik ?>"><a href="<?php echo esc_url(site_url('/cijenik')); ?>"><i class="fas fa-dollar-sign"></i>&nbsp;Cijenik</a></li>
                <li class="modal-item <?php echo $pageAkcija ?>"><a href="<?php echo esc_url(site_url('/akcija')); ?>"><i class="fas fa-tag"></i>&nbsp;Akcija</a></li>
                <li class="modal-item <?php echo $pageGalerija ?>"><a href="<?php echo esc_url(site_url('/galerija')); ?>"><i class="fas fa-image"></i>&nbsp;Galerija</a></li>
                <li class="modal-item <?php echo $pageBlog; ?>"><a href="<?php echo esc_url(site_url('/objave')); ?>"><i class="fas fa-blog"></i>&nbsp;Objave</a></li>
        </ul> 
        <h4 class="mobile__menu-title">Naši kontakti:</h4>
        <?php echo do_shortcode('[contacts]', false); ?>
        
    </div>