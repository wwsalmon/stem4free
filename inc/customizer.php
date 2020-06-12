<?php
function s4f_customizer($wp_customize)
{
    $wp_customize->add_section('s4f-section', array(
        'title' => "Theme Custom Settings"
    ));
/*    $wp_customize->add_setting('s4f-home-image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's4f-home-image-control', array(
        "label" => "image field",
        "section" => "s4f-section",
        "settings" => "s4f-home-image"
    )));*/
//    $wp_customize->add_setting('s4f-slider-speed');
//    $wp_customize->add_control('s4f-slider-speed-control', array(
//        'label' => 'Home Slider Speed (seconds per slide, default 3)',
//        'type' => 'number',
//        'section' => 's4f-section',
//        'settings' => 's4f-slider-speed'
//    ));
}

add_action('customize_register', 's4f_customizer');