<?php

function load_scripts(){
    wp_enqueue_script('template-js', get_template_directory_uri() . '/assets/js/template.js');
    wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css');
}

add_action('wp_enqueue_scripts', 'load_scripts');