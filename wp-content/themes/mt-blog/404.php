<?php get_header(); ?>
<!-- 404 SECTION -->
<section class="page_404 mt-5 mb-5">
	<div class="container">
		<div class="row">	
            <div class="col-sm-12">
                <div class="col-lg-12 col-sm-offset-1  text-center">
                    <div class="four_zero_four_bg" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/img/404pic.gif")>
                        <h1 class="text-center">404</h1>		
                    </div>		
                    <div class="contant_box_404">
                        <h3 class="h2">Look like you're lost</h3>		
                        <p>the page you are looking for not avaible!</p>		
                        <a href="<?php echo get_home_url(); ?>" class="link_404">Go to Home</a>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
<?php get_footer(); ?>