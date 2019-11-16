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
							
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">

							<?php if ( has_post_thumbnail() ) : ?>
					<div class="single-single-picture">
								<?php the_post_thumbnail( 'large' ); ?>
					</div>
					<div class="single-single-title">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
					<div class="single-single-price">
								<h2>$<?php the_field('price'); ?></h2>
					</div>
							<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content-single-single">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

 <!-- </div>



</div> -->

<?php get_footer(); ?>

