<!-- YE & TC (HOME PAGE) -->
<article class='container article-exchanges row mb-5'>
    <div class="col-12">
        <!-- PICTURE & CONTENT -->
        <div class="card-exchanges">
            <span>
                <a href="<?php the_permalink() ?>" class="mt-5 mx-auto" translate="no"> <?php echo wp_trim_words( get_the_title(), 6, '...' ); ?></a>
                <p class="mx-auto"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
            </span>
            <a href="<?php the_permalink() ?>" class="mb-5"><div class=" mb-2"><?php the_post_thumbnail('medium', array("class" => "img-fluid")); ?></div></a>
        </div>
    </div>
</article> 

