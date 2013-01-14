<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
  <div class="header">  
    
    <div class="seven columns alpha"> 
        <div class="logo">
            <a href="<?php echo home_url(); //make logo a home link?>">
            <h1><?php echo get_bloginfo('name');?></h1>
            <h5><?php echo get_bloginfo('description');?></h5>
            </a>
        </div>
    </div> 
    
    <div class="offset-by-one omega">

    <!--  the Menu -->
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

    </div>
</div> <!--  End blog header -->
   