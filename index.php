<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>> 
    
     <?php get_header(); //the Header ?>                         

     <?php get_template_part( 'loop', 'index' ); //the Loop ?>     
     
     <?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?> 
            
     <?php get_footer(); //the Footer ?>                        
           
