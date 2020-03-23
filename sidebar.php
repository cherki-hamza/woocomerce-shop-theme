<?php
/**
 * The template for sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cherki dev shop
 */
?>
<!-- start sidbar -->
<?php if(is_active_sidebar( 'cherki-dev-sidebare-1' )) : ?>

   <div class="col-lg-3 col-md-4 col-12 h-100">
	  <?php dynamic_sidebar( 'cherki-dev-sidebare-1' ); ?>
   </div>

<?php endif; ?>
<!-- end sidbar -->