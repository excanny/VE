<?php
/**
 * Set up the social media links
 *
 * @package Nubia
 */

?>

<?php if ( has_nav_menu( 'social' ) ) : ?>

  <ul class='c-social-icons o-plain-list'>
    <?php
      wp_nav_menu( array(
        'items_wrap'      => '%3$s',
        'container'       => false,
        'theme_location'  => 'social',
        'link_before'     => '<span class="screen-reader-text">',
        'link_after'      => '</span>',
        'depth'           => 1,
      ) );
    ?>
  </ul>

<?php endif; ?>