<?php

function load_stylesheets()
{
   
    
    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css',
                     array(), false, 'all');
    wp_enqueue_style('reset');
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
                     array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('masterstyle', get_template_directory_uri() . '/style.css',
                     array(), false, 'all');
    wp_enqueue_style('masterstyle');
    
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{

    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.0.3.js', '', 1, true);
    
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');



function loadtilt()
{
    
    wp_register_script('tilt', get_template_directory_uri() . '/js/vanilla-tilt.min.js', '', 1, true); 
    wp_enqueue_script('tilt');
    
}
add_action('wp_enqueue_scripts', 'loadtilt');


function loadpace()
{
    
    wp_register_script('pace', get_template_directory_uri() . '/js/pace.js', '', 1, true); 
    wp_enqueue_script('pace');
    
}
add_action('wp_enqueue_scripts', 'loadpace');




function loadjs()
{
    
    wp_register_script('main', get_template_directory_uri() . '/js/weirdlife.js', '', 1, true); 
    wp_enqueue_script('main');
    
}
add_action('wp_enqueue_scripts', 'loadjs');

add_filter('the_content', 'cdn_urls');


