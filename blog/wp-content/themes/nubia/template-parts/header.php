<?php
/**
 * Site Header
 *
 * @package Nubia
 */

?>

<header class='c-header'>
  <div class='o-grid'>

    <div class='o-grid__col o-grid__col--3-4-s o-grid__col--4-4-m'>
      <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
        <?php the_custom_logo() ?>
      <?php else: ?>
        <h1><a class='c-logo-link' href='<?php echo esc_url( home_url( '/' ) ); ?>'><?php bloginfo( 'name' ); ?></a></h1>
      <?php endif; ?>
    </div>

    <div class='o-grid__col o-grid__col--1-4-s o-grid__col--3-4-l o-grid__col--full'>
      <div class='c-off-canvas-content js-off-canvas-content'>
        <label class='js-off-canvas-toggle c-off-canvas-toggle c-off-canvas-toggle--close'>
          <span class='c-off-canvas-toggle__icon'></span>
        </label>

        <div class='o-grid'>
          <div class='o-grid__col o-grid__col--4-4-s o-grid__col--3-4-l o-grid__col--full'>
            <?php get_template_part( 'template-parts/navigation' ); ?>
          </div>
        </div>
      </div>

      <label class='js-off-canvas-toggle c-off-canvas-toggle' aria-label='Toggle navigation'>
        <span class='c-off-canvas-toggle__icon'></span>
      </label>
    </div>

  </div>
</header>

<?php if ( get_theme_mod( 'nubia_display_search_icon' ) ) : ?>
  <?php get_template_part( 'template-parts/search-modal-form' ); ?>
<?php endif; ?>