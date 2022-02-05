<!-- BLOG CARDS (HOME PAGE) -->
<article class="col-lg-3 col-md-6 col-sm-10 mt-3">
    <div class="blog_card">
        <div class="blog_card_image">
            <!-- PICTURES -->
            <a href="<?php the_permalink(); ?>"><div><?php the_post_thumbnail('medium', array("class" => "img-fluid")); ?></div></a>
        </div>
        <!-- CONTENT -->
        <div class="blog_card_content">
            <h3><a href="<?php the_permalink(); ?>" translate="no"> <?php the_title(); ?></a></h3> 
            <p><?php echo wp_trim_words( get_the_content(), 41, '...' ); ?></p>
            <a href="<?php the_permalink() ?>"><h6>Read More</h6></a>
        </div>
    </div>
</article>    