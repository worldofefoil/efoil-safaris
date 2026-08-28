<?php
/**
 * Front page.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content">
	<section class="hero" aria-label="Wingfoil and kite yacht safari in Egypt">
		<img class="hero-media" src="<?php echo esc_url( woe_content_media_url( 'home_hero_image' ) ); ?>" alt="Wingfoiler with a wing in clear Red Sea water" fetchpriority="high">
		<div class="hero-shade" aria-hidden="true"></div>
		<div class="hero-content">
			<p class="hero-kicker"><?php echo esc_html( woe_content_value( 'home_hero_kicker' ) ); ?></p>
			<h1><?php echo esc_html( woe_content_value( 'home_hero_title' ) ); ?></h1>
			<p class="hero-lead"><?php echo esc_html( woe_content_value( 'home_hero_lead' ) ); ?></p>
			<div class="button-row">
				<a class="button button-primary" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) ); ?>">See dates & prices</a>
				<a class="button button-outline" href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">Ask on WhatsApp</a>
			</div>
			<div class="hero-facts" aria-label="Safari highlights">
				<div><strong><?php echo esc_html( woe_content_value( 'dates_maj_price' ) ); ?></strong><span>7-night yacht safari</span></div>
				<div><strong>All levels</strong><span>Coaching and rental options</span></div>
				<div><strong>Hurghada</strong><span>Airport transfer included</span></div>
			</div>
		</div>
	</section>

	<section class="update-test-circle-section" aria-label="Website update test">
		<div class="update-test-circle" aria-hidden="true"></div>
	</section>

	<section class="fact-strip" aria-label="Quick facts">
		<div><strong>Wingfoil first</strong><span>Flat water and open-sea sessions</span></div>
		<div><strong>Kite when it blows</strong><span>Remote lagoons and sunset rides</span></div>
		<div><strong>eFoil highlight</strong><span>Silent flight and premium boards</span></div>
		<div><strong>Yacht basecamp</strong><span>Cabin, chef, crew and tenders</span></div>
	</section>

	<section class="duotone-standard" aria-label="Duotone equipment standard">
		<div class="duotone-standard-inner">
			<div class="duotone-standard-mark"><img src="<?php echo esc_url( woe_content_media_url( 'home_duotone_logo' ) ); ?>" alt="Equipped with Duotone" loading="lazy"></div>
			<div class="duotone-standard-copy">
				<p class="eyebrow">Our wingfoil & kite equipment standard</p>
				<h2><?php echo esc_html( woe_content_value( 'home_duotone_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'home_duotone_text' ) ); ?></p>
				<span><?php echo esc_html( woe_content_value( 'home_duotone_note' ) ); ?></span>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="editorial-split">
			<div class="copy">
				<p class="eyebrow"><?php echo esc_html( woe_content_value( 'home_intro_eyebrow' ) ); ?></p>
				<h2><?php echo esc_html( woe_content_value( 'home_intro_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'home_intro_p1' ) ); ?></p>
				<p><?php echo esc_html( woe_content_value( 'home_intro_p2' ) ); ?></p>
				<p class="quote-line"><?php echo esc_html( woe_content_value( 'home_intro_quote' ) ); ?></p>
			</div>
			<img src="<?php echo esc_url( woe_content_media_url( 'home_intro_image' ) ); ?>" alt="Safari yacht anchored in a quiet Red Sea bay" loading="lazy">
		</div>
	</section>

	<section class="sport-list" aria-label="Main sports">
		<article class="sport-band">
			<img src="<?php echo esc_url( woe_content_media_url( 'home_wing_image' ) ); ?>" alt="Wingfoiler riding above turquoise water" loading="lazy">
			<div class="sport-band-content">
				<span class="sport-number">01 | Main focus</span>
				<h2><?php echo esc_html( woe_content_value( 'home_wing_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'home_wing_text' ) ); ?></p>
				<p class="sport-equipment-note">Premium Duotone wings, boards and foils</p>
				<a class="text-link" href="<?php echo esc_url( woe_page_url( 'wingfoil-kite' ) . '#wingfoil' ); ?>">Explore wingfoil</a>
			</div>
		</article>
		<article class="sport-band">
			<img src="<?php echo esc_url( woe_content_media_url( 'home_kite_image' ) ); ?>" alt="Kitesurfer riding into a Red Sea sunset" loading="lazy">
			<div class="sport-band-content">
				<span class="sport-number">02 | Main focus</span>
				<h2><?php echo esc_html( woe_content_value( 'home_kite_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'home_kite_text' ) ); ?></p>
				<p class="sport-equipment-note">Premium Duotone kites and boards</p>
				<a class="text-link" href="<?php echo esc_url( woe_page_url( 'wingfoil-kite' ) . '#kite' ); ?>">Explore kite sessions</a>
			</div>
		</article>
	</section>

	<section class="video-section" aria-label="eFoil video highlight">
		<div class="video-wrap">
			<video controls playsinline preload="metadata" poster="<?php echo esc_url( woe_content_media_url( 'home_efoil_poster' ) ); ?>">
				<source src="<?php echo esc_url( woe_content_media_url( 'home_efoil_video' ) ); ?>" type="video/mp4">
				Your browser does not support the video element.
			</video>
		</div>
		<div class="video-copy">
			<p class="eyebrow">The silent bonus</p>
			<h2><?php echo esc_html( woe_content_value( 'home_efoil_title' ) ); ?></h2>
			<p><?php echo esc_html( woe_content_value( 'home_efoil_text' ) ); ?></p>
			<div class="battery-inline"><strong><?php echo esc_html( woe_content_value( 'activities_battery_title' ) ); ?></strong><span><?php echo esc_html( woe_content_value( 'activities_battery_text' ) ); ?></span></div>
			<a class="text-link" href="<?php echo esc_url( woe_page_url( 'wingfoil-kite' ) . '#efoil' ); ?>">See the eFoil options</a>
		</div>
	</section>

	<?php get_template_part( 'template-parts/activities' ); ?>

	<section class="section">
		<div class="section-head">
			<p class="eyebrow">The rhythm of the week</p>
			<h2>Conditions decide. The crew makes it easy.</h2>
			<p>The exact route remains flexible. That is the point of a safari: use the yacht and tenders to find the best water for the group.</p>
		</div>
		<div class="process-grid">
			<article><span>01 | Arrive</span><h3>Meet in Hurghada</h3><p>Airport pickup, marina transfer, cabin check-in and dinner on board.</p></article>
			<article><span>02 | Set up</span><h3>Know the crew</h3><p>Safety briefing, equipment check and clear groups by experience.</p></article>
			<article><span>03 | Ride</span><h3>Follow the wind</h3><p>Wingfoil, kite, learn, explore or simply take a slow day on deck.</p></article>
			<article><span>04 | Reset</span><h3>Eat and recover</h3><p>Fresh buffet meals, sunset sessions, snorkeling and yacht life.</p></article>
		</div>
		<p><a class="text-link" href="<?php echo esc_url( woe_page_url( 'the-safari' ) ); ?>">See the full safari</a></p>
	</section>

	<section class="why-section">
		<div class="why-inner">
			<div class="why-heading"><p class="eyebrow">Why book with us</p><h2><?php echo esc_html( woe_content_value( 'home_why_title' ) ); ?></h2><p><?php echo esc_html( woe_content_value( 'home_why_text' ) ); ?></p></div>
			<div class="why-grid">
				<?php for ( $reason = 1; $reason <= 6; $reason++ ) : ?>
					<article><span><?php echo esc_html( str_pad( (string) $reason, 2, '0', STR_PAD_LEFT ) ); ?></span><h3><?php echo esc_html( woe_content_value( 'home_why_' . $reason . '_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'home_why_' . $reason . '_text' ) ); ?></p></article>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="yacht-feature">
		<img src="<?php echo esc_url( woe_content_media_url( 'home_yacht_image' ) ); ?>" alt="Premium safari yacht" loading="lazy">
		<div class="yacht-feature-content">
			<p class="eyebrow">Your moving basecamp</p>
			<h2><?php echo esc_html( woe_content_value( 'home_yacht_title' ) ); ?></h2>
			<p><?php echo esc_html( woe_content_value( 'home_yacht_text' ) ); ?></p>
			<ul class="spec-line">
				<li>Private cabins</li><li>Chef on board</li><li>Rescue tenders</li><li>Jacuzzi & lounges</li>
			</ul>
			<a class="button button-primary" href="<?php echo esc_url( woe_page_url( 'yachts-cabins' ) ); ?>">View yachts & cabins</a>
		</div>
	</section>

	<section class="section section-paper">
		<div class="section-inner">
			<div class="section-head">
				<p class="eyebrow">Next departures</p>
				<h2>Choose your week.</h2>
				<p>Prices are per person and start from the listed amount. Cabins are limited and availability is confirmed personally.</p>
			</div>
			<div class="date-grid">
				<article class="trip-panel">
					<img src="<?php echo esc_url( woe_content_media_url( 'dates_maj_image' ) ); ?>" alt="M/Y Majestic on the Red Sea" loading="lazy">
					<div class="trip-content">
						<div class="trip-meta"><span><?php echo esc_html( woe_content_value( 'dates_maj_label' ) ); ?></span><strong class="trip-price"><?php echo esc_html( woe_content_value( 'dates_maj_price' ) ); ?></strong></div>
						<h3><?php echo esc_html( woe_content_value( 'dates_maj_title' ) ); ?></h3>
						<p><?php echo esc_html( woe_content_value( 'dates_maj_text' ) ); ?></p>
						<div class="date-list">
							<a href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>" data-date="<?php echo esc_attr( woe_content_value( 'dates_maj_date1' ) ); ?>"><?php echo esc_html( woe_content_value( 'dates_maj_date1' ) ); ?></a>
							<a href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>" data-date="<?php echo esc_attr( woe_content_value( 'dates_maj_date2' ) ); ?>"><?php echo esc_html( woe_content_value( 'dates_maj_date2' ) ); ?></a>
						</div>
					</div>
				</article>
				<article class="trip-panel">
					<img src="<?php echo esc_url( woe_content_media_url( 'dates_bp_image' ) ); ?>" alt="M/Y Black Panther close view" loading="lazy">
					<div class="trip-content">
						<div class="trip-meta"><span><?php echo esc_html( woe_content_value( 'dates_bp_label' ) ); ?></span><strong class="trip-price"><?php echo esc_html( woe_content_value( 'dates_bp_price' ) ); ?></strong></div>
						<h3><?php echo esc_html( woe_content_value( 'dates_bp_title' ) ); ?></h3>
						<p><?php echo esc_html( woe_content_value( 'dates_bp_text' ) ); ?></p>
						<div class="date-list">
							<a href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>" data-date="<?php echo esc_attr( woe_content_value( 'dates_bp_date1' ) ); ?>"><?php echo esc_html( woe_content_value( 'dates_bp_date1' ) ); ?></a>
							<a href="<?php echo esc_url( woe_page_url( 'dates-booking' ) ); ?>">See all four dates</a>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="section-head">
			<p class="eyebrow">Real safari moments</p>
			<h2>Water days. Yacht nights.</h2>
		</div>
		<div class="mosaic">
			<figure data-lightbox-item tabindex="0"><img src="<?php echo esc_url( woe_content_media_url( 'gallery_image_19' ) ); ?>" alt="<?php echo esc_attr( woe_content_value( 'gallery_caption_19' ) ); ?>" loading="lazy"><figcaption><?php echo esc_html( woe_content_value( 'gallery_caption_19' ) ); ?></figcaption></figure>
			<figure data-lightbox-item tabindex="0"><img src="<?php echo esc_url( woe_content_media_url( 'gallery_image_33' ) ); ?>" alt="<?php echo esc_attr( woe_content_value( 'gallery_caption_33' ) ); ?>" loading="lazy"><figcaption><?php echo esc_html( woe_content_value( 'gallery_caption_33' ) ); ?></figcaption></figure>
			<figure data-lightbox-item tabindex="0"><img src="<?php echo esc_url( woe_content_media_url( 'gallery_image_42' ) ); ?>" alt="<?php echo esc_attr( woe_content_value( 'gallery_caption_42' ) ); ?>" loading="lazy"><figcaption><?php echo esc_html( woe_content_value( 'gallery_caption_42' ) ); ?></figcaption></figure>
			<figure class="mosaic-wide" data-lightbox-item tabindex="0"><img src="<?php echo esc_url( woe_content_media_url( 'gallery_image_58' ) ); ?>" alt="<?php echo esc_attr( woe_content_value( 'gallery_caption_58' ) ); ?>" loading="lazy"><figcaption><?php echo esc_html( woe_content_value( 'gallery_caption_58' ) ); ?></figcaption></figure>
		</div>
		<p><a class="text-link" href="<?php echo esc_url( woe_page_url( 'gallery' ) ); ?>">Open the full gallery</a></p>
	</section>

	<?php get_template_part( 'template-parts/partners' ); ?>

	<section class="cta-band">
		<div class="cta-band-inner">
			<div><p class="eyebrow">Limited cabins</p><h2><?php echo esc_html( woe_content_value( 'home_cta_title' ) ); ?></h2><p><?php echo esc_html( woe_content_value( 'home_cta_text' ) ); ?></p></div>
			<div class="button-row"><a class="button button-dark" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>">Request availability</a><a class="button button-outline" href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">WhatsApp</a></div>
		</div>
	</section>
</main>
<?php
get_footer();
