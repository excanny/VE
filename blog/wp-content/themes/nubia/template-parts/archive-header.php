<?php
/**
 * Template part for displaying the archive page header info.
 *
 * @package Nubia
 */

?>

<div class='o-grid'>
  <div class='o-grid__col o-grid__col--full'>

    <div class='c-archive'>
      <h4 class='c-archive__title'>
        <?php the_archive_title(); ?>
      </h4>

      <?php if (get_the_archive_description()) : ?>
        <div class='c-archive__description'>
          <?php the_archive_description(); ?>
        </div>
      <?php endif; ?>
    </div>

  </div>
</div>