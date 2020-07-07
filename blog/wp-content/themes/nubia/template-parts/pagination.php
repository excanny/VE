<?php
/**
 * Template part for displaying the Ajax load more posts button.
 *
 * @package Nubia
 */

?>

<?php if ( get_next_posts_link() ) : ?>
  <div class='o-grid__col o-grid__col--center o-grid__col--4-4-s o-grid__col--1-3-l'>
    <div class='c-ajax-pagination'>
      <button class='c-btn c-btn--full js-load-posts'><?php esc_html_e('More Posts', 'nubia'); ?></button>
    </div>
  </div>
<?php endif; ?>