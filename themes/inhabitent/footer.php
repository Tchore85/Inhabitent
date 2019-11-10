<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
		<div class="footer-blocks-container">
		<div class="footer-block-item">
			<div class="contact">
			<h3>Contact Info<h3>
				
			<p>
	<i class="fas fa-envelope"></i>
<!-- <i class="envelope"></i> -->

			<a>info@inhabitent.com</a></p>

			<p><i class="fas fa-phone-alt"></i>
		     <a> 778-456-7891</a></p>

		<p>
			<span><i class="fab fa-facebook-square"></i></span>
			<span><i class="fab fa-twitter-square"></i></span>
			<span><i class="fab fa-google-plus-square"></i></span>
		</p>
		</div>
			</div>

			<div class="footer-block-item">
<div class="bussiness-hours">
<h3>Business Hours</h3>
<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
<p><span class="day-of-week">Sunday:</span> Closed</p>

</div>
</div>

<div class="footer-block-item">
<div class="text-logo"><img src="<?php echo get_stylesheet_directory_uri();?>/images/inhabitent-logo-text-dark.svg">
</div>
</div>
</div>
				<div class="site-info">
					<div class= "copyright">

					Copyright & 2019 Inhabitent
				</div>
				</div>
				</div>
				</div>


		<!-- <div class="dark-wood" alt="wood"> -->
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/dark-wood.png">


	
					</div>
									</div><!-- .site-info -->
								</footer><!-- #colophon -->
							</div><!-- #page -->

							<?php wp_footer(); ?>

						</body>
					</html>
