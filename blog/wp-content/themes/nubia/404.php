<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nubia
 */

get_header(); ?>

<div class='o-wrapper' id='content'>

  <?php get_template_part( 'template-parts/404-header' ); ?>

  <?php
    $args = array(
      'post_type'           => 'post',
      'post_status'         => 'publish',
      'posts_per_page'      => 6,
      'ignore_sticky_posts' => 1
      );

    $query = new WP_Query( $args );
  ?>

  <?php if ( $query->have_posts() ) : ?>

    <div class='o-grid'>
      <div class="o-grid__col o-grid__col--full">
        <h4><?php esc_html_e( 'Recent Posts', 'nubia' ); ?></h4>
      </div>
    </div>

    <div class='o-grid'>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php get_template_part( 'template-parts/post-card' ); ?>

      <?php endwhile; wp_reset_postdata(); ?>
    </div>

  <?php endif; ?>

</div>

<?php
get_footer();