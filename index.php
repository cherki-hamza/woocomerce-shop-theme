<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherki dev shop
 */

get_header();
?>
    <div class="content-area">
      <main>
        <div class="container">
          <div class="row">
            <!-- start row col-8 -->
            <div class="col-lg-9 col-md-8 col-12">
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
            </div>
            <!-- end row col-8 -->

            <!-- start row col-4 -->
              
                  <?php get_sidebar('cherki-dev-sidebare-1'); ?>
              
            <!-- start row col-4 -->

          </div>
        </div>
      </main>
    </div>
<?php get_footer(); ?>