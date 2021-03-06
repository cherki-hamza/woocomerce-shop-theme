<?php
/**
 * The template for displaying page contact me
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
 			  	</div>
		      </section>
 		</main>
 	</div>
 	<!-- end Content -->
    
<?php get_footer(); ?>