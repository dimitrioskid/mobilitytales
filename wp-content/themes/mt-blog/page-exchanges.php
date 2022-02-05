<?php get_header(); ?>
    <div class="content-area marginTop">
        <main>
            <section class="welcome-section">
                <div class="row">
                    <div class="jumbotron jumbotron-fluid text-center">
                        <div class="container">
                            <h1 class="display-4" translate="no"><?php the_title(); ?></h1>
                            <hr class="my-4">                            
                        </div>
                    </div>
                </div> 
            </section>
            <div class="blog">
                <div class="container">
                    <div class="row">

                        <?php 
                            // WP QUERY                            
                            $exchanges = array(
                            'post_type'              => 'post',
                            'category_name'          => 'exchanges',
                            'update_post_term_cache' => false, 
                            'update_post_meta_cache' => false, 
                            );

                            // Get current page and append to custom query parameters array
                            $exchanges['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                            // Instantiate custom query
                            $featured = new WP_Query( $exchanges );

                            // Pagination fix
                            $temp_query = $wp_query;
                            $wp_query   = NULL;
                            $wp_query   = $featured;

                            if ( $featured->have_posts() ) : 
                                while ( $featured->have_posts() ) : 
                                    $featured->the_post();                         

                                    get_template_part('template-parts/content');

                                endwhile;  
                        ?>

                        <div class="row col-12 text-center postsLinks mt-5 mb-5">
                            <div class="pages col-md-6 text-left">
                                <?php echo previous_posts_link("<< Newer posts"); ?>
                            </div>
                            <div class="pages col-md-6 text-right">
                                <?php echo next_posts_link("Older posts >>") ?>
                            </div>
                        </div>

                        <?php        
                            else:
                        ?>
                        <p class='text-center'>There is no posts!</p>

                        <?php 
                            wp_reset_postdata();

                            endif; 

                            // Reset main query object
                            $wp_query = NULL;
                            $wp_query = $temp_query;
                        ?>

                    </div> 
                </div>
            </div>           
        </main>
    </div>
<?php get_footer(); ?>    