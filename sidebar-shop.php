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
<?php if(is_active_sidebar( 'cherki-dev-shop-sidebare-2' )) : ?>

   
	  <?php dynamic_sidebar( 'cherki-dev-shop-sidebare-2' ); ?>
   

<?php endif; ?>
<!-- end sidbar -->