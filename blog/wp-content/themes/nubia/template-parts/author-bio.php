<?php
/**
 * Template part for displaying author info in author pages.
 *
 * @package Nubia
 */

?>

<div class='c-author'>
  <div class='c-author__media'>
    <a class='c-author__image-link' href='<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>'>
      <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
    </a>
  </div>

  <div class='c-author__content'>
    <h3 class='c-author__title'>
      <a href='<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>'>
        <?php echo get_the_author(); ?>
      </a>
    </h3>

    <?php if ( get_the_author_meta( 'description' ) ) : ?>
      <p class='c-author__bio'>
        <?php the_author_meta( 'description' ); ?>
      </p>
      <?php endif; ?>
  </div>
</div>