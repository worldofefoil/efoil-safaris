<?php
/**
 * Site header.
 *
 * @package Efoil_Safaris
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#071d25">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'efoil-safaris' ); ?></a>
<header class="site-header" data-site-header>
	<div class="site-header-inner">
		<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Yacht Safaris home">
			<?php $header_logo = woe_content_media_url( 'general_logo' ); ?>
			<?php if ( $header_logo ) : ?>
				<img class="site-brand-logo" src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( woe_content_value( 'general_brand' ) ); ?>">
			<?php else : ?>
				<span class="brand-signal" aria-hidden="true"><i></i><i></i></span>
				<span class="brand-copy">
					<strong><?php echo esc_html( woe_content_value( 'general_brand' ) ); ?></strong>
					<small><?php echo esc_html( woe_content_value( 'general_subtitle' ) ); ?></small>
				</span>
			<?php endif; ?>
		</a>

		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
			<span class="menu-icon" aria-hidden="true"><i></i><i></i><i></i></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Open menu', 'efoil-safaris' ); ?></span>
		</button>

		<nav class="site-navigation" id="site-navigation" aria-label="Primary navigation">
			<a class="nav-home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>>Home</a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'site-nav-list',
					'fallback_cb'    => 'woe_primary_menu_fallback',
				)
			);
			?>
			<a class="header-book" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>">REQUEST A CABIN</a>
		</nav>
	</div>
</header>
