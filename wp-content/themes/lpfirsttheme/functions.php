<?php
  function themeslug_enqueue_style() {
    wp_enqueue_style( 'core', 'style.css', false ); 
  }

  function themeslug_enqueue_script() {
    wp_enqueue_script( 'my-js', 'style.js', false );
  }

  add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
  add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );
?>