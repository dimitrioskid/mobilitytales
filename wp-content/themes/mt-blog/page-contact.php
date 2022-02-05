<?php get_header(); ?>
    <div class="content-area marginTop">
        <main>
            <section>
                <div class="row">
                    <div class="jumbotron jumbotron-fluid text-center">
                        <div class="container">
                            <h1 class="display-4"><?php the_title(); ?></h1>
                            <hr class="my-4">                            
                        </div>
                    </div>
                </div> 
            </section>
            <section class="middle-area mt-4 mb-5">
                <div class="container contact-page-container row mx-auto">
                    <!-- CONTACT FORM -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-info mt-4">
                            <p class="lead text-center">Contact Info</p>
                            <div class="info-p">
                                <?php 
                                    $phone = get_theme_mod('set_contact_phone');
                                    $email = get_theme_mod('set_contact_email');
                                    $web   = get_theme_mod('set_contact_website');
                                
                                ?>
                                <table class="table table-borderless mx-auto">
                                    <tbody>
                                        <tr>
                                            <th><i class="fab fa-whatsapp"></i><i class="fas fa-mobile-alt"></i></th>
                                            <td><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></td>
                                        </tr>
                                        <tr>
                                            <th><i class="far fa-envelope"></i></th>
                                            <td><a href="mailto:<?php echo $email ?>" translate="no"><?php echo $email ?></a></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fas fa-link"></i></th>
                                            <td><a href="http://<?php echo $web ?>" translate="no" target="blank"><?php echo $web ?></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- SOCIAL MEDIA ICONS -->
                        <div class="social-menu sm-contact">
                            <?php 
                                $fb = get_theme_mod('set_socialmedia_fb');
                                $ig = get_theme_mod('set_socialmedia_ig');
                                $yt = get_theme_mod('set_socialmedia_youtube');
                            ?>
                            <p class="lead text-center">Connect to our social media</p>
                            <ul> 
                                <li><a href="<?php echo $fb ?>" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $ig ?>" target="blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="<?php echo $yt ?>" target="blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>                             
                        </div>
                        <!-- MORE SECTION -->
                        <div class="more-info text-center">
                            <p class="lead">More</p>
                            <ul class="">
                                <?php 
                                    $opportunity = get_theme_mod('set_contact_opportunity');

                                     if (!empty($opportunity)) : ?>
                                        <li class="">
                                            Our latest volunteering opportunities <a href="<?php echo $opportunity ?>" target="blank"><b> click here</b></a>
                                        </li>
                                        <li class="">
                                            More about European Solidarity Corps program <a href="https://europa.eu/youth/home_en" target="blank"><b> click here</b></a>
                                        </li>
                                <?php else : ?>
                                        <li class="">
                                            More about European Solidarity Corps program <a href="https://europa.eu/youth/home_en" target="blank"><b> click here</b></a>
                                        </li>
                                <?php endif ?>                                    
                            </ul>
                        </div>
                    </div>
                    <!-- MAP -->
                    <div class="col-lg-6 col-md-6 col-sm-12 map">
                            <?php

                                $map_shortcode = get_theme_mod('set_map_shortcode'); 
                            
                                echo do_shortcode($map_shortcode);
                            ?>                                            
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>    
<!--  -->