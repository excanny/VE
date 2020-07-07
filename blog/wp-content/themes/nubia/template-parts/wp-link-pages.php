<?php
/**
 * Template part for displaying the wp_link_pages.
 *
 * @package Nubia
 */

?>

<?php
  wp_link_pages( array(
    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nubia' ),
    'after'  => '</div>',
  ) );
?>