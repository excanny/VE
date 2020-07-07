<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nubia
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero' ); ?>

<div class='o-wrapper'>

  <div class='o-grid'>
    <div class='o-grid__col o-grid__col--center o-grid__col--2-3-m'>
      <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', 'page' );

        endwhile;
      ?>
    </div>
  </div>

</div>

<?php
get_footer();