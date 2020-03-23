<?php

/**
*  cherki theme Woocommerce wraper customisations 
*
*  @package Cherki  shop    
*
*  @author  cherki hamza  
*/

function wc_rewrite(){
  // add and open hooks for content wraper ==> is a bootstarp framwork style sheet container and row class
add_action( 'woocommerce_before_main_content', 'open_wraper_div_container' , 5);
function open_wraper_div_container(){
       echo '<div class="container my-5"><div class="row">';
    } 
   



// add and close hooks for content wraper ==> is a bootstarp framwork style sheet container and row class
add_action( 'woocommerce_after_main_content', 'close_wraper_div_container' , 5); 
function close_wraper_div_container(){
       echo '</div></div>';
    } 
    

// remove sidebar from template 
 remove_action( 'woocommerce_sidebar' , 'woocommerce_get_sidebar');      

// check if is pag shop for show the sidbar
    if(is_shop()){
      // add open for tag col-md-4 
        add_action('woocommerce_before_main_content' , 'open_col4_tag' , 6);    
        function open_col4_tag(){
            echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
        }

         // add new sidebar
         add_action( 'woocommerce_before_main_content' , 'woocommerce_get_sidebar' , 7 );


         // add close for tag col-md-4 
        add_action('woocommerce_before_main_content' , 'close_col4_tag' , 8);    
        function close_col4_tag(){
            echo '</div>';
        }

        // add short excerpt description for product
        add_action('woocommerce_after_shop_loop_item_title' , 'the_excerpt' , 1);  

}


// add and open tag for col-md-8 
add_action( 'woocommerce_before_main_content', 'open_col8_tag' , 9); 
 function open_col8_tag(){
      // chek if is page shop if true kep the colomn col-9 else turn the colomn in col-12 or col
       if(is_shop()){
           echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
       }else{
           echo '<div class="col">';
       }
       
 } 

  // add close for tag col-md-4 
add_action('woocommerce_before_main_content' , 'close_col8_tag' , 4);    
function close_col8_tag(){
    echo '</div>';
}


  
/*  
// add filters hook to remove title
add_filter( 'woocommerce_show_page_title' , 'remove_shop_page_tiitle');
function remove_shop_page_tiitle($value){
    $value = false;
    return $value;
}
*/



}
add_action('wp' , 'wc_rewrite');

?>