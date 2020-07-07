<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nubia
 */

get_header(); ?>

<div class='o-wrapper' id='content'>

  <?php if ( have_posts() ) : ?>

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

  <?php else: ?>

    <?php get_template_part( 'template-parts/content-none' ); ?>

  <?php endif; ?>

</div>

<?php
get_footer();