<!-- start footer -->
  <div class="container">
    <footer class="footer">

       <section class="footer-widgets">
	         <div class="container">
	         	<div class="row">Footer Widgets</div>
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
										'theme_location' 	=> 'footer_menu'
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