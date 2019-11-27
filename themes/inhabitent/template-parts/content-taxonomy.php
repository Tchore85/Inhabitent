<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">

					
						<div class="product-grid-item">
						    <div class ="thumbnail-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>

							</div>				

									<div class="general-for-archive-title-price">
												<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

												<h2>.............$<?php the_field('price'); ?></h2>
									</div>	


		

										<?php if ( 'post' === get_post_type() ) : ?>
												<div class="entry-meta">
												
						</div><!-- .entry-meta -->
										<?php endif; ?>
							

					</header><!-- .entry-header -->
				</article>