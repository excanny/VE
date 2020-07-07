<?php
/**
 * Template part for displaying author info in the Post sidebar
 *
 * @package Nubia
 */

?>

<div class='c-widget c-widget--sidebar c-widget-author'>
  <div class='c-widget-author__media'>
    <a href='<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>' aria-hidden='true' role='presentation' tabindex='-1'>
      <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
    </a>
  </div>

  <div class='c-widget-author__content'>
    <h3 class='c-widget-author__title'>
      <a href='<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>'><?php echo get_the_author(); ?></a>
    </h3>
    <?php if ( get_the_author_meta( 'description' ) ) : ?>
      <p class='c-widget-author__bio'><?php the_author_meta( 'description' ); ?></p>
      <?php endif; ?>
  </div>
</div>