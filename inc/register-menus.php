<?php
function s4f_register_menus()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Home Navigation')
    ));
}

add_action('init', 's4f_register_menus');