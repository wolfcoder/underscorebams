<?php
/**
 * Template Name: King Composer - Sidebar
 * The template for custom page build for composer editor
 *
 * with no padding in the side and no sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscorebams
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'plain' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar(); ?>
    </div><!-- #content in header.php-->
<?php
get_footer();