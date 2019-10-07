<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plark_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://sf.abarba.me" crossorigin="">
	<link rel="preload" href="https://sf.abarba.me/SF-UI-Display-Regular.otf" as="font" type="font/woff2" crossorigin="anonymous">
	<link as="font" rel="preload" href="https://sf.abarba.me/SF-UI-Display-Medium.otf" type="font/woff2" crossorigin="anonymous">
	<link as="font" rel="preload" href="https://sf.abarba.me/SF-UI-Display-Bold.otf" type="font/woff2" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php
		$header_class = '';
		if (is_single()) {
			$header_class = 'header__single-post';
			$site_class = 'is-single-post';
		};
	?>
	<header id="masthead" class="header <?php echo($header_class) ?>">
		<div class="site-branding">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'plark_theme' ); ?></button>
			<?php the_custom_logo();?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<?php require get_template_directory() . '/components/appstore-link.php' ?>
	</header><!-- #masthead -->
	<?php
		if (is_single()) {
			require get_template_directory() . '/components/single-post-intro/single-post-intro.php';
		}
	?>
	<div id="content" class="site-content <?php echo($site_class) ?>">

