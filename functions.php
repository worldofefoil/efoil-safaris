<?php
/**
 * Theme functions for Efoil Safaris.
 *
 * @package Efoil_Safaris
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WOE_THEME_VERSION', '1.3.5' );

require_once get_template_directory() . '/inc/content-editor.php';

/**
 * Apply one-time content changes that must also affect existing installations.
 */
function woe_apply_content_migrations() {
	$installed_version = (string) get_option( 'woe_theme_data_version', '0.0.0' );

	if ( version_compare( $installed_version, '1.3.4', '<' ) ) {
		$content                 = get_option( 'woe_content', array() );
		$content['general_logo'] = 0;
		update_option( 'woe_content', $content, false );
	}

	if ( WOE_THEME_VERSION !== $installed_version ) {
		update_option( 'woe_theme_data_version', WOE_THEME_VERSION, false );
	}
}
add_action( 'after_setup_theme', 'woe_apply_content_migrations', 20 );

function woe_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	register_nav_menus(
		array(
		'primary' => __( 'Primary navigation', 'efoil-safaris' ),
		)
	);
}
add_action( 'after_setup_theme', 'woe_theme_setup' );

function woe_enqueue_assets() {
	wp_enqueue_style( 'efoil-safaris', get_stylesheet_uri(), array(), WOE_THEME_VERSION );
	wp_enqueue_script(
		'efoil-safaris',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		WOE_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'woe_enqueue_assets' );

function woe_output_meta_tags() {
	$descriptions = array(
		'the-safari'    => 'Seven-night liveaboard watersports safari from Hurghada with remote Red Sea lagoons, yacht accommodation, fresh meals and flexible daily routes.',
		'wingfoil-kite' => 'Wingfoil and kitesurf yacht safari in Egypt for beginners and experienced riders, with coaching, rental options and eFoil as a premium highlight.',
		'yachts-cabins' => 'Explore M/Y Majestic, M/Y Black Panther and private-charter superyacht M/Y Jasmine: cabins, decks, dining and Red Sea watersports logistics.',
		'dates-booking' => 'Available Wingfoil and Kite Yacht Safari dates for 2026 and 2027, prices from EUR 1,650 and direct booking requests.',
		'gallery'       => 'Photos from Wingfoil, Kite and eFoil yacht safaris in Egypt: riding, yachts, cabins, snorkeling, diving and life on board.',
		'faq-contact'   => 'Answers about riding levels, equipment, yacht cabins, food, internet, extra fees and booking a Red Sea watersports safari.',
	);

	$description = 'Wingfoil and kite yacht safaris on Egypt\'s Red Sea: seven nights from Hurghada with remote spots, premium yachts, coaching options and eFoil highlights.';
	$image       = woe_asset_url( 'images/hero-wingfoil.webp' );

	foreach ( $descriptions as $slug => $page_description ) {
		if ( is_page( $slug ) ) {
			$description = $page_description;
			break;
		}
	}

	if ( is_page( 'yachts-cabins' ) ) {
		$image = woe_asset_url( 'images/black-panther.webp' );
	} elseif ( is_page( 'gallery' ) || is_page( 'faq-contact' ) ) {
		$image = woe_asset_url( 'images/impression-social.webp' );
	}

	if ( is_front_page() || is_page( array_keys( $descriptions ) ) ) {
		printf( "\n<meta name=\"description\" content=\"%s\">\n", esc_attr( $description ) );
		printf( '<meta property="og:title" content="%s">' . "\n", esc_attr( wp_get_document_title() ) );
		printf( '<meta property="og:description" content="%s">' . "\n", esc_attr( $description ) );
		printf( '<meta property="og:type" content="website">' . "\n" );
		printf( '<meta property="og:url" content="%s">' . "\n", esc_url( home_url( wp_unslash( $_SERVER['REQUEST_URI'] ?? '/' ) ) ) );
		printf( '<meta property="og:image" content="%s">' . "\n", esc_url( $image ) );
		printf( '<meta name="twitter:card" content="summary_large_image">' . "\n" );
	}

	if ( is_page( array( 'privacy-policy', 'terms-conditions' ) ) ) {
		echo '<meta name="robots" content="noindex,follow">' . "\n";
	}

	if ( is_front_page() ) {
		$schema = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'TouristTrip',
			'name'        => 'Wingfoil & Kite Yacht Safari Egypt',
			'description' => $description,
			'provider'    => array(
				'@type'     => 'Organization',
				'name'      => 'World of eFoil GmbH',
				'email'     => woe_email(),
				'telephone' => woe_phone_link(),
			),
			'touristType' => array( 'Wingfoilers', 'Kitesurfers', 'Beginners', 'Watersports groups', 'Non-riding partners' ),
			'offers'      => array(
				array( '@type' => 'Offer', 'name' => 'M/Y Majestic 2026', 'priceCurrency' => 'EUR', 'price' => '1650' ),
				array( '@type' => 'Offer', 'name' => 'M/Y Black Panther 2027', 'priceCurrency' => 'EUR', 'price' => '1850' ),
			),
		);
		printf( '<script type="application/ld+json">%s</script>' . "\n", wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ) );
	}
}
add_action( 'wp_head', 'woe_output_meta_tags', 2 );

