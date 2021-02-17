<?php
/**
 * Ovo je template koji se zove iz header-visitor. daje linkove na stranice ispod slogana na headeru
 */
        if(is_page() and wp_get_post_parent_id(get_the_id())) { ?>
        <div class="pages">
            <ul class="pages-list">
                <li class="pages-list-item"><a href="<?php echo get_permalink(wp_get_post_parent_id(get_the_id())); ?>"><i class="fas fa-images"></i>&nbsp;Sve Galerije</a><span></span></li>
            </ul>
        </div>

    <?php }

        if(get_post_type()=='post') { ?>
        <div class="pages">
            <ul class="pages-list">
                <li class="pages-list-item"><a href="<?php echo esc_url(site_url('/objave')); ?>"><i class="fas fa-blog"></i>&nbsp;Sve objave</a><span></span></li>
            </ul>
        </div>
        <?php }
        if(get_post_type()=='akcije' and !is_archive()) { ?>
            <div class="pages">
                <ul class="pages-list">
                    <li class="pages-list-item"><a href="<?php echo esc_url(site_url('/akcija')); ?>"><i class="fas fa-tag"></i></i>&nbsp;Sve akcije</a><span></span></li>
                </ul>
            </div>
            <?php }

    ?>