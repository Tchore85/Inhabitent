<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

				?><!DOCTYPE html>
				<html <?php language_attributes(); ?>>
					<head>
						<meta charset="<?php bloginfo( 'charset' ); ?>">
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<link rel="profile" href="http://gmpg.org/xfn/11">
						<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

					<?php wp_head(); ?>
					</head>



	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">

					<div class="logo">

					<?php if(is_front_page() || is_page() ){
							if ( has_post_thumbnail() ) { ?>


						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri();?>/images/inhabitent-logo-tent-white.svg"></a>

							<?php } else {  ?>

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri();?>/images/inhabitent-logo-tent.svg"></a>

					
					<?php	} ?>
								
              		 	
					<?php } else { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri();?>/images/inhabitent-logo-tent.svg"></a>
			<?php	} ?>
					
			</div>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<div class="navigation_search_container">

				<div class="menu_separate">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					
					
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>

							<div class="only_searchform">
								<?php get_search_form();?> 
					</div>	
				</div>	
												</nav><!-- #site-navigation -->


									
											</header><!-- #masthead -->

											<?php 
							

							if(is_front_page()){
								if ( has_post_thumbnail() ) { ?>

									<section class="home-hero" style=" height: 100vh;
									background:linear-gradient(180deg, rgba(0, 0, 0, 0.4) , rgba(0, 0, 0, 0.4)),
									
									url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover;">

										<div class="logo-full">
											<img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-full.svg">
										</div>
									</section>
									
								<?php 
								}
							}

								if(is_page('about')){
									if ( has_post_thumbnail() ) { ?>
									<section class="about-hero" style="height: 100vh; 
									background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) , rgba(0, 0, 0, 0.4)),
									url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover; background-position:50% 100%;"> >


										<div class="logo-full">
										
											<?php the_title(); ?>

										</div>
									</section>
									<?php 
									}
								}
								?>

<div id="content" class="site-content">

