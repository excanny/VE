<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nubia
 */

?>

  <footer class='c-footer'>
    <div class='o-grid'>

      <?php
        // If we get this far, we have widgets.
        // The next check is to see if all four widget areas have content, which will affect the CSS classes used.
        if ( is_active_sidebar( 'footer-first'  )
          && is_active_sidebar( 'footer-second' )
          && is_active_sidebar( 'footer-third'  )
          && is_active_sidebar( 'footer-fourth' )
        ) : ?>

        <div class='o-grid__col o-grid__col--full'>
          <div class='c-footer__top'>
            <div class='o-grid'>
              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m o-grid__col--1-4-l'>
                <?php dynamic_sidebar( 'footer-first' ); ?>
              </div>

              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m o-grid__col--1-4-l'>
                <?php dynamic_sidebar( 'footer-second' ); ?>
              </div>

              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m o-grid__col--1-4-l'>
                <?php dynamic_sidebar( 'footer-third' ); ?>
              </div>

              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m o-grid__col--1-4-l'>
                <?php dynamic_sidebar( 'footer-fourth' ); ?>
              </div>
            </div>
          </div>
        </div>

      <?php
        //end of check for all four sidebars. Next we check if there are three sidebars with widgets.
        elseif ( is_active_sidebar( 'footer-first'  )
            &&   is_active_sidebar( 'footer-second' )
            &&   is_active_sidebar( 'footer-third'  )
            && ! is_active_sidebar( 'footer-fourth' )
        ) : ?>

        <div class='o-grid__col o-grid__col--full'>
          <div class='c-footer__top'>
            <div class='o-grid'>
              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--1-3-m'>
                <?php dynamic_sidebar( 'footer-first' ); ?>
              </div>

              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--1-3-m'>
                <?php dynamic_sidebar( 'footer-second' ); ?>
              </div>

              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--1-3-m'>
                <?php dynamic_sidebar( 'footer-third' ); ?>
              </div>
            </div>
          </div>
        </div>

      <?php
        //end of check for three sidebars. Next we check if there are two sidebars with widgets.
        elseif ( is_active_sidebar( 'footer-first'  )
            &&   is_active_sidebar( 'footer-second' )
            && ! is_active_sidebar( 'footer-third'  )
            && ! is_active_sidebar( 'footer-fourth' )
        ) : ?>

        <div class='o-grid__col o-grid__col--full'>
          <div class='c-footer__top'>
            <div class='o-grid'>
              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m'>
                <?php dynamic_sidebar( 'footer-first' ); ?>
              </div>

              <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m'>
                <?php dynamic_sidebar( 'footer-second' ); ?>
              </div>
            </div>
          </div>
        </div>

      <?php
        //end of check for two sidebars. Finally we check if there is just one sidebar with widgets.
        elseif ( is_active_sidebar( 'footer-first'  )
            && ! is_active_sidebar( 'footer-second' )
            && ! is_active_sidebar( 'footer-third'  )
            && ! is_active_sidebar( 'footer-fourth' )
        ) : ?>

        <div class='o-grid__col o-grid__col--full'>
          <div class='c-footer__top'>
            <div class='o-grid'>
              <div class='o-grid__col o-grid__col--full'>
                <?php dynamic_sidebar( 'footer-first' ); ?>
              </div>
            </div>
          </div>
        </div>

      <?php
      //end of all sidebar checks.
      endif;?>

      <div class='o-grid__col o-grid__col--full'>
        <div class='o-grid'>

          <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m'>
            <div class='c-footer__copyright'>
              <?php if ( get_theme_mod( 'nubia_footer_copyright' ) ) : ?>
                <?php echo wp_kses_post( get_theme_mod( 'nubia_footer_copyright' ) ); ?>
              <?php else : ?>
                &copy; <?php echo date_i18n( __('Y', 'nubia') ); ?> <a href='<?php echo esc_url( home_url( '/' ) ); ?>'><?php bloginfo(); ?></a>
              <?php endif; ?>
            </div>
          </div>

          <div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m'>
            <?php get_template_part( 'template-parts/social-icons' ); ?>
          </div>

        </div>
      </div><!-- o-grid__col full -->

    </div>
  </footer>

</div>
<!-- End off-canvas-container -->

<?php wp_footer(); ?>

</body>
</html>