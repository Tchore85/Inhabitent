
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



      <div class ="selected-posts-front-page">
                  <h2> Inhabitent Journal</h2>
                <?php

              $args = array( 'post_type' => 'post','posts_per_page' => 3, 'order' => 'DESC' );
                $journal_posts = get_posts( $args ); // returns an array of posts
              ?>
              <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
          <article class="post">
            <div class="post-image">
              <?php the_post_thumbnail([707,480]);?>
            </div>
            <div class="post-title">
              <?php the_title();?>
            </div>

            
            <div class ="post-date">
              <?php the_date();?>
            </div>

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