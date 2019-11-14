
<?php get_header();?>


<div id="content" class="site-content">
<div id="primary" class="content-area canoe-girl">
<main id="main" class="site-mai" role="main">
<section class="home-hero">
	<div class="logo-full">
<img src="<?php echo get_stylesheet_directory_uri();?>/images/inhabitent-logo-full.svg">

</div>

<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/canoe-girl.jpg"> -->
<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/beach-bonfire.jpg"> -->

</section>

<!-- <section class="selected-posts"> -->
<div class ="selected-posts-front-page">
<?php

$args = array( 'post_type' => 'post','posts_per_page' => 3, 'order' => 'DESC' );
$journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<article class="post">
<div class="post-image">
<?php the_post_thumbnail([768,420]);?>
</div>
<?php the_title();?>
<?php the_date();?>
</article>

<?php //echo get_the_date();?> 
<!-- this is longer version echo will display but if we have only get_the_date
we will get only the data but not displayed -->
<?php endforeach; wp_reset_postdata(); ?>

</div>
<!-- </section> -->



</main>
</div>
</div>



<?php
get_footer ();