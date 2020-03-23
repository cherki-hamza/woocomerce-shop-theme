<?php get_header(); ?>

 	<!-- start Content -->
 	<div class="content-area">
 		<main>
 			  <section class="the_slider">
 			  	 <!-- star slider -->
 			  	 <div class="container">
                      <div class="flexslider">
					  <ul class="slides">
                       <?php  
                        
                        // Getting data from Customizer to display the slider section
                        for ($i=1; $i < 4; $i++) :
                        	$slider_page[$i]  =  get_theme_mod('set_slider_page' . $i );
                        	$slider_button_text[$i]  =  get_theme_mod('set_slider_button_text' . $i );
                        	$slider_button_url[$i]   =  get_theme_mod('set_slider_button_url' . $i );
                        endfor;

                        $args = array(
                          'post_type'      => 'page',
                          'post_per_page'  => 3,
                          'post__in'       => $slider_page,
                          'orderby'        => 'post__in',
                        );

                        $slider_loop = new WP_Query( $args );
                        $j = 1;

                        if( $slider_loop->have_posts() ):
                        	while ( $slider_loop->have_posts() ): 
                                 $slider_loop->the_post();

                       ?>  
					    <li>
					      <?php the_post_thumbnail( 'cherki_image_slider' , array('class' , 'img-fluid') ); ?>
					      <div class="container">
					      	  <div class="slider-details-container">
					      	  	<div class="slider-title">
					      	  		<h1><?php the_title() ?></h1>
					      	  	</div>
					      	  	<div class="slider-description">
					      	  		<div class="subtitle">
					      	  			<a class="link" href="<?php echo $slider_button_url[$j] ?>"><?php echo $slider_button_text[$j]; ?></a>
					      	  		</div>
					      	  	</div>
					      	  </div>
					      </div>
					    </li>
                        <?php 
                            $j++;
                           endwhile;
                             wp_reset_postdata();
                           endif;   
                         ?>
					  </ul>
					</div>
 			  	 </div>
					<!-- end slider -->
 			  </section>

<?php

   // We'll only show these sections if WooCommerce is ative
        if( class_exists( 'WooCommerce' ) ): 

?>
		      <section class="popular-products">
             <?php
                     // Getting data from Customizer to display the Popular Products section
                    $popular_limit    = get_theme_mod( 'set_popular_max_num', 4 );
                    $popular_col    = get_theme_mod( 'set_popular_max_col', 4 );
                    $arrivals_limit   = get_theme_mod( 'set_new_arrivals_max_num', 4 );
                    $arrivals_col   = get_theme_mod( 'set_new_arrivals_max_col', 4 );
             ?>
                <div class="container">
 			  		<h2 class="text-primary"> <?php echo esc_html( get_theme_mod( 'set_popular_title', __( 'Popular products', 'cherki-dev' ) ) ); ?> </h2>
 			  		   <?php echo do_shortcode( '[products limit=" ' .$popular_limit. ' " columns=" ' . $popular_col . ' " orderby="popularity" ]' ); ?>
 			  	</div>
		      </section>

		      <section class="new-arrivals">
                 <div class="container">
 			  		<h2 class="text-primary"> <?php echo esc_html( get_theme_mod( 'set_new_arrivals_title', __( 'New Arrivals', 'cherki-dev' ) ) ); ?> </h2>
 			  		   <?php echo do_shortcode( '[products limit=" ' .$arrivals_limit. ' " columns=" ' .$arrivals_col. ' " orderby="date" ]' ); ?>
 			  	</div>
		     </section>

           <!-- start section deal of the week -->
             <?php get_template_part( 'includes/section', 'dealofweek' ); ?>
          <!-- <?php //echo do_shortcode( '[product_categories number="0" parent="0"]' ); ?> -->
          <!-- end section deal of the week -->


<?php endif; ?>
		      
      <section class="lab-blog">
          <div class="container">
            <div class="section-title">
              <h2><?php echo esc_html( get_theme_mod( 'set_blog_title', __( 'News From Our Blog', 'cherki-dev' ) ) ); ?></h2>
            </div>            
            <div class="row">
              <?php 

              $args = array(
                'post_type'       => 'post',
                'posts_per_page'    => 2,
                'ignore_sticky_posts' => true,
              );

              $blog_posts = new WP_Query( $args );

                // If there are any posts
                if( $blog_posts->have_posts() ):

                  // Load posts loop
                  while( $blog_posts->have_posts() ): $blog_posts->the_post();
                    ?>
                      <article class="col-12 col-md-6">
                        <a href="<?php the_permalink(); ?>">
                          <?php 
                            if( has_post_thumbnail() ):
                              the_post_thumbnail( 'cherki_image_blog', array( 'class' => 'img-fluid' ) );
                            endif;
                          ?>
                        </a>
                        <h3>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <span class="pub-date">
                          <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a>
                        </span>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                      </article>
                    <?php
                  endwhile;
                  wp_reset_postdata();
                else:
              ?>
                <p><?php esc_html_e( 'Nothing to display.', 'cherki-dev' ); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </section>

 		</main>
 	</div>
 	<!-- end Content -->
    
<?php get_footer(); ?>