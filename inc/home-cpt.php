<?php
function s4f_create_home_cpt() {

    $labels = array(
        "name" => "Home Blocks",
        "singular_name" => "Home Block"
    );

    $args = array(
        "labels" => $labels,
        "public" => true,
        "show_in_rest" => true,
        "supports" => array(
            "title", "editor"
        ),
        "menu-position" => 5,
        "exclude_from_search" => true
    );

    register_post_type("home_blocks", $args);

}

add_action('init', 's4f_create_home_cpt');

add_theme_support( 'post-thumbnails' );

function s4f_create_gallery_cpt() {

    $labels = array(
        "name" => "Hero Images",
        "singular_name" => "Hero Image"
    );

    $args = array(
        "labels" => $labels,
        "public" => true,
        "supports" => array(
            "editor", "thumbnail", "date"
        ),
        "menu-position" => 6,
        "exclude_from_search" => true
    );

    register_post_type("hero_images", $args);

}

add_action('init', 's4f_create_gallery_cpt');