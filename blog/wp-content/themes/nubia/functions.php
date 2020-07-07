<?php
/**
 * Nubia functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nubia
 */

if ( ! function_exists( 'nubia_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nubia_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on Real, use a find and replace
   * to change 'nubia' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'nubia', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  function wysiwyg_styles() {
    $font_url = add_query_arg( 'family', urlencode( 'Roboto:400,500,700' ), '//fonts.googleapis.com/css' );
    add_editor_style( 'editor-style.css', $font_url );
  }
  add_action( 'init', 'wysiwyg_styles' );

  /*
   * Add Custom Logo Support
   */
  add_theme_support('custom-logo', array(
    'height'     => 32,
    'width'      => 150,
    'flex-width' => true,
    'flex-height' => true,
  ));

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'nubia' ),
    'social'  => esc_html__( 'Social Menu', 'nubia' )
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /**
   * Return entry full featured image path
   */
  if ( ! function_exists ( 'nubia_entry_feature_image_path' ) ) {
    function nubia_entry_feature_image_path() {
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
      echo esc_url($featured_image[0]);
    }
  }

  /**
   * Add CSS `o-grid__col--4-4-m o-grid__col--2-3-l` class to last post in the home page
   */
   if ( ! function_exists ( 'nubia_post_grid_class' ) ) {
    function nubia_post_grid_class( $classes ) {
      global $wp_query;

      if ( is_home() && !is_paged() ) {
        if ( 0 == $wp_query->current_post ) {
          $classes[] = 'o-grid__col--4-4-m o-grid__col--2-3-l';
        }
      }

      return $classes;
    }
  }

  if ( ! get_theme_mod( 'nubia_homepage_3_column_recent_posts' ) ) {
    add_filter( 'post_class', 'nubia_post_grid_class' );
  }

  /**
   * Add CSS `c-post-card--first` class to last post in the home page
   * Add CSS `c-post-card--half` class to the second and third posts in the home page
   */
   if ( ! function_exists ( 'nubia_post_class' ) ) {
    function nubia_post_class( ) {
      $classes = '';
      global $wp_query;

      if ( is_home() && !is_paged() ) {
        if ( 0 == $wp_query->current_post ) {
          $classes = 'c-post-card--first';
        }

        if( 1 == $wp_query->current_post ) {
          $classes = 'c-post-card--half';
        }
      }

      echo esc_html($classes);
    }
  }

  /**
   * Custom more text for the excerpt more
   */
  function nubia_custom_excerpt_more( $more ) {
    return ' ...';
  }
  add_filter( 'excerpt_more', 'nubia_custom_excerpt_more' );

  /**
   * Add CSS class to custom logo
   */
  function nubia_custom_logo_class( $html ) {
    $html = str_replace('custom-logo', 'c-logo', $html);

    return $html;
  }
  add_filter( 'get_custom_logo', 'nubia_custom_logo_class' );

  /**
   * Remove p tags from archive description
   */
  function nubia_custom_archive_description( $description ) {
    $remove = array( '<p>', '</p>' );
    $description = str_replace( $remove, '', $description );
    return $description;
  }
  add_filter( 'get_the_archive_description', 'nubia_custom_archive_description' );

  /**
  * Remove parentheses from category list and add span class to posts count
  */
  function nubia_categories_postcount_filter( $variable ) {
    $variable = str_replace( '(', '<span class="post-count"> ', $variable );
    $variable = str_replace( ')', ' </span>', $variable );
    return $variable;
  }
  add_filter( 'wp_list_categories', 'nubia_categories_postcount_filter' );

  /**
  * Remove parentheses from archive list and add span class to posts count
  */
  function nubia_archive_postcount_filter( $variable ) {
    $variable = str_replace( '(', '<span class="post-count"> ', $variable );
    $variable = str_replace( ')', ' </span>', $variable );
    return $variable;
  }
  add_filter( 'get_archives_link', 'nubia_archive_postcount_filter' );

  /**
  * Replace class on reply link
  */
  function nubia_replace_reply_link_class( $class ) {
    $class = str_replace( "class='comment-reply-link", "class='c-btn tiny", $class );
    return $class;
  }
  add_filter( 'comment_reply_link', 'nubia_replace_reply_link_class' );

  /**
  * Replace class on cancel reply link
  */
  function nubia_replace_cancel_reply_link_class( $cancel_comment_reply_link, $post = null ) {
    $new = str_replace( '<a', '<a class="c-btn tiny"', $cancel_comment_reply_link );
    return $new;
  }
  add_filter( 'cancel_comment_reply_link', 'nubia_replace_cancel_reply_link_class', 10, 2 );

  /*
   * Change the comment reply link to use 'Reply to &lt;Author First Name>'
   * https://raam.org/2013/personalizing-the-wordpress-comment-reply-link/
   */
  function nubia_add_comment_author_to_reply_link( $link, $args, $comment ) {

    $comment = get_comment( $comment );
    $author = $comment->comment_author;

    // If the user provided more than a first name, use only first name
    if( strpos( $author, ' ' ) ) {
      $author = substr( $author, 0, strpos( $author, ' ' ) );
    }

    // Replace Reply Link with "Reply to Author First Name>"
    $reply_link_text = $args['reply_text'];
    $link = str_replace( $reply_link_text, esc_html__( 'Reply to', 'nubia' ) . ' ' . $author, $link );

    return $link;
  }
  add_filter( 'comment_reply_link', 'nubia_add_comment_author_to_reply_link', 10, 3 );

  /**
   * Add Placehoder in comment Form Field (Comment)
   */
  function nubia_comment_textarea_placeholder( $fields ) {
    $fields['comment_field'] = str_replace(
      '<textarea',
      '<textarea placeholder="' . esc_html__( 'Comment', 'nubia' ) . '" ',
      $fields['comment_field']
    );

    return $fields;
  }
  add_filter( 'comment_form_defaults', 'nubia_comment_textarea_placeholder' );

  /**
   * Custom Comment Form Fields
   * Remove labels and add placeholders instead.
   */
  function nubia_custom_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields['author'] = '<p class="comment-form-author"><input id="author" name="author" type="text" placeholder="' . esc_html__( 'Name', 'nubia' ) . ( $req ? ' *' : '' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></p>';

    $fields['email'] = '<p class="comment-form-email"><input id="email" name="email" type="text" placeholder="' . esc_html__( 'Email', 'nubia' ) . ( $req ? ' *' : '' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="20"' . $aria_req . ' /></p>';

    $fields['url'] = '<p class="comment-form-url"><input id="url" name="url" type="text" placeholder="' . esc_html__( 'Website', 'nubia' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="20"' . $aria_req . ' /></p>';

    return $fields;
  }
  add_filter( 'comment_form_default_fields', 'nubia_custom_comment_form_fields' );

  /**
   * Returns the title escaped, to be used in the share URLs
   */
  function nubia_get_escaped_title() {
    echo htmlspecialchars( urlencode( html_entity_decode( get_the_title() . ' - ' ) ) );
  }

  /**
   * Related Posts Function.
   */
  if ( ! function_exists ( 'nubia_related_posts' ) ) {
    function nubia_related_posts() {
      global $post;
      $tags = wp_get_post_tags( $post->ID );
      $tag_arr = '';

      if( $tags ) {
        foreach( $tags as $tag ) {
          $tag_arr .= $tag->slug . ',';
        }

        $args = array(
          'tag'           => $tag_arr,
          'numberposts'   => 3,
          'post__not_in'  => array( $post->ID )
        );

        $related_posts = get_posts( $args );

        if( $related_posts ) {
          echo '<div class="c-related">';
            echo '<div class="o-grid">';
              echo '<div class="o-grid__col o-grid__col--full">';
                echo '<h5 class="c-related__title">' . esc_html__( 'You Might Be Interested In', 'nubia' ) . '</h5>';
              echo '</div>';
              foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
                <?php get_template_part( 'template-parts/post-card' ); ?>
              <?php endforeach;
            echo '</div>';
          echo '</div>';
        }
      }

      wp_reset_postdata();
    }
  }
}
endif;
add_action( 'after_setup_theme', 'nubia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nubia_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'nubia_content_width', 760 );
}
add_action( 'after_setup_theme', 'nubia_content_width', 0 );

/**
 * Add one or more classes to the WordPress search form's 'Search' button
 * @author Alain Schlesser (alain.schlesser@gmail.com)
 * @link http://www.brightnucleus.com/add-class-wordpress-search-button/
 *
 * @param  string  $form the search form HTML output
 * @return string  modified version of the search form HTML output
 *
 * @see http://codex.wordpress.org/Function_Reference/get_search_form
 * @see http://developer.wordpress.org/reference/hooks/get_search_form/
 */
  function nubia_custom_search_form( $form ) {
      $form = str_replace(
          'search-submit',
          'search-submit active',
          $form
      );
      return $form;
  }
  add_filter( 'get_search_form', 'nubia_custom_search_form' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nubia_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Post Sidebar', 'nubia' ),
    'id'            => 'post-sidebar',
    'description'   => esc_html__( 'Add widgets here to appear in single post page sidebar.', 'nubia' ),
    'before_widget' => '<section id="%1$s" class="c-widget c-widget--sidebar %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="c-widget--sidebar__title">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => esc_html__( 'Footer First', 'nubia' ),
    'id'            => 'footer-first',
    'description'   => esc_html__( 'Add widgets here to appear in site Footer First column.', 'nubia' ),
    'before_widget' => '<section id="%1$s" class="c-widget c-widget--footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="c-widget--footer__title">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => esc_html__( 'Footer Second', 'nubia' ),
    'id'            => 'footer-second',
    'description'   => esc_html__( 'Add widgets here to appear in site Footer Second column.', 'nubia' ),
    'before_widget' => '<section id="%1$s" class="c-widget c-widget--footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="c-widget--footer__title">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => esc_html__( 'Footer Third', 'nubia' ),
    'id'            => 'footer-third',
    'description'   => esc_html__( 'Add widgets here to appear in site Footer Third column.', 'nubia' ),
    'before_widget' => '<section id="%1$s" class="c-widget c-widget--footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="c-widget--footer__title">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => esc_html__( 'Footer Fourth', 'nubia' ),
    'id'            => 'footer-fourth',
    'description'   => esc_html__( 'Add widgets here to appear in site Footer Fourth column.', 'nubia' ),
    'before_widget' => '<section id="%1$s" class="c-widget c-widget--footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="c-widget--footer__title">',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'nubia_widgets_init' );

/**
 * Register Fonts
 */
if ( ! function_exists ( 'nubia_fonts_url' ) ) {
  function nubia_fonts_url() {
    $font_url = '';

    /**
     * Translators: If there are characters in your language that are not supported
     * by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'nubia' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Roboto:400,500,700' ), '//fonts.googleapis.com/css' );
    }
    return $font_url;
  }
}

/**
 * Enqueue scripts and styles.
 */
function nubia_scripts() {
  global $wp_query;

  wp_enqueue_style( 'nubia-fonts', nubia_fonts_url(), array(), '1.0.7' );

  if ( ! is_rtl() ) {
    wp_enqueue_style( 'nubia-style', get_stylesheet_uri() );
  } else {
    wp_enqueue_style( 'nubia-style', get_template_directory_uri() . '/style-rtl.css' );
  }

  wp_enqueue_script( 'nubia-main-script', get_template_directory_uri() . '/js/app.min.js', array( 'jquery' ), '1.0.7', true );

  // Max number of pages
  $nubia_page_number_max = $wp_query->max_num_pages;

  // Next page to load
	$nubia_page_number_next = (get_query_var('paged') > 1) ? get_query_var('paged') + 1 : 2;

  // Get next page link
  $nubia_page_link_next = get_pagenum_link(9999999999);

  wp_localize_script( 'nubia-main-script', 'nubia_config', array(
    'nubia_page_number_max'  => $nubia_page_number_max,
    'nubia_page_number_next' => $nubia_page_number_next,
    'nubia_page_link_next'   => $nubia_page_link_next,
    'nubia_load_more'        => esc_html__('More Posts', 'nubia'),
    'nubia_loading'          => esc_html__('Loading', 'nubia')
  ) );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'nubia_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Data Importer
 */
require get_template_directory() . '/inc/demo-import.php';

/**
 * Load Recent Posts Widget.
 */
require get_template_directory() . '/inc/widgets/nubia-recent-posts-widget.php';

/**
 * Load Ads Widget.
 */
require get_template_directory() . '/inc/widgets/nubia-ads-widget.php';

/**
 * Load Instagram Widget.
 */
require get_template_directory() . '/inc/widgets/nubia-instagram-widget.php';