<?php
function s4f_customizer($wp_customize)
{
    $wp_customize->add_section('s4f-section', array(
        'title' => "Stem4Free Custom Settings"
    ));
	$wp_customize->add_setting("s4f-col1-header", array(
		"default" => "Completely Student Run"
	));
	$wp_customize->add_control("s4f-col1-header-control", array(
		"label" => "Header for homepage column 1",
		"type" => "string",
		"section" => "s4f-section",
		"settings" => "s4f-col1-header"
	));
	$wp_customize->add_setting("s4f-col1-text", array(
		"default" => "Run by high school students, from leadership down to volunteers. If you're a student, join us today!"
	));
	$wp_customize->add_control("s4f-col1-text-control", array(
		"label" => "Blurb for homepage column 1",
		"type" => "textarea",
		"section" => "s4f-section",
		"settings" => "s4f-col1-text"
	));
	$wp_customize->add_setting("s4f-col1-link-text", array(
		"default" => "Join 100+ Student Volunteers"
	));
	$wp_customize->add_control("s4f-col1-link-text-control", array(
		"label" => "Blurb for homepage column 1",
		"type" => "string",
		"section" => "s4f-section",
		"settings" => "s4f-col1-link-text"
	));
	$wp_customize->add_setting("s4f-col1-link-page");
	$wp_customize->add_control("s4f-col1-link-page-control", array(
		"label" => "Page for homepage column 1 link",
		"type" => "dropdown-pages",
		"section" => "s4f-section",
		"settings" => "s4f-col1-link-page"
	));
    $wp_customize->add_setting("s4f-col2-header", array(
	    "default" => "For Business Partners"
    ));
    $wp_customize->add_control("s4f-col2-header-control", array(
    	"label" => "Header for homepage column 2",
	    "type" => "string",
	    "section" => "s4f-section",
	    "settings" => "s4f-col2-header"
    ));
	$wp_customize->add_setting("s4f-col2-text", array(
		"default" => "Businesses donate either regularly or whenever they have leftover food. Our volunteers pick up food from businesses and deliver it to food pantries, homeless shelters, and other organizations."
	));
	$wp_customize->add_control("s4f-col2-text-control", array(
		"label" => "Blurb for homepage column 2",
		"type" => "textarea",
		"section" => "s4f-section",
		"settings" => "s4f-col2-text"
	));
	$wp_customize->add_setting("s4f-col2-link-text", array(
		"default" => "More info for businesses"
	));
	$wp_customize->add_control("s4f-col2-link-text-control", array(
		"label" => "Blurb for homepage column 2",
		"type" => "string",
		"section" => "s4f-section",
		"settings" => "s4f-col2-link-text"
	));
	$wp_customize->add_setting("s4f-col2-link-page");
	$wp_customize->add_control("s4f-col2-link-page-control", array(
		"label" => "Page for homepage column 2 link",
		"type" => "dropdown-pages",
		"section" => "s4f-section",
		"settings" => "s4f-col2-link-page"
	));
	$wp_customize->add_setting("s4f-col3-header", array(
		"default" => "Latest Updates & Blog Posts"
	));
	$wp_customize->add_control("s4f-col3-header-control", array(
		"label" => "Header for homepage column 3",
		"type" => "string",
		"section" => "s4f-section",
		"settings" => "s4f-col3-header"
	));
	$wp_customize->add_setting("s4f-col3-link-text", array(
		"default" => "More posts"
	));
	$wp_customize->add_control("s4f-col3-link-text-control", array(
		"label" => "Blurb for homepage column 3",
		"type" => "string",
		"section" => "s4f-section",
		"settings" => "s4f-col3-link-text"
	));
	$wp_customize->add_setting("s4f-col3-link-page");
	$wp_customize->add_control("s4f-col3-link-page-control", array(
		"label" => "Page for homepage column 3 link",
		"type" => "dropdown-pages",
		"section" => "s4f-section",
		"settings" => "s4f-col3-link-page"
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