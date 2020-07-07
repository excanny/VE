<?php
/**
 * Template part for displaying the Previous/next post navigation..
 *
 * @package Nubia
 */

?>

<?php
  the_post_navigation( array(
    'next_text' => '<span class="meta-nav" aria-hidden="true"><span class="pagination__text">' . esc_html__( 'Next', 'nubia' ) . '</span><span class="pagination__icon" data-icon="ei-chevron-right" data-size="s"></span></span> ' .
    '<span class="screen-reader-text">' . esc_html__( 'Next post:', 'nubia' ) . '</span>' .
    '<span class="post-title">%title</span>',
    'prev_text' => '<span class="meta-nav" aria-hidden="true"><span class="pagination__icon" data-icon="ei-chevron-left" data-size="s"></span><span class="pagination__text">' . esc_html__( 'Previous', 'nubia' ) . '</span></span>' .
    '<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'nubia' ) . '</span>' .
    '<span class="post-title">%title</span>',
  ) );
?>