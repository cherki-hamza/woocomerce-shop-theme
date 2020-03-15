<?php

/**
 * cherki theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cherki theme
 */

/**
 * Enqueue WP Bootstrap Navwalker library (responsive menu).
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// add theme custumizer options
require_once get_template_directory() . '/inc/customizer.php';

/* add styles and scripts ------------------------------------------------------------------------------------------------*/
function cherki_styles_scripts(){
	
	wp_enqueue_script('jquery');

    wp_enqueue_style( 'cherki-main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css') , 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css', false , '1.0' , 'all' );
    wp_enqueue_style( 'fontawesom-style', get_template_directory_uri().'/assets/css/all.css', array(), '1.0' , 'all' );
    wp_enqueue_style( 'cherki-custom-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0' , 'all' );

    // flex slider css style
    wp_enqueue_style( 'cherki-flexSlider-style', get_template_directory_uri().'/assets/flexslider/flexslider.css', array(), '1.0' , 'all' );
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

    wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('fontawesom-script', get_template_directory_uri().'/assets/js/all.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-script', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);

    // flex slider js script
    wp_enqueue_script('flexslider-jquery-script', get_template_directory_uri().'/assets/flexslider/jquery.flexslider.js', array('jquery'), '', true);
     wp_enqueue_script('flexslider-main-script', get_template_directory_uri().'/assets/flexslider/flexslider.js', array('jquery'), '', true);

	
}
add_action( 'wp_enqueue_scripts', 'cherki_styles_scripts');
/*--------------------------------------------------------------------------------------------------------------------------*/


/* add custom favicon  -----------------------------------------------------------------------------------------------------*/
function load_favicon() { ?>
	<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/assets/img/icon.png" >
<?php }
add_action('wp_head', 'load_favicon');
/*---------------------------------------------------------------------------------------------------------------------------*/



/*register widget sidebar  -------------------------------------------------------------------------------------------------*/
function the_sidbar(){

    register_sidebar(array(
       'name' => 'Main Sidebar',
        'id'  => 'main_sidebar',
        'class'         => 'okocha',
        'before_widget' => '<div class="card">',
        'after_widget'  => '</div>',
        'before_title' => '<div class="card-title">',
        'after_title' => '</div>',
    ));

}
add_action('widgets_init' , 'the_sidbar');
/*--------------------------------------------------------------------------------------------------------------------------*/


/* add theme supports  -----------------------------------------------------------------------------------------------------*/
function cherki_theme_supports(){

   // register menu
        register_nav_menus(
                array(
                   'main_menu'   => 'Main Menu',
                   'footer_menu' => 'Footer Menu'
                )
        );

    // woocomerce support
    add_theme_support('woocommerce' , array(
         'thumbnail_image_width'  => 255,
         'single_image_width'     => 255,
         'product_grid' 			=> array(
	            'default_rows'    => 10,
	            'min_rows'        => 5,
	            'max_rows'        => 10,
	            'default_columns' => 3,
	            'min_columns'     => 1,
	            'max_columns'     => 5,	 
         ) 
       )
    );


        // support zoom gallery jquery
        add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
        // support widget
        add_theme_support('widgets');
        // support for custom log
        add_theme_support('custom-logo' , array(
             'height'  => 85,
             'width'   => 160,
             'flexh_height' => true,
             'flexh_width' => true,
        ));

        // support for slider image size
        add_image_size( 'cherki_image_slider' , 1920 , 800, array('center' , 'center') );


        // content width
		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}	


}
add_action( 'after_setup_theme', 'cherki_theme_supports' , 0);


/*-----------------------------------------------------------------------------------------------------------------------*/


if(class_exists('woocommerce')){
   // woocommerce modifications template 
    require get_template_directory().'/inc/wc-modifications.php';    
}

/* woocommerce cart ajax show*/
/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'cherki_woocommerce_header_add_to_cart_fragment' );

function cherki_woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    ?>
    
       <span class="items"><?php echo Wc()->cart->get_cart_contents_count(); ?></span>

    <?php

    $fragments['span.items'] = ob_get_clean();
    return $fragments;
}


    




