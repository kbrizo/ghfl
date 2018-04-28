<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GHFL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>Go Hard Fitness Lab</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ghfl' ); ?></a>

	<header>
		<div class="header">
			        <img src="http://localhost/wp-content/uploads/2018/04/Title-1.png" class="navimage_desktop">
        <img src="http://localhost/wp-content/uploads/2018/04/title_m.png" class="navimage_mobile">


		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ghfl' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
        </div><!-- header class -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
