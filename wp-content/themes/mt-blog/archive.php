<?php get_header(); ?>


<!-- ARCHIVE SECTION -->
<div class="archive marginTop">
    <div class="container">
        <div class="row">
            <!-- GETING CONTENT -->
            <?php 
                the_archive_title('<h4 class="archive-title">','</h4>');
                // WP QUERY
                    if(have_posts()): 
                        while(have_posts()): the_post();                            

                            get_template_part('template-parts/content','archive');

                        endwhile;
            ?>

            <!-- PAGINATION -->
            <div class="row col-12 text-center postsLinks mt-5 mb-5">
                <div class="pages col-md-6 text-left">
                    <?php previous_posts_link("<< Newer posts"); ?>
                </div>
                <div class="pages col-md-6 text-right">
                    <?php next_posts_link("Older posts >>") ?>
                </div>
            </div>

            <?php        
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
<?php get_footer(); ?>