<?php
/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>"  class="single-product-article">
			<div class="left-column">

			<?php if ( has_post_thumbnail() ) : ?>
			<div class="single-single-picture">
			<?php the_post_thumbnail( 'large' ); ?>
			</div>
			

			<?php endif; ?>

		</div><!-- .left-column -->

		<div class="right-column">

			<div class="single-single-title">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
			<div class="single-single-price">
				<h2>$<?php the_field('price'); ?></h2>
			</div>
			<div class="entry-content-single-single">
				<?php the_content(); ?>
			</div>

			<div class="social-buttons">
				<button type="button" class="black-btn">
				<i class="fab fa-facebook-f"></i> LIKE</button>

				<button type="button" class="black-btn">
				<i class="fab fa-twitter"></i> TWEET</button>

				<button type="button" class="black-btn">
				<i class="fab fa-pinterest-square"></i> PIN</button>
			</div>	
			
			<!-- .entry-content -->

		</div><!-- .right-column -->


		

		<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		</article><!-- #post-## -->



	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>

