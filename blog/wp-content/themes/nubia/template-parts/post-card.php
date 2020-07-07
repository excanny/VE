<?php
/**
 * Template part for displaying the post card in the loop.
 *
 * @package Nubia
 */

?>

<div <?php post_class('o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m o-grid__col--1-3-l c-post-card-wrap js-post-card-wrap'); ?>>
  <div class='c-post-card <?php nubia_post_class(); ?>'>

    <?php if ( has_post_thumbnail() ) : ?>
      <div class='c-post-card__media'>
        <a href="<?php the_permalink(); ?>" class='c-post-card__image js-fadein' style='background-image: url(<?php esc_url(nubia_entry_feature_image_path('large')); ?>)' aria-label="<?php the_title(); ?>">
          <span title="<?php esc_html_e('Featured Post', 'nubia'); ?>">
            <span class='c-post-card--featured__icon' data-icon='ei-star' data-size='s'></span>
          </span>
        </a>
      </div>
    <?php endif; ?>

    <div class="c-post-card__content <?php if ( ! has_post_thumbnail() ) : echo 'c-post-card__content--raw'; endif;?> ">
      <div class='c-post-card__tags'>
        <?php
          $category = get_the_category();
          if ($category) {
            echo '<a href="' . esc_url( get_category_link( $category[0]->term_id ) ) . '">' . esc_html( $category[0]->name ) . '</a>';
          }
        ?>
      </div>

      <h2 class='c-post-card__title'>
        <a href="<?php the_permalink(); ?>" class='c-post-card__title-link'>
          <?php the_title(); ?>
        </a>
      </h2>

      <div class='c-post-card__meta'>
        <time class='c-post-card__date' datetime="<?php the_time( 'c' ); ?>" title="<?php the_time( 'c' ); ?>"><?php echo get_the_date(get_option( 'date_format' )); ?></time>
        <div class='c-post-card__author'><?php the_author_posts_link(); ?></div>
      </div>
    </div>
  </div>
</div>