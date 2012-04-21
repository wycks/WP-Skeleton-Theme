<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>

   <div class="content">
     <div class="two-thirds column alpha">
       <div class="main"> 
                        
        <?php while ( have_posts() ) : the_post(); ?> <!--  the Loop -->
                        
        <article id="post-<?php the_ID(); ?>">
          <div class="title">            
             <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>  <!--Post titles-->
          </div>
             
            <?php the_content("Continue reading " . the_title('', '', false)); ?> <!--The Content-->
	 
             <!--The Meta, Author, Date, Categories and Comments-->   
              <div class="meta"> 
                    Date posted: <?php echo get_the_date(); ?>
                  | Author: <?php the_author_posts_link(); ?>
                  | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                  <p>Categories: <?php the_category(' '); ?></p>
              </div>
        </article>
                        
			
        <?php endwhile; ?><!--  End the Loop -->

        <?php /* Display navigation to next/previous pages when applicable */ ?>
  
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>

          <nav id="nav-below">
            <hr>
            <div class="nav-previous"><?php next_posts_link(); ?></div>
            <div class="nav-next"><?php previous_posts_link(); ?></div>
          </nav><!-- #nav-below -->
          
        <?php endif; ?>
          
        <?php /* Only load comments on single post/pages*/ ?>
        <?php if(is_page() || is_single()) : comments_template( '', true ); endif; ?>
     
      </div>  <!-- End Main -->
    </div>  <!-- End two-thirds column -->
  </div><!-- End Content -->
    