function woe_asset_url( $path ) {
	return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

function woe_activity_defaults() {
	return array(
		array( 'wingfoiling', 'Wingfoiling', 'The main focus: progression sessions, guided rides and open water for every level.', 'Main focus' ),
		array( 'kitesurfing', 'Kitesurfing', 'Remote lagoons, steady wind and plenty of room for coached or independent sessions.', 'Main focus' ),
		array( 'efoiling', 'eFoiling', 'Silent flight, first-ride coaching and premium equipment when you want a different kind of session.', 'Safari highlight' ),
		array( 'wakeboarding', 'Wakeboarding', 'Board time behind the tender when you want an energetic change of pace.', 'On the water' ),
		array( 'diving', 'Diving', 'Explore reefs and Red Sea wildlife between wind sessions. Available by arrangement.', 'Below the surface' ),
		array( 'snorkeling', 'Snorkeling', 'Slip into clear water directly from the yacht or tender and explore the reef.', 'Easy to join' ),
		array( 'banana-boat', 'Banana Boat', 'A fast, uncomplicated group session with plenty of laughter built in.', 'Group fun' ),
		array( 'pump-foiling', 'Pump Foiling', 'Work on take-offs, rhythm and foil control from the dedicated platform.', 'Foil skills' ),
		array( 'dive-scooter', 'Dive Scooter', 'Cover more of the reef and experience the underwater world from a new perspective.', 'Underwater' ),
		array( 'sup', 'Stand-up Paddling', 'Quiet morning exploration when the lagoon is glassy and the yacht is still waking up.', 'Slow water' ),
		array( 'yoga', 'Yoga', 'Reset on deck before breakfast or loosen up after a full day on the water.', 'Recovery' ),
		array( 'island-bbq', 'Island BBQ', 'A relaxed meal ashore with the group when route and conditions allow.', 'Safari life' ),
		array( 'socialising', 'Socialising', 'Share sessions, meals and long evenings with a small watersports crew.', 'Together' ),
		array( 'relaxing', 'Relaxing', 'Find a quiet corner, read, swim or simply watch the Red Sea pass by.', 'No schedule' ),
		array( 'me-time', 'Me Time', 'Join as much or as little as you like. The week leaves space to do nothing at all.', 'Your pace' ),
	);
}

function woe_partner_defaults() {
	return array(
		array( 'aerofoils-audi', 'Aerofoils by Audi', 'https://aerofoils.de/' ),
		array( 'lift-foils', 'Lift Foils', 'https://liftfoils.com/' ),
		array( 'duotone', 'Duotone', 'https://www.duotonesports.com/' ),
		array( 'surfavela', 'Surf a Vela', 'https://www.surfavela.es/' ),
		array( 'ion-club-golf-de-roses', 'ION Club Golf de Roses', 'https://www.ion-club.net/golf-de-roses/' ),
		array( 'egyptian-cruising', 'Egyptian Cruising Company', 'https://www.egyptiancruising.com/' ),
		array( 'sea-rescue-tarifa', 'Sea Rescue Tarifa', 'https://www.searescue.es/tarifa' ),
		array( 'explora-watersports-tarifa', 'Explora Watersports Tarifa', '' ),
		array( 'nido-surf', 'Nido Surf', '' ),
		array( 'surfit-zahara', 'Surfit Zahara', '' ),
		array( 'ammo-marbella', 'Ammo Marbella', '' ),
		array( 'efoil-maroc', 'eFoil Maroc', '' ),
		array( 'adventure-sports-tours', 'Adventure Sports Tours', '' ),
		array( 'kapay', 'Kapay', '' ),
		array( 'kite-dates', 'Kite Dates', '' ),
		array( 'dynamic-windsurfing', 'Dynamic Windsurfing', '' ),
	);
}

function woe_page_url( $slug ) {
	if ( 'home' === $slug ) {
		return home_url( '/' );
	}
	$page = get_page_by_path( $slug );
	return $page ? get_permalink( $page ) : home_url( '/' . trim( $slug, '/' ) . '/' );
}

function woe_content_tab_for_page() {
	if ( is_front_page() ) {
		return 'home';
	}
	$tabs = array(
		'the-safari'    => 'safari',
		'wingfoil-kite' => 'sports',
		'yachts-cabins' => 'yachts',
		'dates-booking' => 'dates',
		'gallery'       => 'gallery',
		'faq-contact'   => 'faq',
	);
	foreach ( $tabs as $slug => $tab ) {
		if ( is_page( $slug ) ) {
			return $tab;
		}
	}
	return '';
}

function woe_replace_admin_bar_edit_link( $admin_bar ) {
	if ( is_admin() || ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}
	$tab = woe_content_tab_for_page();
	if ( ! $tab || ! $admin_bar->get_node( 'edit' ) ) {
		return;
	}
	$admin_bar->add_node(
		array(
			'id'    => 'edit',
			'title' => 'Inhalte bearbeiten',
			'href'  => admin_url( 'admin.php?page=woe-content&tab=' . $tab ),
		)
	);
}
add_action( 'admin_bar_menu', 'woe_replace_admin_bar_edit_link', 100 );

function woe_phone_display() {
	return woe_content_value( 'general_phone_display' );
}

function woe_phone_link() {
	return preg_replace( '/[^0-9+]/', '', woe_content_value( 'general_phone_link' ) );
}

function woe_email() {
	return sanitize_email( woe_content_value( 'general_email' ) );
}

function woe_booking_recipients() {
	$raw        = (string) woe_content_value( 'general_booking_recipients' );
	$candidates = preg_split( '/[\s,;]+/', $raw );
	$recipients = array();

	foreach ( $candidates as $candidate ) {
		$email = sanitize_email( $candidate );
		if ( $email && is_email( $email ) ) {
			$recipients[] = $email;
		}
	}

	$recipients = array_values( array_unique( $recipients ) );
	return $recipients ? array_slice( $recipients, 0, 5 ) : array( woe_email() );
}

function woe_whatsapp_url( $message = '' ) {
	$number = preg_replace( '/[^0-9]/', '', woe_content_value( 'general_whatsapp' ) );
	$text   = $message ? $message : 'Hi World of eFoil, I am interested in the Wingfoil & Kite Yacht Safari.';
	return 'https://wa.me/' . $number . '?text=' . rawurlencode( $text );
}

function woe_primary_menu_fallback() {
	$items = array(
		'the-safari'      => 'The Safari',
		'wingfoil-kite'   => 'Wing & Kite',
		'yachts-cabins'   => 'Yachts',
		'dates-booking'   => 'Dates',
		'gallery'         => 'Gallery',
		'faq-contact'     => 'FAQ',
	);

	echo '<ul class="site-nav-list">';
	foreach ( $items as $slug => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( woe_page_url( $slug ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

function woe_customize_register( $customizer ) {
	$customizer->add_section(
		'woe_contact',
		array(
			'title'       => __( 'Safari contact details', 'efoil-safaris' ),
			'description' => __( 'These details are used in the header, footer, booking form and WhatsApp buttons.', 'efoil-safaris' ),
			'priority'    => 30,
		)
	);

	$settings = array(
		'woe_phone_display' => array( 'Phone shown on site', '+49 (0)160 5086 800', 'sanitize_text_field' ),
		'woe_phone_link'    => array( 'Phone for calls', '+491605086800', 'sanitize_text_field' ),
		'woe_whatsapp'      => array( 'WhatsApp number', '491605086800', 'sanitize_text_field' ),
		'woe_email'         => array( 'Booking email', 'info@worldofefoil.com', 'sanitize_email' ),
	);

	foreach ( $settings as $id => $setting ) {
		$customizer->add_setting(
			$id,
			array(
				'default'           => $setting[1],
				'sanitize_callback' => $setting[2],
			)
		);
		$customizer->add_control(
			$id,
			array(
				'label'   => __( $setting[0], 'efoil-safaris' ),
				'section' => 'woe_contact',
				'type'    => 'text',
			)
		);
	}
}
function woe_create_starter_pages() {
	$pages = array(
		'home'           => 'Home',
		'the-safari'     => 'The Safari',
		'wingfoil-kite'  => 'Wingfoil & Kite',
		'yachts-cabins'  => 'Yachts & Cabins',
		'dates-booking'  => 'Dates & Booking',
		'gallery'        => 'Gallery',
		'faq-contact'    => 'FAQ & Contact',
		'privacy-policy' => 'Privacy Policy',
		'terms-conditions' => 'Terms & Conditions',
	);

	$page_ids = array();

	foreach ( $pages as $slug => $title ) {
		$page = get_page_by_path( $slug );
		if ( $page ) {
			$page_ids[ $slug ] = $page->ID;
			continue;
		}

		$page_ids[ $slug ] = wp_insert_post(
			array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
	}

	if ( ! empty( $page_ids['home'] ) && ! is_wp_error( $page_ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', (int) $page_ids['home'] );
	}

	$locations = get_theme_mod( 'nav_menu_locations', array() );
	if ( empty( $locations['primary'] ) ) {
		$menu_name = 'Efoil Safaris Main Menu';
		$menu      = wp_get_nav_menu_object( $menu_name );
		$menu_id   = $menu ? $menu->term_id : wp_create_nav_menu( $menu_name );

		if ( ! is_wp_error( $menu_id ) ) {
			$menu_slugs = array( 'the-safari', 'wingfoil-kite', 'yachts-cabins', 'dates-booking', 'gallery', 'faq-contact' );
			$existing   = wp_get_nav_menu_items( $menu_id );
			if ( empty( $existing ) ) {
				foreach ( $menu_slugs as $slug ) {
					if ( ! empty( $page_ids[ $slug ] ) && ! is_wp_error( $page_ids[ $slug ] ) ) {
						wp_update_nav_menu_item(
							$menu_id,
							0,
							array(
								'menu-item-object-id' => (int) $page_ids[ $slug ],
								'menu-item-object'    => 'page',
								'menu-item-type'      => 'post_type',
								'menu-item-status'    => 'publish',
							)
						);
					}
				}
			}
			$locations['primary'] = $menu_id;
			set_theme_mod( 'nav_menu_locations', $locations );
		}
	}

	if ( ! empty( $page_ids['privacy-policy'] ) && ! is_wp_error( $page_ids['privacy-policy'] ) ) {
		update_option( 'wp_page_for_privacy_policy', (int) $page_ids['privacy-policy'] );
	}
}
add_action( 'after_switch_theme', 'woe_create_starter_pages' );

function woe_handle_booking_request() {
	$redirect = woe_page_url( 'dates-booking' ) . '#booking';

	if (
		empty( $_POST['woe_booking_nonce'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['woe_booking_nonce'] ) ), 'woe_booking_request' )
	) {
		wp_safe_redirect( add_query_arg( 'booking', 'error', $redirect ) );
		exit;
	}

	if ( ! empty( $_POST['company'] ) || empty( $_POST['privacy'] ) ) {
		wp_safe_redirect( add_query_arg( 'booking', 'error', $redirect ) );
		exit;
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$contact = isset( $_POST['contact'] ) ? sanitize_text_field( wp_unslash( $_POST['contact'] ) ) : '';
	$date    = isset( $_POST['date'] ) ? sanitize_text_field( wp_unslash( $_POST['date'] ) ) : '';
	$guests  = isset( $_POST['guests'] ) ? sanitize_text_field( wp_unslash( $_POST['guests'] ) ) : '';
	$sports  = isset( $_POST['sports'] ) ? sanitize_text_field( wp_unslash( $_POST['sports'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( empty( $name ) || empty( $contact ) ) {
		wp_safe_redirect( add_query_arg( 'booking', 'error', $redirect ) );
		exit;
	}

	$subject = sprintf( 'Safari request from %s', $name );
	$body    = "New website request\n\n";
	$body   .= "Name: {$name}\n";
	$body   .= "Email or WhatsApp: {$contact}\n";
	$body   .= "Preferred date: {$date}\n";
	$body   .= "Guests: {$guests}\n";
	$body   .= "Main interest: {$sports}\n\n";
	$body   .= "Message:\n{$message}\n";

	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( is_email( $contact ) ) {
		$headers[] = 'Reply-To: ' . $name . ' <' . sanitize_email( $contact ) . '>';
	}

	$sent = wp_mail( woe_booking_recipients(), $subject, $body, $headers );
	wp_safe_redirect( add_query_arg( 'booking', $sent ? 'sent' : 'error', $redirect ) );
	exit;
}
add_action( 'admin_post_nopriv_woe_booking', 'woe_handle_booking_request' );
add_action( 'admin_post_woe_booking', 'woe_handle_booking_request' );

function woe_render_legal_source( $filename ) {
	$path = get_template_directory() . '/legal/' . basename( $filename );
	if ( ! is_readable( $path ) ) {
		echo '<p>The legal text is currently unavailable. Please contact ' . esc_html( woe_email() ) . '.</p>';
		return;
	}

	$html = file_get_contents( $path ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
	if ( preg_match( '/<div class="legal-content">(.*?)<\/div>\s*<\/main>/s', $html, $matches ) ) {
		echo wp_kses_post( $matches[1] );
		return;
	}

	echo '<p>The legal text is currently unavailable. Please contact ' . esc_html( woe_email() ) . '.</p>';
}
