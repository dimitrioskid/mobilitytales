<!-- BLOG CONTENT PAGE -->
<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
    <div class="row col-12 mt-5">
        <div class="col-lg-6 my-auto mx-auto">
            <h1 translate="no"><?php the_title(); ?></h1>
            <p class="h6"><span>Posted in:</span> <?php echo get_the_date(); ?></p>
            <p class="h6"><span>Categories: </span><?php the_category(', '); ?></p>
        </div>
        <div class="col-lg-6 text-center blog-picture "><?php the_post_thumbnail('medium', array("class" => "img-fluid")); ?></div>
    </div>
    <div class="col-lg-12 mt-5 mb-5">
        <p><?php the_content(); ?></p>
    </div>
</article>
