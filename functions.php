<?php
function enqueue_head() {
  wp_enqueue_style('style_name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
  wp_enqueue_style(
    'googlefonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho&display=swap',
    array(),
    null
  );
  wp_enqueue_style(
    'swiper_css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    array(),
    null
  );
  wp_enqueue_script('script_jquery', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js', array(), '1.0', true );
}
add_action('wp_enqueue_scripts', 'enqueue_head');