<?php

add_theme_support('post-thumbnails');

function random_color() {
  $colors = array(
    "#4ad98f",
    "#34495e",
    "#e74c3c",
    "#16a085",
    "#f39c12",
    "#3e8cbb",
    "#0f2c16",
    "#ca5f72",
    "#3c1641",
    "#77d294",
    "#b5563c",
    "#d68683",
    "#26102f",
    "#ffce4e",
    "#675fd7",
    "#7e3046",
    "#c1eaca",
    "#3cb46a",
    "#88d7c9",
  );
  $color_result = $colors[rand(0, (sizeof($colors)-1))];
  return $color_result;
}

function custom_excerpt_more( $more ) {
    return '';
}

add_filter('excerpt_more', 'custom_excerpt_more');

?>