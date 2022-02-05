<footer>
    <div class="bg-dark text-light footerwp row">
        <div class="col-lg-4 col-md-6 col-sm-10 mx-auto">            
            <div class="social-menu">
                <?php 
                    $fb = get_theme_mod('set_socialmedia_fb');
                    $ig = get_theme_mod('set_socialmedia_ig');
                    $yt = get_theme_mod('set_socialmedia_youtube');
                ?>
                <ul>
                    <li>
                        <a href="<?php echo $fb ?>" target="blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $ig ?>" target="blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $yt ?>" target="blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>                
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 mt-2 mx-auto contact-poweredby-section">
            <?php 
                $web     = get_theme_mod('set_contact_website'); 
                $amcLogo = get_template_directory() . "/wp-content/themes/mt-blog/assets/img/amc_logo.png";
            
            ?>
            <div class="row">
                <p class="col-lg-6 col-md-6 col-sm-12 my-auto poweredby">Powered by:</p>
                <a href="http://<?php echo $web ?>" target="_blank" class="col-lg-3 col-md-6 col-sm-12 my-auto"><img src="<?php bloginfo('template_url'); ?>/assets/img/amc_logo.png" alt="AMC Logo" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-10 col-sm-10 my-auto mx-auto">
            <p class="text-center"><?php echo get_theme_mod('set_copyright'); ?> | Developed by <a href="mailto:dimitrioskidarko91@gmail.com">D.Dimitrioski</a></p>
        </div>
        
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>