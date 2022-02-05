<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    
    <!-- FONTAWESOME ICONS -->
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>


        
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="menu-area">
            <div class="row">
                <div class=" conatiner-fluid">
                    <!-- gTranslate Plugin -->
                    <span class="GTranslate"><?php echo do_shortcode('[gtranslate]'); ?></span>
                    <nav class="fixed-top navbar navbar-light">
                        <div class="container-fluid nBar">
                            <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link notranslate">
                                        <?php wp_nav_menu([
                                            'theme_location'    =>  'main_menu'
                                        ]); ?>
                                    </a>
                                </li>
                            </ul>    
                        </div>
                    </nav>
                </div>
            </div>            
        </section>
    </header>
    <!--Scroll to the top button-->
    <a onclick="topFunction()" id="myBtn" class="btn btn-sm d-none" title="Go to top">
        <i class="fas fa-angle-double-up"></i>
    </a>