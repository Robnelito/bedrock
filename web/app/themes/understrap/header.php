<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="shortcut icon" type="image/png" href="<?php echo esc_url(home_url('app/themes/understrap/img/png/favicon.png')) ?>">
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<!-- <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?> -->

					<!-- Your site title as branding in the menu -->
					<!-- <?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?> -->
					<!-- end custom logo -->

				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button> -->

				<!-- The WordPress Menu goes here -->
				<!-- <?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div> -->
			<!-- .container -->
			<!-- <?php endif; ?> -->

		<!-- </nav> -->
		<!-- .site-navigation -->

	<!-- </div> -->
	<!-- #wrapper-navbar end -->

	<!-- Navigation -->
	<nav class="box" id="navbar">
		<div class="header"></div>

		<!-- Collapse -->
		<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
		<label for="openSidebarMenu" class="sidebarIconToggle">
			<div class="spinner diagonal part-1"></div>
			<div class="spinner horizontal"></div>
			<div class="spinner diagonal part-2"></div>
		</label>
		<!-- Collapse end -->

		<!-- Logo -->
		<div class="header-logo">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(home_url('app/themes/understrap/img/png/logo-domus-dark.png'))?>" alt="Domus, vivez de l'intérieur"></a>
		</div>
		<!-- Logo end -->

		<!-- Limk -->
		<div class="header-link">
			<ul>
				<li><a href="<?php echo esc_url(home_url('/decouvrir-domus/')) ?>">Découvrir Domus</a></li>
				<li><a href="<?php echo esc_url(home_url('/nos-services/')) ?>">Nos services</a></li>
				<li><a href="<?php echo esc_url(home_url('/nos-enseignes/')) ?>">Nos enseignes</a></li>
				<li><a href="<?php echo esc_url(home_url('/nos-evenements/')) ?>">Nos événements</a></li>
				<li><a href="<?php echo esc_url(home_url('/nous-contacter/')) ?>">Nous contacter</a></li>
			</ul>
		</div>
		<!-- Link end -->

		<!-- Menu burger -->
		<div id="sidebarMenu">
			<ul class="sidebarMenuInner">
				<li><a href="<?php echo esc_url(home_url('/decouvrir-domus/')) ?>">Découvrir Domus</a></li>
				<li><a href="<?php echo esc_url(home_url('/nos-services/')) ?>">Nos services</a></li>
				<li><a href="<?php echo esc_url(home_url('/nos-enseignes/')) ?>">Nos enseignes</a></li>
				<li><a href="<?php echo esc_url(home_url('/nos-evenements/')) ?>">Nos événements</a></li>
				<li><a href="<?php echo esc_url(home_url('/nous-contacter/')) ?>">Nous contacter</a></li>
			</ul>
			<ul class="social-media">
				<li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
			</ul>
		</div>
		<!-- Menu burger end -->

		<!-- Search & User -->
		<div class="header-widget">
			<ul>
				<li><a href="#">
					<img src="<?php echo esc_url(home_url('app/themes/understrap/img/svg/search.svg')) ?>" alt="">
				</a></li>
				<li><a href="#">
					<img src="<?php echo esc_url(home_url('app/themes/understrap/img/svg/user.svg')) ?>" alt="">
				</a></li>
			</ul>
		</div>
		<!-- Search & User end -->
	</nav>
	<!-- Navigation end -->