<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

       <div class="two-thirds column alpha">
              <?php if ( have_posts() ) : ?>
                   <h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'mb' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                   
                      <?php
                      /* Run the loop for the search to output the results.
                       * If you want to overload this in a child theme then include a file
                       * called loop-search.php and that will be used instead.
                       */
                       get_template_part( 'loop', 'search' );
                      ?>
                   
              <?php else : ?>
                      <div id="post-0" class="post no-results not-found">
                          <h2 class="entry-title"><?php _e( 'Nothing Found', 'mb' ); ?></h2>
                          <div class="entry-content">
                              <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
                              <?php get_search_form(); ?>
                          </div><!-- .entry-content -->
                      </div><!-- #post-0 -->
              <?php endif; ?>
                   
</div>

<?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
<?php get_footer(); ?>