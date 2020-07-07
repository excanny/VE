<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nubia
 */
?>

<div class='c-sidebar'>
  <?php get_template_part( 'template-parts/author-widget' ); ?>

  <?php if ( is_active_sidebar( 'post-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'post-sidebar' ); ?>
  <?php endif; ?>
</div>