<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nubia
 */
?>

<article id='post-<?php the_ID(); ?>' <?php post_class('c-post entry'); ?>>

  <div class='c-content'>
    <?php the_content(); ?>

    <?php get_template_part( 'template-parts/wp-link-pages' ); ?>
  </div>

  <div class='o-grid'>
    <div class='o-grid__col o-grid__col--4-4-s'>
      <div class='c-tags'>
        <?php echo get_the_tag_list(); ?>
      </div>
    </div>
  </div>

  <hr>

  <?php
    get_template_part( 'template-parts/post-navigation' );

    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  ?>

</article>