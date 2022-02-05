<!-- ARCHIVE PAGE  -->
<article class='container row mt-4 mb-5 blog_article'>
    <div class="col-lg-4 col-md-4 col-sm-10">
        <!-- PICTURE -->
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array("class" => "img-fluid")); ?></a>
    </div>
    <!-- CONTENT -->
    <div class="col-lg-8 col-md-8 col-sm-10 blog_content">
        <h2><a href="<?php the_permalink() ?>" translate="no"><?php the_title(); ?></a></h2>
        <p class="h6"><span>Posted in:</span> <?php echo get_the_date(); ?></p>
        <p class="h6"><span>Categories: </span><?php the_category(', '); ?></p>
        <p><?php echo wp_trim_words( get_the_content(), 75, '...' ); ?></p>
        <a href="<?php the_permalink() ?>"><h6>Read More</h6></a>
    </div>
</article>