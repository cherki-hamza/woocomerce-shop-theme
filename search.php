<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cherki dev shop
 */

  get_header();

?>
    <div class="content-area">
      <main>
        <div class="container">
          <h1><?php __('search result for: ' , 'cherki-dev') ?> <?php  echo get_serach_query(); ?></h1>
          <div class="row">
              <?php  get_search_form(); ?>
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
            
          </div>
        </div>
      </main>
    </div>
<?php get_footer(); ?>