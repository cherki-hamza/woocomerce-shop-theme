<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherki dev shop
 */
?>

<?php get_header(); ?>

    <div class="content-area"> <!-- start content area -->
      <main>
        <div class="container"> <!-- start container -->
          <div class="row">  <!-- start row -->

            <!-- start row col-8 -->
            <div class="col-lg-9 col-md-8 col-12"> <!-- start col 8 -->

            <?php the_archive_title( '<h2 class="text-center text-success font-weight-bold">the archive template for ' , '</h2>' );  ?>
            
            <?php 
              // If there are any posts
              if( have_posts() ):

                // Load posts loop
                while( have_posts() ): the_post();
                  get_template_part( 'includes/section' , 'postscontent' );
                endwhile;

                // We're using numeric page navigation here.
                the_posts_pagination( array(
                  'prev_text'   => esc_html__( 'Previous', 'cherki-dev' ),
                  'next_text'   => esc_html__( 'Next', 'cherki-dev' ),
                ));
                
              else:
            ?>
              <p><?php esc_html_e( 'Oops No Post Here Nothing to display drab chi pasio hta n3aytoleke.', 'cherki-dev' ); ?></p>
            <?php endif; ?>
            
            
          </div> <!-- end col 8 -->
        
         <!-- end row col-8 -->

            <!-- start row col-4 -->
              
                  <?php get_sidebar('cherki-dev-sidebare-1'); ?>
              
            <!-- start row col-4 -->

             </div> <!--* end row -->
           </div> <!-- end container -->
       </main>

</div> <!-- end content area -->
      
    
<?php get_footer(); ?>