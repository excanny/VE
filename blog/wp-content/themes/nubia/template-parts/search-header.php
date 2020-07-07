<?php
/**
 * Template part for displaying the search page header info.
 *
 * @package Nubia
 */

?>

<div class='o-grid'>
  <div class='o-grid__col o-grid__col--full'>

    <div class='c-archive'>
      <h4 class='c-archive__title'>
        <?php printf( esc_html__( 'Search Results for: %s', 'nubia' ), '<i>' . get_search_query() . '</i>' ); ?>
      </h4>
    </div>

  </div>
</div>