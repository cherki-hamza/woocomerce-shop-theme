<?php get_header(); ?>

 	<!-- start Content -->
 	<div class="content-area">
 		<main>
		      <section class="lab-blog">
		      	<div class="container">
		      		<span class="text-danger">cherki hamza</span>
		      		<span><hr class="bg"></span>
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