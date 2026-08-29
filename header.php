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
			<?php
			$content_values   = get_option( 'woe_content', array() );
			$header_logo_id   = is_array( $content_values ) && isset( $content_values['general_logo'] ) ? absint( $content_values['general_logo'] ) : 0;
			$header_logo      = '';
			$header_logo_file = $header_logo_id ? get_attached_file( $header_logo_id ) : '';

			if ( $header_logo_file && file_exists( $header_logo_file ) ) {
				$header_logo = wp_get_attachment_image_url( $header_logo_id, 'full' );
			}

			if ( ! $header_logo ) {
				$header_logo = add_query_arg( 'ver', WOE_THEME_VERSION, woe_asset_url( 'images/yacht-safaris-logo.webp' ) );
			}
			?>
			<img class="site-brand-logo" src="<?php echo esc_url( $header_logo ); ?>" alt="Yacht-Safaris">
		</a>

		<?php if ( is_front_page() ) : ?>
			<div class="header-social-links" aria-label="Social media and direct contact">
				<a class="header-social-link header-instagram" href="<?php echo esc_url( woe_instagram_url() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram" title="Instagram">
					<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle class="icon-fill" cx="17.5" cy="6.5" r="1.2"></circle></svg>
				</a>
				<a class="header-social-link header-whatsapp" href="<?php echo esc_url( woe_whatsapp_url( 'Hi World of eFoil, I am interested in the Yacht Safari.' ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" title="WhatsApp">
					<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 11.7a8.4 8.4 0 0 1-12.4 7.4L3.5 20.5l1.4-4.4a8.4 8.4 0 1 1 15.6-4.4Z"></path><path d="M8.1 7.7c.2-.4.4-.4.7-.4h.5c.2 0 .4.1.5.4l.7 1.7c.1.3 0 .5-.1.7l-.6.7c-.2.2-.1.4 0 .6.6 1.1 1.5 2 2.6 2.6.2.1.4.2.6 0l.8-1c.2-.2.4-.3.7-.2l1.8.9c.3.1.4.3.4.5 0 .3-.2 1.3-.8 1.8-.5.5-1.3.8-2.1.7-1.2-.2-2.7-.7-4.5-2.3-1.5-1.3-2.5-3-2.8-4.3-.3-1.1.1-1.9.5-2.4Z"></path></svg>
				</a>
			</div>
		<?php endif; ?>

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
