<?php
/**
 * The template for displaying author page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nubia
 */

get_header(); ?>

<div class='o-wrapper' id='content'>

  <div class='o-grid'>
    <div class="o-grid__col o-grid__col--full">
      <?php get_template_part( 'template-parts/author-bio' ); ?>
    </div>
  </div>

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

    <div class='o-grid'>
      <div class='o-grid__col o-grid__col--full'>
        <p class='font-small'>
          <?php esc_html_e( 'No posts by this author.', 'nubia' ); ?>
        </p>
      </div>
    </div>

  <?php endif; ?>

</div>

<?php
get_footer();