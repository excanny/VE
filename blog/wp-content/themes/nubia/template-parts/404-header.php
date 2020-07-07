<?php
/**
 * Template part for displaying the 404 page header info.
 *
 * @package Nubia
 */

?>

<div class='o-grid'>
  <div class='o-grid__col o-grid__col--full'>

    <div class='c-archive'>
      <h4 class='c-archive__title'>
        <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nubia' ); ?>
      </h4>

      <div class='c-archive__description'>
        <?php get_template_part( 'template-parts/no-results' ); ?>
      </div>
    </div>

  </div>
</div>