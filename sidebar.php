<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
    <div class="one-third column omega" id="side">
        <div class="sidebar"> <!--  the Sidebar -->
            <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?> <?php dynamic_sidebar( 'right-sidebar' ); ?>
            <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
	        <?php endif; ?>
       </div>
    </div>
