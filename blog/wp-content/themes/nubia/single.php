<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nubia
 */

get_header(); ?>

<?php get_template_part( 'template-parts/post-hero' ); ?>

<div class='o-wrapper' id='content'>

  <div class='o-grid'>
    <div class='o-grid__col o-grid__col--center o-grid__col--3-4-m o-grid__col--2-3-l'>
      <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', get_post_format() );

        endwhile;
      ?>
    </div>

    <div class='o-grid__col o-grid__col--center o-grid__col--3-4-m o-grid__col--1-3-l'>
      <?php get_sidebar(); ?>
    </div>
  </div>

</div>

<?php nubia_related_posts(); ?>

<?php
get_footer();