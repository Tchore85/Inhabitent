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

			<div class="container-archive">
			<header class="page-header">
				
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

				<?php
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
					
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
				?>
				<h1 class="page-title-archive">Shop Stuff</h1>
				<div class="first-page-product-choose">
				
					<?php foreach ( $terms as $term ) : ?>
						<div class="product-type-block-wrapper">
							<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
						</div>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
						
			</header><!-- .page-header -->
				</div>
	
			<?php /* Start the Loop */ ?>
			
			
		<div class="product-grid-archive">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header-general-for-products">
							<!-- <div class="product-grid-item"> -->
							<div class="product-grid-item">
										<div class="general-for-archive-products">
												<div class="general-for-archive-picture">
														<?php if ( has_post_thumbnail() ) : ?>
							         <div class ="thumbnail-wrapper">
															<?php the_post_thumbnail( 'large' ); ?>
							        </div>				
												</div>

												<div class="general-for-archive-title-price">
														<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

														<h2>.............$<?php the_field('price'); ?></h2>
												</div>	

														<?php endif; ?>
								
							</div>
					

					</header><!-- .entry-header -->
				</article><!-- #post-## -->


				<?php endwhile; ?>
		   </div>
		</div>
	</div>
	
						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>

						</main><!-- #main -->
					</div><!-- #primary -->
	

<?php get_footer(); ?>
