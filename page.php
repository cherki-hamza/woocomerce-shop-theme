<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		      	<span class="text-danger"><?php __('cherki hamza' , 'cherki-dev') ?></span>
		      	<span><hr class="bg"></span>
				  	<div class="row"> <!-- start row -->
				  		<div class="col-lg-9 col-md-8 col-12"> <!-- start col 8-->

				  		   <!-- start posts loop -->
	                          <?php get_template_part( 'includes/section', 'postscontent' ); ?>
				  		   	<!-- end posts loop -->

                      </div> <!-- end col 8 -->

                       <!-- start col 4 -->
                          <?php get_sidebar('herki-dev-sidebare-1'); ?>
                       <!-- end col 4 -->

				 </div> <!--end row -->
			</div>
		</section>

</main>
</div>
<!-- end Content -->
    
<?php get_footer(); ?>