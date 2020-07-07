<?php
/**
 * Set up the site header Navigation
 *
 * @package Nubia
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <h2 class='screen-reader-text'><?php esc_html_e( 'Primary Navigation', 'nubia' ); ?></h2>
<?php endif; ?>

<nav class='c-nav-wrap'>
  <ul class='c-nav o-plain-list'>
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
    <?php endif; ?>

    <?php if ( get_theme_mod( 'nubia_display_search_icon' ) ) : ?>
      <li class='menu-item'>
        <div class='c-search-toggle js-search-toggle'>
          <div class='icon icon--ei-search icon--s c-search-toggle__icon'>
            <span class='c-nav__icon' data-icon='ei-search' data-size='s'></span>
          </div>
        </div>
      </li>
    <?php endif; ?>
  </ul>
</nav>