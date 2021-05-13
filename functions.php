<?php

function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), rand(111, 9999), 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), rand(111, 9999), 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function bootstrap_javascript()
{
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'bootstrap_javascript');

//填入自己的客製化的javascript
function loadjs()
{
  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', false, true);
  wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

//Theme Options
add_theme_support('menu');

//Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )
);


//加入sidebar的功能
function my_sidebars()
{

  register_sidebar(array(
    'name' => 'Page Sidebar',
    'id'   => 'page-sidebar',
    'description'   => 'This is a widgetized area.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name' => 'Photo Sidebar',
    'id'   => 'photo-sidebar',
    'description'   => 'This is a widgetized area.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}
add_action('widgets_init', 'my_sidebars');

//bootstrap_navwalker

function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
