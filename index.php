<?php get_header(); ?>
        
        <div class="mainSection-container">
            
            <div class="contentRow-1">
                
                <?php
                    get_template_part('menusidebar');
                
                    get_template_part('mainarticle');
                
                    get_template_part('secondsidebar');
                ?>
                
            </div>
            
            <?php get_template_part('recentarticleblock'); ?>
            
<?php get_footer(); ?>