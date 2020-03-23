<?php
/**
 * The template for displaying page about
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherki dev shop
 */
?>
<?php get_header(); ?>

 	<!-- start Content -->
 	<div class="content-area">
 		<main>
		      <section class="lab-blog">
		      	<div class="container">
 			  		<div class="row">
 			  		   <!-- start posts loop -->
                          <?php get_template_part( 'includes/section', 'postscontent' ); ?>
 			  		   	<!-- end posts loop -->
 			  		</div>


 <?php

   // We'll only show these sections if WooCommerce is ative
        if( class_exists( 'WooCommerce' ) ): 

?> 		
 			  		<!-- start section deal of the week -->
             <?php get_template_part( 'includes/section', 'dealofweek' ); ?>
          <!-- <?php //echo do_shortcode( '[product_categories number="0" parent="0"]' ); ?> -->

<?php endif; ?>          
          <!-- end section deal of the week -->

 			  	</div>
		      </section>
 		</main>
 	</div>
 	<!-- end Content -->
    
<?php get_footer(); ?>