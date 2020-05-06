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