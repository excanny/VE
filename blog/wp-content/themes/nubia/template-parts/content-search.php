<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nubia
 */

?>

<?php get_template_part( 'template-parts/search-header' ); ?>

<div class='o-grid js-grid'>
  <?php
    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post-card' );
    endwhile;
  ?>
</div>

<div class='o-grid'>
  <?php get_template_part( 'template-parts/pagination' ); ?>
</div>