<?php
/**
 * Template part for displaying deal of week for shop content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherki dev shop
 */
?>
<?php
             $showdeal  = get_theme_mod( 'set_deal_show', 0 );
             $deal      = get_theme_mod( 'set_deal');
             $currency  = get_woocommerce_currency_symbol();
             $regular   = get_post_meta( $deal , '_regular_price' , true);
             $sale      = get_post_meta( $deal , '_sale_price' , true);

               if( !$showdeal == 1 && (!empty($deal)) ):
                    $discount_percentage = absint( 100 - (($sale/$regular) * 100 ));           
 ?>

    		      <section class="deal-of-the-week">
                     <div class="container">
                      <h2 class="text-success"> <?php echo esc_html( get_theme_mod( 'set_deal_title', __( 'Deal of the Week', 'cherki-dev' ) ) ); ?> </h2>
                      <div class="row d-flex align-items-center">
                  <div class="deal-img col-md-6 col-12 ml-auto text-center">
                    <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
                  </div>
                  <div class="deal-desc col-md-4 col-12 mr-auto text-center">
                    <?php if( !empty( $sale ) ): ?>
                      <span class="discount">
                        <?php echo esc_html( $discount_percentage ) . esc_html__( '% OFF', 'cherki-dev' ); ?>
                      </span>
                    <?php endif; ?>
                    <h3>
                      <a href="<?php echo esc_url( get_permalink( $deal ) ); ?>"><?php echo esc_html( get_the_title( $deal ) ); ?></a>
                    </h3>
                    <p><?php echo esc_html( get_the_excerpt( $deal ) ); ?></p>
                    <div class="prices">
                      <span class="regular">
                        <?php 
                        echo esc_html( $currency );
                        echo esc_html( $regular );
                        ?>
                      </span>
                      <?php if( !empty( $sale ) ): ?>
                        <span class="sale">
                          <?php 
                          echo esc_html( $currency );
                          echo esc_html( $sale );
                          ?>                    
                        </span>
                      <?php endif; ?>
                    </div>
                    <a href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>" class="add-to-cart"><?php esc_html_e( 'Add to Cart', 'cherki-dev' ); ?></a>
                  </div>
                </div>
           			  	</div>
    		      </section>

 <?php endif;  ?>