<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */


// REMOVE SOME HEADER OUTPUT
function Wps_remove_header_info() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link');
}
add_action('init', 'Wps_remove_header_info');

//-----------------------------------------


// REMOVE THE WORDPRESS UPDATE NOTIFICATION FOR ALL USERS EXCEPT SYSADMIN
//  See http://wordpress.stackexchange.com/questions/67945/how-do-i-disable-dashboard-update-notifications-for-subscribers/67952#67952
       
 //-----------------------------------------
       

// REMOVE META BOXES FROM DEFAULT POSTS SCREEN
 function Wps_remove_default_post_metaboxes() {
    remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
    remove_meta_box( 'postexcerpt','post','normal' ); // Excerpt Metabox
    remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Metabox
    remove_meta_box( 'trackbacksdiv','post','normal' ); // Talkback Metabox
    remove_meta_box( 'slugdiv','post','normal' ); // Slug Metabox
    remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
 }
 add_action('admin_menu','Wps_remove_default_post_metaboxes');
   
 //-----------------------------------------  


// REMOVE META BOXES FROM DEFAULT PAGES SCREEN
function Wps_remove_default_page_metaboxes() {
    remove_meta_box( 'postcustom','page','normal' ); // Custom Fields Metabox
    remove_meta_box( 'postexcerpt','page','normal' ); // Excerpt Metabox
    remove_meta_box( 'commentstatusdiv','page','normal' ); // Comments Metabox
    remove_meta_box( 'trackbacksdiv','page','normal' ); // Talkback Metabox
    remove_meta_box( 'slugdiv','page','normal' ); // Slug Metabox
    remove_meta_box( 'authordiv','page','normal' ); // Author Metabox
 }
add_action('admin_menu','Wps_remove_default_page_metaboxes');
   
 //-----------------------------------------
   
   
// REMOVE DASHBOARD WIDGETS  
   function Wps_remove_dashboard_widgets() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}
add_action('wp_dashboard_setup', 'Wps_remove_dashboard_widgets' );



 //-----------------------------------------


// DISABLE DEFAULT WIDGETS
function Wps_unregister_default_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
}
add_action('widgets_init', 'Wps_unregister_default_widgets', 1);


 //-----------------------------------------


// REMOVE MENU ITEMS (can be based on user role) this is only visual! users can still go to the url

add_action( 'admin_menu', 'Wps_remove_tools', 99 );
function Wps_remove_tools(){
    
    remove_menu_page( 'index.php' );                     //dashboard
    remove_menu_page( 'edit.php' );                      //posts
    remove_menu_page( 'upload.php' );                    //media
    remove_menu_page( 'link-manager.php' );              //links
    remove_menu_page( 'edit.php?post_type=page' );       //page
    remove_menu_page( 'edit-comments.php' );             //comments
    remove_menu_page( 'themes.php' );                    //appearance
    remove_menu_page( 'plugins.php' );                   //plugins
    remove_menu_page( 'users.php' );                     //users
    remove_menu_page( 'tools.php' );                     //tools
    remove_menu_page( 'options-general.php' );           //settings
    
}

// remove sub-menu items only (fill in the rest)
function Wps_remove_menu_elements()
    {
        remove_submenu_page( 'plugins.php', 'plugin-editor.php' );  //plugin editor
    }
    add_action('admin_init', 'Wps_remove_menu_elements');



 //-----------------------------------------



// DISABLE RSS FEEDS
function fb_disable_feed() {
wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}

add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);

 //-----------------------------------------
   

// REMOVE VERSION OUTPUT
function complete_version_removal() {
    return '';
}
add_filter('the_generator', 'complete_version_removal');


// USER Conditionals to wrap functions
// 
//  # by user capability
//  if (!current_user_can('manage_options')) { ..
//  
//  ---------------------
//  
//  # by username#
//  
//  global $wp_meta_boxes;
//  global $current_user;
//  get_currentuserinfo();
//
//  if($current_user->user_login == 'username'){ ..
//  
//  ----------------------
//  
//  #if the user is an admin - by user role#
//  
//  if ( ! is_admin() ) {..   




?>
