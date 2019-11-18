<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header-do-wear-sleep">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">

					<div class="product-grid-archive">
							<div class="product-grid-item">
								<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>

									<div class="general-for-archive-title-price">
												<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

												<h2>.............$<?php the_field('price'); ?></h2>
									</div>	


		

										<?php if ( 'post' === get_post_type() ) : ?>
												<div class="entry-meta">
												
												</div><!-- .entry-meta -->
										<?php endif; ?>
							</div>
					</div>

					</header><!-- .entry-header -->

	<div class="entry-content">
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->






			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
