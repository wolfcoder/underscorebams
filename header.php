<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscorebams
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
		<?php esc_html_e( 'Skip to content', 'underscorebams' ); ?></a>
    <header id="masthead" class="site-header">
        <div class="site-branding">

			<?php
			if ( has_custom_logo() ) :
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' ); ?>
                <a href="http://cozymart.net"
                   rel="home"> <img width="90" height="30"
                                    src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"
                                    alt="<?php bloginfo( 'name' ); ?>"/></a>
			<?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                          rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>

        </div><!-- .site-branding -->
        <button class="menu-toggle" aria-expanded="false"><span>Menu</span></button>
        <button class="second-nav-toggle"><span>Cart </span></button>
        <div class="modal">
        </div>
        <nav class="main-navigation">
			<?php if ( ! dynamic_sidebar( 'widget-main-nav' ) ) : ?>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu'
				) );
				?>
			<?php endif; // end widget-main-nav ?>
        </nav><!-- .site-nav -->
        <div class="second-nav">
			<?php dynamic_sidebar( 'widget-second-nav' ); ?>
        </div>
    </header><!-- #masthead -->

	<?php if ( is_front_page() ) { ?>
		<?php if ( has_header_image() ) { ?>
			<?php the_custom_header_markup(); ?>
		<?php } ?>
	<?php } ?>

    <div class="site-content">

