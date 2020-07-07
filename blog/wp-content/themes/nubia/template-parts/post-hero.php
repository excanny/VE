<?php
/**
 * Template part for displaying the post top section in post page.
 *
 * @package Nubia
 */

?>

<div class='c-post-hero'>
  <div class='o-grid'>

    <?php if ( has_post_thumbnail() ) : ?>
      <div class='o-grid__col o-grid__col--4-4-s o-grid__col--4-4-m o-grid__col--2-3-l'>
        <div class='c-post-hero__media'>
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="o-grid__col o-grid__col--4-4-s <?php if ( has_post_thumbnail() ) : echo 'o-grid__col--1-3-l'; else: echo 'o-grid__col--3-4-m o-grid__col--4-4-l o-grid__col--center'; endif;?> ">
      <div class="c-post-hero__content <?php if ( ! has_post_thumbnail() ) : echo 'c-post-hero__content--raw'; endif;?> ">
        <h1 class='c-post-hero__title'><?php the_title(); ?></h1>
        <time class='c-post-hero__date' datetime='<?php the_time( 'c' ); ?>'><?php echo get_the_date(get_option( 'date_format' )); ?></time>

        <?php if ( has_category() ) : ?>
          <div class='c-categories'>
            <?php the_category(' '); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>