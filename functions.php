<?php

function adams_wp_starter_register_styles(){

$version = wp_get_theme() ->get ('Version');

wp_enqueue_style('adams_wp_starter', get_template_directory_uri().'/dist/index.css', array(), $version);
}

add_action('wp_enqueue_scripts', 'adams_wp_starter_register_styles');


// Register scripts

function adams_wp_starter_register_scripts(){

wp_enqueue_script('adams_wp_starter-main', get_template_directory_uri().'/dist/js/index.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'adams_wp_starter_register_scripts');