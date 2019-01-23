<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage LPFirstTheme
 * @since 1.0.0
 */
?><!doctype html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
      wp_enqueue_script( 'themeslug_enqueue_style' );
     ?>
    <?php wp_head(); ?>
  </head>
  <body class="grid">
    <div class="container-block">