<?php
function enqueue_head() {
  wp_enqueue_style('style_name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
  wp_enqueue_script('script_jquery', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js', array(), '1.0', true );
}
add_action('wp_enqueue_scripts', 'enqueue_head');