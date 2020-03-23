<?php
/*
Template Name: Home 2 Template
*/

  get_header(); 

?>

 	<!-- start Content -->
 	<div class="content-area">
 		<main>
 			  <section class="the_slider">
 			  	<div class="container">
 			  		<div class="row">
 			  		   Slider	
 			  		</div>
 			  	</div>
 			  </section>

		      <section class="popular-products">
                <div class="container">
 			  		<div class="row">
 			  		   Popular Products	
 			  		</div>
 			  	</div>
		      </section>

		      <section class="new-arrivals">
                 <div class="container">
 			  		<div class="row">
 			  		   New Arrivals
 			  		</div>
 			  	</div>
		     </section>

		      <section class="deal-of-the-week">
                 <div class="container">
 			  		<div class="row">
 			  		   Deal of the Week
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