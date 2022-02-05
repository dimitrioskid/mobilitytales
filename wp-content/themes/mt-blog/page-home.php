<?php get_header(); ?>

    <!-- HEADER / Background -->
    <div class="header-container mx-auto">
  		<div class="headline-text">
              <span class="headline-style-1">M</span>
              <span class="headline-style-2">O</span>
              <span class="headline-style-3">B</span>
              <span class="headline-style-4">I</span>
              <span class="headline-style-1">L</span>
              <span class="headline-style-2">I</span>
              <span class="headline-style-3">T</span>
              <span class="headline-style-4">Y</span>
              <span class="p-2"></span>
              <span class="headline-style-1">T</span>
              <span class="headline-style-2">A</span>
              <span class="headline-style-3">L</span>
              <span class="headline-style-4">E</span>
              <span class="headline-style-1">S</span>
        </div>
  		<div class="magic" style="background-image: url('<?php header_image(); ?>')"></div>
	</div>
    
    <!-- BACKGROUND FOR SCREENS LESS THAN 789px -->
    <img class="img-fluid headerBG " src="<?php header_image(); ?>" alt="Header" height="<?php echo get_custom_header()->height; ?>" width= "<?php echo get_custom_header()->width; ?>">

    <!-- BODY -->
    <div class="content-area">
        <main>
            <!-- ABOUT -->
            <section class="about-us text-center mt-5 mb-5">
                <div class="container">
                    <div class="row">
                        <?php
                            if(is_active_sidebar('sidebar-1')){
                                dynamic_sidebar('sidebar-1');
                            }
                        ?> 
                    </div>
                    <!-- COUNTER -->
                    <div class="about-counter container-fluid row mt-5 text-center">
                        <div class="col-6 text-center">                            
                            <i class="fa fa-users"></i>
                            <h2><span class="counter">
                                <?php
                                    $numOfVolunteers = get_theme_mod('set_volunteers');
                                    echo $numOfVolunteers;
                                ?>
                            </span>+</h2>
                            <h5>Volunteers </h5>
                        </div>
                        <div class="col-6 text-center">                            
                            <i class="fas fa-book-reader"></i>
                            <h2><span class="counter"><?php echo do_shortcode("[total_posts]"); ?></span></h2>
                            <h5>Stories</h5>
                        </div>
                    </div>
                </div>
            </section>
            <section class="middle-area">

                <!-- BLOG SECTION -->
                <div class="blog marginTop">
                    <div class="container">
                        <div class="text-center">
                            <h4 class="text-uppercase">Volunteer Tales</h4>
                        </div>
                        <div class="row">
                            <?php 
                                // WP QUERY                            
                                $volunteer = array(
                                    'post_type'              => 'post',
                                    'category_name'          => 'volunteering',
                                    'posts_per_page'         => 4,
                                    'update_post_term_cache' => false, 
                                    'update_post_meta_cache' => false, 
                                );
                                
                                $featured = new WP_Query($volunteer);

                                if($featured->have_posts()): 
                                    while($featured->have_posts()): $featured->the_post();                            

                                    get_template_part('template-parts/content-home');

                                    endwhile;
                                else:
                            ?>
                            <p class='text-center'>There is no posts!</p>
                            <?php 
                                wp_reset_postdata();
                                endif; 
                            ?>
                        </div> 
                    </div>
                </div>

                <!-- NEWS SECTION -->
                <div class="news">
                    <div class="container">
                        <div class="text-center">
                            <h4 class="text-uppercase ">Exchanges</h4>
                        </div>
                        <div class="row">
                            <!-- EXCHANGES MENU 1 -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?php
                                // WP QUERY    
                                    $exchanges = array(
                                        'post_type'              => 'post',
                                        'category_name'          => 'exchanges',
                                        'posts_per_page'         => 1,
                                        'update_post_term_cache' => false, 
                                        'update_post_meta_cache' => false, 
                                    );
                                    
                                    $secondary = new WP_Query($exchanges);                                
                                
                                    if($secondary->have_posts()): 
                                        while($secondary->have_posts()): $secondary->the_post();                            

                                        get_template_part('template-parts/content-exchanges');

                                        endwhile;
                                    else:
                                ?>
                                <p class='text-center'>There is no posts!</p>
                                <?php                                     
                                    wp_reset_postdata();
                                    endif; 
                                ?>
                            </div>


                            <!-- EXCHANGES MENU 2 -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?php
                                // WP QUERY
                                    
                                    $exchanges1 = array(
                                        'post_type'              => 'post',
                                        'category_name'          => 'exchanges',
                                        'paged'                  => 2,
                                        'posts_per_page'         => 1,
                                        'update_post_term_cache' => false, 
                                        'update_post_meta_cache' => false, 
                                    );
                                    
                                    $secondary = new WP_Query($exchanges1);                                
                                
                                    if($secondary->have_posts()): 
                                        while($secondary->have_posts()): $secondary->the_post();                            

                                        get_template_part('template-parts/content-exchanges');

                                        endwhile;
                                    else:
                                ?>
                                <p class='text-center'>There is no posts!</p>
                                <?php                                     
                                    wp_reset_postdata();
                                    endif; 
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>

                <!-- VOLUNTEERS SECTION -->
                <div class="volunteers mb-5 mt-5">
                    <div class="container">
                        <div class="text-center">
                            <h4 class="text-uppercase mb-5">Our Volunteers</h4>
                        </div>
                        <div class="row mb-5">
                            <?php
                                // WP QUERY           
                                
                                $homePage = get_page_by_title( 'home' );                         

                                $volunteersSlider = array(
                                    'post_parent'   => $homePage->ID,
                                    'post_type'     => 'page',
                                        
                                );
                                    
                                $volunteer = new WP_Query($volunteersSlider);                                
                                
                                if($volunteer->have_posts()): 
                                    while($volunteer->have_posts()): $volunteer->the_post();                            

                                    the_content();

                                    endwhile;
                                else:
                            ?>
                            <p class='text-center'>There is no posts!</p>
                            <?php                                     
                                wp_reset_postdata();
                                endif; 
                            ?>
                        </div> 
                    </div>
                </div>
            </section>            
        </main>
    </div>
<?php get_footer(); ?>