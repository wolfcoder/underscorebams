<?php
/**
 * Template Name: King Composer page
 * The template for custom page build for composer editor
 *
 * with no padding in the side and no sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscorebams
 */

get_header(); ?>
    <div class="site-content-full">
	    <?php
	    while ( have_posts() ) : the_post();

		    get_template_part( 'template-parts/content', 'plain' );

		    // If comments are open or we have at least one comment, load up the comment template.
		    if ( comments_open() || get_comments_number() ) :
			    comments_template();
		    endif;

	    endwhile; // End of the loop.
	    ?>
    </div><!-- .site-content-full -->

<?php
get_footer();
