<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="grid-container">
  <div class="journal-selection">
 
  <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/blog-photos/van-camper.jpg"> -->
  <div class="van">
<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/blog-photos/van-camper.jpg"> -->
</div>


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

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


    <?php //wp_get_archives('type=yearly'); ?>
    
    </div>

    <div class="sidebar-uni">

    <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
