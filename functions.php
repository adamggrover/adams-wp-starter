<?php

// Register styles

function adams_wp_starter_register_styles()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('adams_wp_starter', get_template_directory_uri() . '/dist/index.css', array(), $version);
}

add_action('wp_enqueue_scripts', 'adams_wp_starter_register_styles');


// Register scripts

function adams_wp_starter_register_scripts()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('adams_wp_starter-main', get_template_directory_uri() . '/dist/index.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'adams_wp_starter_register_scripts');

// Theme Support

function adams_wp_starter_theme_support()
{

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'adams_wp_starter_theme_support');

//Add Menu Locations

function adams_wp_starter_menus()
{

    $locations = array(
        'header' => 'Header',
    );

    register_nav_menus($locations);
}

add_action('init', 'adams_wp_starter_menus');