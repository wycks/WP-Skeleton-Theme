<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

// LOAD JQUERY FROM CDN
add_action( 'init', 'Wps_jquery_register' );

function Wps_jquery_register() {

if ( !is_admin() ) {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
}
}


 //-----------------------------------------

// CUSTOMIZE ADMIN MENU ORDER
   function Wps_custom_menu_order($menu_ord) {
       if (!$menu_ord) return true;
       return array(
        'index.php', // this represents the dashboard link
        'edit.php?post_type=events', // this is a custom post type menu
        'edit.php?post_type=news', 
        'edit.php?post_type=articles', 
        'edit.php?post_type=faqs', 
        'edit.php?post_type=mentors',
        'edit.php?post_type=testimonials',
        'edit.php?post_type=services',
        'edit.php?post_type=page', // this is the default page menu
        'edit.php', // this is the default POST admin menu 
    );
   }
   add_filter('custom_menu_order', 'Wps_custom_menu_order');
   add_filter('menu_order', 'Wps_custom_menu_order');

    //-----------------------------------------
   
   
   
   //This theme supports editor styles
add_editor_style("/css/layout-style.css");


?>