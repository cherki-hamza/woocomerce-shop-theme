<?php get_header(); ?>

<div class="container card" id="particles-js" style="width: 800px;height: 300px;border:dashed gold 2px; border-radius: 5px;">
	 
	 	 <div class="card-body">
	 	 	<span class="text-danger font-weight-bold">
	 	 		404
	 	 	</span>
	 	 	<span>
	 	 		<?php
                  the_widget('WP_Widget_Recent_Posts' , 

                     array(
                        'title'   => 'Take a Look at Our Latest Posts',
                        'number'  => 3,
                     )
                  );
	 	 		?>
	 	 	</span>
	 	 </div>
	 
</div>


<?php get_footer(); ?>