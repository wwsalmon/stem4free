<?php
function s4f_customizer($wp_customize)
{
    $wp_customize->add_section('s4f-section', array(
        'title' => "Theme Custom Settings"
    ));
    $wp_customize->add_setting('s4f-image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 's4f-image-control', array(
        "label" => "image field",
        "section" => "s4f-section",
        "settings" => "s4f-image",
        "width" => 900,
        "height" => 600,
        "flex-width" => true,
        "flex-height" => true
    )));
    $wp_customize->add_setting('s4f-text');
    $wp_customize->add_control('s4f-text-control', array(
        'label' => 'text field',
        'type' => 'string',
        'section' => 's4f-section',
        'settings' => 's4f-home-text'
    ));
}

add_action('customize_register', 's4f_customizer');