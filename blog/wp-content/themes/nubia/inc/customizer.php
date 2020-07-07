<?php
/**
 * Nubia Theme Customizer.
 *
 * @package Nubia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nubia_customize_register( $wp_customize ) {
  // Remove headerimage, and header text option from theme customizer
  $wp_customize->remove_section('header_image');
  $wp_customize->remove_control('display_header_text');

  // Display Search Icon
  $wp_customize->add_setting( 'nubia_display_search_icon' , array(
    'sanitize_callback'	=> 'wp_kses_post'
  ) );

  $wp_customize->add_control( 'nubia_display_search_icon', array(
    'label'       => __( 'Display Search Icon', 'nubia' ),
    'description'	=> esc_html__( '', 'nubia' ),
		'type'        => 'checkbox',
    'section'     => 'title_tagline',
    'settings'    => 'nubia_display_search_icon',
    'priority'    => '20'
  ) );

  // Footer Copyright
  $wp_customize->add_setting( 'nubia_footer_copyright' , array(
    'sanitize_callback'	=> 'wp_kses_post'
  ) );

  $wp_customize->add_control ( 'nubia_footer_copyright', array(
    'label'       => __( 'Footer Copyright', 'nubia' ),
    'description'	=> esc_html__( 'Customize the footer copyright text. (HTML is allowed)', 'nubia' ),
		'type'        => 'textarea',
    'section'     => 'title_tagline',
    'settings'    => 'nubia_footer_copyright',
  ) );

  // Add brand color setting and control
	$wp_customize->add_setting( 'nubia_brand_color', array(
    'default'           => '#DB3334',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nubia_brand_color', array(
		'label'     => __( 'Brand Color', 'nubia' ),
    'section'   => 'colors',
    'settings'  => 'nubia_brand_color',
  ) ) );
  
  // Set homepage recent posts as a normal 3 column grid instead of 2 posts
  $wp_customize->add_setting( 'nubia_homepage_3_column_recent_posts' , array(
    'sanitize_callback'	=> 'wp_kses_post'
  ) );

  $wp_customize->add_control( 'nubia_homepage_3_column_recent_posts', array(
    'label'       => __( 'Homepage 3 Column Grid for Recent Posts', 'nubia' ),
    'description'	=> esc_html__( '', 'nubia' ),
		'type'        => 'checkbox',
    'section'     => 'title_tagline',
    'settings'    => 'nubia_homepage_3_column_recent_posts',
    'priority'    => '20'
  ) );
}
add_action( 'customize_register', 'nubia_customize_register' );

// Add customizer CSS code to header

function nubia_output_customizer_css() { ?>
  <?php $nubia_brand_color  = get_theme_mod( 'nubia_brand_color' ); ?>

  <?php if ( $nubia_brand_color ) : ?>
    <style>
    *::selection {
      background-color: <?php echo $nubia_brand_color; ?>;
    }

    *::-moz-selection {
      background-color: <?php echo $nubia_brand_color; ?>;
    }

    a:hover,
    a:active,
    a:focus,
    .c-logo-link,
    .c-nav a:hover,
    .c-nav a:active,
    .c-nav a:focus,
    .c-nav .menu-item.current_page_item a,
    .c-nav .sub-menu .menu-item a:hover,
    .c-nav .sub-menu .menu-item a:active,
    .c-nav .sub-menu .menu-item a:focus,
    .c-social-icons a:hover,
    .c-social-icons a:active,
    .c-social-icons a:focus,
    .c-search-toggle__icon:hover,
    .c-search-toggle__icon:active,
    .c-search-toggle__icon:focus,
    .c-post-card__tags a,
    .c-teaser:before,
    .c-widget--footer a:hover,
    .c-widget--footer a:active,
    .c-widget--footer a:focus,
    .c-content a:not(.c-btn):hover,
    .c-content a:not(.c-btn):active,
    .c-content a:not(.c-btn):focus,
    .c-tags a:hover,
    .c-tags a:active,
    .c-tags a:focus,
    .c-categories a:hover,
    .c-categories a:active,
    .c-categories a:focus,
    .c-footer__copyright a:hover,
    .c-footer__copyright a:active,
    .c-footer__copyright a:focus,
    .comment-awaiting-moderation,
    .screen-reader-text:focus {
      color: <?php echo $nubia_brand_color; ?>;
    }

    blockquote,
    .c-post-card__tags {
      border-left-color: <?php echo $nubia_brand_color; ?>;
    }

    .c-btn:hover,
    .c-btn:active,
    .c-btn:focus,
    .c-btn.active,
    input[type='submit'].active,
    input[type='submit']:hover,
    input[type='submit']:active,
    input[type='submit']:focus {
      border-color: <?php echo $nubia_brand_color; ?>;
      background-color: <?php echo $nubia_brand_color; ?>;
    }
    </style>
  <?php endif; ?>
<?php }

add_action( 'wp_head', 'nubia_output_customizer_css' );