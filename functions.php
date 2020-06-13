<?php

require('inc/register-menus.php');
require('inc/helper-functions.php');
require('inc/customizer.php');
require('inc/tgm-plugin-activation.php');

function gf_url(){
    return 'https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap';
}

function s4f_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/master.min.css', false, NULL, 'all' );
    $loadStateFace = "@font-face {
  font-family: 'StateFaceRegular';
  src: url('" . get_template_directory_uri() . "/fonts/stateface-regular-webfont.eot');
  src: url('" . get_template_directory_uri() . "/fonts/stateface-regular-webfont.eot?#iefix') format('embedded-opentype'),
  url('" . get_template_directory_uri() . "/fonts/stateface-regular-webfont.woff') format('woff'),
  url('" . get_template_directory_uri() . "/fonts/stateface-regular-webfont.ttf') format('truetype'),
  url('" . get_template_directory_uri() . "/fonts/stateface-regular-webfont.svg#StateFaceRegular') format('svg');
  font-weight: normal;
  font-style: normal;
}";

    wp_add_inline_style("customstyle", $loadStateFace);
    wp_enqueue_style('google_fonts', gf_url(), false, NULL, 'all' );
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', false, NULL, 'all' );
    wp_enqueue_script("d3-format", "https://d3js.org/d3-format.v1.min.js", false, NULL, false);
}

add_action('wp_enqueue_scripts', 's4f_script_enqueue');

function s4f_setup(){
    add_theme_support( 'editor-styles' );
    add_editor_style(get_template_directory_uri() . "/css/editor.min.css");
    add_editor_style(gf_url());
    show_admin_bar(false);
}

add_action('after_setup_theme', 's4f_setup');