<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

            <div class="two-thirds column alpha">
				<section id="primary" role="region">

				<div id="content">

				 <?php the_post(); ?>

				  <header class="page-header">
				 	<h2 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'WP-Skeleton' ), "<a class='author' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h2>
				  </header>

				  <?php rewind_posts(); ?>

				  <?php get_template_part( 'loop', 'author' ); ?>

			   </div><!-- #content -->

		       </section><!-- #primary -->
            </div> 
                
<?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
<?php get_footer(); ?>