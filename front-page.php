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

		      <section class="popular-products">
                <div class="container">
 			  		<h2 class="text-primary"> Popular Products</h2>
 			  		   <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity" ]' ); ?>
 			  	</div>
		      </section>

		      <section class="new-arrivals">
                 <div class="container">
 			  		<h2 class="text-primary">New Arivals </h2>
 			  		   <?php echo do_shortcode( '[products limit="4" columns="4" orderby="date" ]' ); ?>
 			  	</div>
		     </section>

		      <section class="deal-of-the-week">
                 <div class="container"><div class="row">
 			  		   <h2 class="text-success"> Deal of the Week </h2>
 			  		   <?php echo do_shortcode( '[product_categories number="0" parent="0"]' ); ?>
 			  		</div>
 			  	</div>
		      </section>

		      <section class="lab-blog">
		      	<div class="container">
 			  		<div class="row">
 			  		   <!-- start posts loop -->
                          <?php get_template_part( 'includes/section', 'postscontent' ); ?>
 			  		   	<!-- end posts loop -->
 			  		</div>
 			  	</div>
		      </section>
 		</main>
 	</div>
 	<!-- end Content -->
    
<?php get_footer(); ?>