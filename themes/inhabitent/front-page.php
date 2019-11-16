
<?php get_header();?>


<div id="content" class="site-content">
<div id="primary" class="content-area canoe-girl">
<main id="main" class="site-mai" role="main">


<!-- <section class="selected-posts"> -->
<section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>

 <section class="selected-posts">
         <h2> Inhabitent Journal</h2>
      <div class ="selected-posts-front-page">
                  
                <?php
              $args = array( 'post_type' => 'post','posts_per_page' => 3, 'order' => 'DESC' );
                $journal_posts = get_posts( $args ); // returns an array of posts
              ?>
              <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
          <article class="post">
          
            <div class="post-image">
              <?php the_post_thumbnail([707,480]);?>
            </div>
<div class ="post-info-wrapper">
            <div class ="post-date">
              <?php the_date();?>
            </div>

            <div class="post-title">
              <?php the_title();?>
            </div>
            
               </div>
               <!-- <button type="front-page_button1">Read Entry </button> -->
<a class="front_page_button">
<?php the_title( sprintf( '<h2<button type="front-page_button1"></button><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

   <!-- get_the_permalink() -->

               </a>
              
          </article>

   

                <?php //echo get_the_date();?> 
                <!-- this is longer version echo will display but if we have only get_the_date
              we will get only the data but not displayed -->
              <?php endforeach; wp_reset_postdata(); ?>

      </div>
  </section>
  
    <section class="canoe-girl-nature">
    <h2> Latest Adventures</h2>
    <div class="grid-container-nature">

    <div class="canoe-girl">
  
          <a class="canoe-text">Getting Back To Nature in a Canoe<button type="button">Read More</button></a> 
            <img class="canoe-direct" style= background-color: rgba(0, 0, 0, 0.35) , src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/canoe-girl.jpg">
      
          </div>

          <div class="beach-fire">
          <!-- <div class="fire-beach-pcs"> -->
          <a class="beach-text">A Night With Friends at the Beach<br><button type="button">Read More</button></a>
            <img class="fire-beach-pcs"src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/beach-bonfire.jpg">

          </div>

          <div class="hills">
          <a class="hills-text">Taking in the View At Big Mountain<button type="button">Read More</button></a>
            <img class="hills-pcs" src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/mountain-hikers.jpg">

            </div>
            <div class="sky">
            <a class="stars-text">Star-Ganzing at the Night Sky<button type="button">Read More</button></a>
            <img class="stars-pct" src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/night-sky.jpg">
            </div>
            </div>  
    </section>

  






              <!-- </section> -->



          </main>
            </div>
              </div>



          <?php
                get_footer ();