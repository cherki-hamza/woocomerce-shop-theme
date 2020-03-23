<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cherki dev shop
 */
?>
<?php get_header(); ?>

<div class="container card">
	 
	 	 <div class="card-body text-center">
	 	 	<span class="text-danger font-weight-bold">
	 	 		<?php _e( 'Oops 404 this page not Found', 'cherki-dev' ); ?> 
	 	 	</span>
	 	 	 <br/>
	 	 	<span class="text-success font-weight-bold">
	 	 		<?php _e( 'amine a khay drab chi pasio lahe chafike', 'cherki-dev' ); ?>
	 	 	</span>
	 	 	<br/>
	 	 	<span>
	 	 		<?php
                  the_widget('WP_Widget_Recent_Posts' , 

                     array(
                        'title'   => __('Take a Look at Our Latest Posts' , 'cherki-dev'),
                        'number'  => 2,
                     )
                  );
	 	 		?>
	 	 	</span>
	 	 </div>
	 
</div>


<?php get_footer(); ?>