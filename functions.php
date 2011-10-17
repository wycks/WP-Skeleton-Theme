<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

// drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );


//widget support for a right sidebar
register_sidebar(array(
  'name' => 'Right SideBar',
  'id' => 'right-sidebar',
  'description' => 'Widgets in this area will be shown on the right-hand side.',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

//widget support for the footer
register_sidebar(array(
  'name' => 'Footer SideBar',
  'id' => 'footer-sidebar',
  'description' => 'Widgets in this area will be shown in the footer.',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );


//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter('widget_text', 'do_shortcode');


/**
 * MANAGE REMOVING OR ADDING STUFF (aka Function Snippets)
 * comment in or out what you want
 */

// remove stuff,  uncomment to enable
//require_once( get_template_directory() . '/snippets/remove-stuff.php' );

// add stuff
//require_once( get_template_directory() . '/snippets/add-stuff.php' );


?>