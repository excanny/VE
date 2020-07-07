<?php
/**
 * Template part for displaying the modal search window
 *
 * @package Nubia
 */

?>

<div class='c-search js-search'>
  <div class='o-grid'>
    <div class='o-grid__col o-grid__col--4-4-s o-grid__col--3-4-m o-grid__col--2-4-l o-grid__col--center'>
      <form class='c-search__form' method='get' action='<?php echo esc_url( home_url( '/' ) ); ?>'>
        <span class='c-search__icon' data-icon='ei-search' data-size='m'></span>
        <input type='search' name='s' class='c-search__input js-search-input' placeholder='<?php esc_html_e( 'Type and hit enter', 'nubia' ); ?>' aria-label='<?php esc_html_e( 'Search', 'nubia' ); ?>'>
      </form>
    </div>
  </div>

  <div class='c-search__close js-search-close'>
    <div data-icon='ei-close' data-size='s'></div>
  </div>
</div>