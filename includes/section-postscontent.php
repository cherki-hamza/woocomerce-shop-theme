<?php
/**
 * Template part for displaying posts content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherki dev shop
 */

?>
<article <?php post_class(); ?>>
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <div class="post-thumbnail">
    <?php 
    if( has_post_thumbnail() ):
      the_post_thumbnail( 'cherki_image_blog', array( 'class' => 'img-fluid' ) );
    endif;
    ?>
  </div>
  <div class="meta">
    <p><?php esc_html_e( 'Published by', 'cherki-dev' ); ?> <?php the_author_posts_link(); ?> 
    <?php esc_html_e( 'on', 'cherki-dev' ); ?> <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a>
    <br />
    <?php if( has_category() ): ?>
      <?php esc_html_e( 'Categories', 'cherki-dev' ); ?>: <span class="badge badge-danger"><?php the_category( ' ' , ' ,' ); ?></span>
    <?php endif; ?>
    <br />
    <?php if( has_tag() ): ?>
      <?php esc_html_e( 'Tags', 'cherki-dev' ); ?>: <span class="badge badge-success"><?php the_tags( '', ', ' ); ?></span>
    <?php endif; ?>
    </p>
  </div>
  <?php if( has_excerpt() ): ?>
        <div class="content"><?php the_excerpt(); ?></div>
    <?php elseif( strpos( $post->post_content, '<!--more-->' ) ): ?>
     <div class="content"><?php the_content( 'More' ); ?></div>
    <?php else: ?>
         <div class="content"><?php the_excerpt(); ?></div>
    <?php endif; ?>
</article>