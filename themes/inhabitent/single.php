<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

			get_header(); ?>
				<div class="grid-container">
									
					<div class="journal-selection">


						<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">


									<?php while ( have_posts() ) : the_post(); ?>
									
								
																		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					
					<div class ="boss-green">


					<div class="journal-green-text">
								  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								</div>	



								<div class="journal-green-picture">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
									<?php endif; ?>
								</div>

								

								<div class="entry-meta">
									<?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?> /<?php red_starter_posted_on(); ?>
							   </div><!-- .entry-meta -->
							   
					</div>
			</header><!-- .entry-header -->

											<div class="entry-content">
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
								





								
											<!-- <?php the_post_navigation(); ?> -->
									



											<?php
												// If comments are open or we have at least one comment, load up the comment template.
													if ( comments_open() || get_comments_number() ) :
														comments_template();
													endif;
											?>

										<?php endwhile; // End of the loop. ?>

							</main><!-- #main -->
						</div><!-- #primary -->

								
					</div> <!-- #journal-selection -->


						<div class="sidebar-uni">

								<?php get_sidebar(); ?>

						</div>
				</div>

				<?php get_footer(); ?>

