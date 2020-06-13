<?php
function s4f_register_menus()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'navbar' => __('Navbar Menu'),
        'footer' => __('Footer Menu'),
        'branches' => __('Branches')
    ));
}

add_action('init', 's4f_register_menus');