<?php
/**
 * Template part for displaying no results messages
 *
 * @package Nubia
 */

?>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

  <p class='u-font-size-medium'>
    <?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nubia' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?>
  </p>

<?php elseif ( is_search() ) : ?>

  <p class='u-font-size-medium'>
    <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nubia' ); ?>
  </p>

  <?php get_search_form(); ?>

<?php else : ?>

  <p class='u-font-size-medium'>
    <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nubia' ); ?>
  </p>

  <?php get_search_form(); ?>

<?php endif; ?>