<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nubia
 */

?>

<article id='post-<?php the_ID(); ?>' <?php post_class('c-post entry'); ?>>
  <div class='c-content'>
    <?php
      the_content();

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
    <?php get_template_part( 'template-parts/wp-link-pages' ); ?>
  </div>

  <div class='entry-footer'>
    <?php
      edit_post_link(
        sprintf(
          /* translators: %s: Name of current post */
          esc_html__( 'Edit %s', 'nubia' ),
          the_title( '<span class="screen-reader-text ">"', '"</span>', false )
        ),
        '<span class="edit-link font-small">',
        '</span>'
      );
    ?>
  </div>
</article>