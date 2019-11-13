<?php get_header();?>

<!-- <div class="about-hero">
<img src="<?php //echo get_stylesheet_directory_uri();?>/images/about-hero.jpg">
</div>  -->



<div id="primary" class="content-area">

		<main id="main" class="site-main about-page" role="main">
<!-- check the CLASS ABOUT PAGE WAS ADDET FROM JIM TO DO BETTER TARGETING -->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->




	<?php //wp_get_archives('type=yearly'); ?>

<?php get_footer();?>