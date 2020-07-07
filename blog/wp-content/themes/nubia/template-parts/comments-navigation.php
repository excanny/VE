<?php
/**
 * Template part for comments navigation in the Post page inside comments.
 *
 * @package Nubia
 */

?>

<nav id='comment-nav-above' class='navigation comment-navigation'>
  <h2 class='screen-reader-text'><?php esc_html_e( 'Comment navigation', 'nubia' ); ?></h2>

  <div class='nav-links'>
    <div class='nav-previous'>
      <span class='pagination__text'>
        <?php previous_comments_link( esc_html__( 'Older Comments', 'nubia' ) ); ?>
      </span>
    </div>

    <div class='nav-next'>
      <span class='pagination__text'>
        <?php next_comments_link( esc_html__( 'Newer Comments', 'nubia' ) ); ?>
      </span>
    </div>
  </div>

</nav>