<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #page div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cherki dev shop
 */

?>


<!-- start footer -->
  <div class="container">
    <footer class="footer">

       <section class="footer-widgets">
	         <div class="container-fluid">
	         	<div class="row">

                   <!-- start footer widget -->
         		    <div class="col-md-4">
         		    	<?php if(is_active_sidebar( 'cherki-dev-footer1-sidebare-1' )): ?>
		         			 
		         			  	  <?php  dynamic_sidebar( 'cherki-dev-footer1-sidebare-1' ); ?>
		         			  
         		       <?php endif  ?>
         		    </div>

         		    <div class="col-md-4">
         		    	<?php if(is_active_sidebar( 'cherki-dev-footer2-sidebare-2' )): ?>
		         			
	                         <?php  dynamic_sidebar( 'cherki-dev-footer2-sidebare-2' ); ?>
	                         
         		     <?php endif  ?>
         		    </div>

         		    <div class="col-md-4">
         		    	<?php if(is_active_sidebar( 'cherki-dev-footer3-sidebare-3' )): ?>
		         			
	                         <?php  dynamic_sidebar( 'cherki-dev-footer3-sidebare-3' ); ?>
	                       
         		        <?php endif  ?>
         		    </div>
	         		    <!-- end footer widget -->
	         	    
	         </div>
        </section>

       	<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6">
						   <?php echo get_theme_mod( 'set_copyright', '' ); ?>	
						</div>

						<nav class="footer-menu col-12 col-md-6 text-left text-md-right">
							<?php 
								wp_nav_menu( 
									array(
										'theme_location' 	=> __('footer_menu' , 'cherki-dev')
									) 
								); 
							?>							
						</nav>
					</div>
				</div>
			</section>

    </footer>
    </div>
    <!-- start footer -->

 
 </div>
 <!-- end site -->
 <?php wp_footer(); ?>
</body>
</html>