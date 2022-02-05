<?php
// Template Name: General Template
?>

<?php get_header(); ?>
    <div class="content-area marginTop">
        <main>
            <section class="middle-area">
                <div class="container">
                        <?php if(have_posts()): 
                                while(have_posts()): the_post();                            
                        ?>
                        <article>
                            <div class="row col-12 mt-5">
                                <div class="col-lg-6 my-auto mx-auto">
                                    <h1><?php the_title(); ?></h1>
                                    <p class="h6">Posted in <?php echo get_the_date(); ?></p>
                                </div>
                                <div class="col-lg-6 text-center newsPic"><?php the_post_thumbnail('medium', array("class" => "img-fluid")); ?></div>
                            </div>
                            <div class="col-lg-12 mt-5 mb-5">
                                <p><?php the_content(); ?></p>
                            </div>
                        </article>
                        <?php 
                            endwhile;
                            else:
                        ?>
                        <p class='text-center'>There is no posts!</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>    