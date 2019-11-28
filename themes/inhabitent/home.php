<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="grid-container">
  <div class="journal-selection">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header journal-header">


                    <div class ="boss-green">

                         <div class="journal-green-text">

                            <?php the_title( sprintf( '<h2 class="entry-title journal-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                </div>

                                <div class="journal-green-picture">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'full' ); ?>
                                    <?php endif; ?>
                                 </div>

                                    <?php if ( 'post' === get_post_type() ) : ?>
                            
                            <div class="entry-meta journal-entry-meta">
                                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                            </div><!-- .entry-meta -->
                            <?php endif; ?>
                        </div>                         
                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div><!-- .entry-content -->
                                </article><!-- #post-## -->

                            <?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    
    </div>

    <div class="sidebar-uni">

    <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
