<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id='content'>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nubia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset='<?php bloginfo( 'charset' ); ?>'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='profile' href='http://gmpg.org/xfn/11'>
  <link rel='pingback' href='<?php bloginfo( 'pingback_url' ); ?>'>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <a class='skip-link screen-reader-text' href='#content'><?php esc_html_e( 'Skip to content', 'nubia' ); ?></a>

  <div class='js-off-canvas-container c-off-canvas-container'>

    <?php get_template_part( 'template-parts/header' ); ?>