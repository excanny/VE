<?php
/**
 * Template part for displaying the page top section.
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

    <div class="o-grid__col o-grid__col--4-4-s <?php if ( has_post_thumbnail() ) : echo 'o-grid__col--1-3-m'; else: echo 'o-grid__col--2-3-m o-grid__col--center'; endif;?> ">
      <div class="c-post-hero__content <?php if ( ! has_post_thumbnail() ) : echo 'c-post-hero__content--raw'; endif;?> ">
        <h1 class='c-post-hero__title'><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>