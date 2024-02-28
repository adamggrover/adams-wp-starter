<?php

function adams_wp_starter_register_styles(){

    $version = wp_get_theme() ->get ('Version');

    wp_enqueue_style('adams_wp_starter', get_template_directory_uri().'/dist/index.css', array(), $version);
}

add_action('wp_enqueue_scripts', 'adams_wp_starter_register_styles');


// Register scripts

function adams_wp_starter_register_scripts(){

    $version = wp_get_theme() ->get ('Version');

    wp_enqueue_script('adams_wp_starter-main', get_template_directory_uri().'/dist/index.js', array(), $version, true);


    // add_filter( 'wp_script_attributes', 'add_type_attribute', 10, 1 );

    // function add_type_attribute( $attributes ) {
    // // Only do this for a specific script.
    // if ( isset( $attributes['id'] ) && $attributes['id'] === 'adams_wp_starter-main-js' ) {
    //     $attributes['type'] = 'module';
    // }

    // return $attributes;
    // }
}

add_action('wp_enqueue_scripts', 'adams_wp_starter_register_scripts');


