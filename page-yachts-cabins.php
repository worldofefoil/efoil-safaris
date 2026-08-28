<?php
/**
 * Yachts and cabins page.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content">
	<section class="page-hero">
		<img src="<?php echo esc_url( woe_content_media_url( 'yachts_hero_image' ) ); ?>" alt="M/Y Black Panther on open water" fetchpriority="high">
		<div class="page-hero-content">
			<p class="eyebrow">Yachts & cabins</p>
			<h1><?php echo esc_html( woe_content_value( 'yachts_hero_title' ) ); ?></h1>
			<p><?php echo esc_html( woe_content_value( 'yachts_hero_text' ) ); ?></p>
		</div>
	</section>
	<?php get_template_part( 'template-parts/page-jump' ); ?>

	<section class="section">
		<div class="editorial-split">
			<div class="copy">
				<p class="eyebrow">M/Y Black Panther | 2027</p>
				<h2><?php echo esc_html( woe_content_value( 'yachts_bp_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'yachts_bp_text' ) ); ?></p>
				<div class="feature-stat-grid">
					<div><strong>5 decks</strong><span>Space for riding, dining and recovery</span></div>
					<div><strong>15 rooms</strong><span>Air-conditioned cabins with bathrooms</span></div>
					<div><strong>2 tenders</strong><span>Transfers, launch support and rescue</span></div>
					<div><strong>Spa & jacuzzi</strong><span>Slow evenings after long sessions</span></div>
				</div>
			</div>
			<img src="<?php echo esc_url( woe_content_media_url( 'yachts_bp_image' ) ); ?>" alt="Close view of Black Panther yacht" loading="lazy">
		</div>
	</section>

	<section class="section section-paper section-tight">
		<div class="section-inner">
			<div class="section-head"><p class="eyebrow">Black Panther gallery</p><h2>Cabins, decks and common spaces.</h2></div>
			<div class="yacht-grid">
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_bp_gallery1' ) ); ?>" alt="Black Panther suite" loading="lazy"><div class="yacht-grid-content"><h3>Private cabins</h3><p>Calm, air-conditioned rooms made for real rest.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_bp_gallery2' ) ); ?>" alt="Luxury yacht lounge" loading="lazy"><div class="yacht-grid-content"><h3>Indoor lounges</h3><p>Comfortable shared space between sessions.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_bp_gallery3' ) ); ?>" alt="Jacuzzi on the yacht deck" loading="lazy"><div class="yacht-grid-content"><h3>Jacuzzi deck</h3><p>Warm water, open sky and no road back to the hotel.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_bp_gallery4' ) ); ?>" alt="Yacht dining room" loading="lazy"><div class="yacht-grid-content"><h3>Dining</h3><p>Fresh buffet meals prepared by the onboard chef.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_bp_gallery5' ) ); ?>" alt="Cabin with private bathroom" loading="lazy"><div class="yacht-grid-content"><h3>Private bathrooms</h3><p>Practical comfort for a seven-night liveaboard.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_bp_gallery6' ) ); ?>" alt="Open deck lounge" loading="lazy"><div class="yacht-grid-content"><h3>Open decks</h3><p>Sun, shade and sea views in every direction.</p></div></article>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="editorial-split reverse">
			<div class="copy">
				<p class="eyebrow">M/Y Majestic | 2026</p>
				<h2><?php echo esc_html( woe_content_value( 'yachts_maj_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'yachts_maj_text' ) ); ?></p>
				<div class="feature-stat-grid">
					<div><strong>16 cabins</strong><span>Comfortable rooms with bathrooms</span></div>
					<div><strong>12-14 crew</strong><span>Marine, kitchen and service support</span></div>
					<div><strong>2 lounges</strong><span>Air-conditioned shared spaces</span></div>
					<div><strong>2023 yacht</strong><span>Modern liveaboard setup</span></div>
				</div>
			</div>
			<img src="<?php echo esc_url( woe_content_media_url( 'yachts_maj_image' ) ); ?>" alt="M/Y Majestic with its tenders" loading="lazy">
		</div>
	</section>

	<section class="section section-paper section-tight">
		<div class="section-inner">
			<div class="section-head"><p class="eyebrow">Majestic gallery</p><h2>A comfortable week at sea.</h2></div>
			<div class="yacht-grid">
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_maj_gallery1' ) ); ?>" alt="Majestic interior salon" loading="lazy"><div class="yacht-grid-content"><h3>Salon</h3><p>Air-conditioned indoor space for meals and downtime.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_maj_gallery2' ) ); ?>" alt="Majestic guest cabin" loading="lazy"><div class="yacht-grid-content"><h3>Guest cabins</h3><p>Private bathroom, air conditioning and practical storage.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_maj_gallery3' ) ); ?>" alt="Yacht in a quiet Red Sea bay" loading="lazy"><div class="yacht-grid-content"><h3>Moving basecamp</h3><p>The view changes as the yacht follows the best conditions.</p></div></article>
			</div>
		</div>
	</section>

	<section class="private-charter-hero">
		<img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_image' ) ); ?>" alt="M/Y Jasmine superyacht at sunset" loading="lazy">
		<div class="private-charter-shade" aria-hidden="true"></div>
		<div class="private-charter-content">
			<p class="eyebrow">M/Y Jasmine | Private charter</p>
			<h2><?php echo esc_html( woe_content_value( 'yachts_jasmine_title' ) ); ?></h2>
			<p><?php echo esc_html( woe_content_value( 'yachts_jasmine_text' ) ); ?></p>
			<div class="private-charter-note"><strong><?php echo esc_html( woe_content_value( 'yachts_jasmine_private_title' ) ); ?></strong><span><?php echo esc_html( woe_content_value( 'yachts_jasmine_private_text' ) ); ?></span></div>
			<ul class="spec-line">
				<li>56 metres</li><li>13 staterooms</li><li>Up to 26 guests</li><li>5 decks</li><li>Full private charter</li>
			</ul>
			<div class="button-row"><a class="button button-primary" href="<?php echo esc_url( woe_whatsapp_url( 'Hi World of eFoil, I would like to ask about a private M/Y Jasmine safari.' ) ); ?>" target="_blank" rel="noopener">Plan a private safari</a><a class="button button-outline" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>">Send an enquiry</a></div>
		</div>
	</section>

	<section class="section section-paper section-tight">
		<div class="section-inner">
			<div class="section-head"><p class="eyebrow">M/Y Jasmine gallery</p><h2>Superyacht space, safari freedom.</h2><p>Private staterooms, generous interiors and open decks give a private group room to ride, recover and spend the week together.</p></div>
			<div class="yacht-grid jasmine-yacht-grid">
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_gallery1' ) ); ?>" alt="M/Y Jasmine salon" loading="lazy"><div class="yacht-grid-content"><h3>Four salons</h3><p>Different spaces for meals, briefings and quiet time.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_gallery2' ) ); ?>" alt="M/Y Jasmine restaurant" loading="lazy"><div class="yacht-grid-content"><h3>Restaurant</h3><p>Full-service dining for the group between sessions.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_gallery3' ) ); ?>" alt="M/Y Jasmine twin stateroom" loading="lazy"><div class="yacht-grid-content"><h3>Spacious staterooms</h3><p>En-suite rooms with balconies and flexible bed setups.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_gallery4' ) ); ?>" alt="M/Y Jasmine suite" loading="lazy"><div class="yacht-grid-content"><h3>Private suites</h3><p>More room and privacy for a week at sea.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_gallery5' ) ); ?>" alt="M/Y Jasmine private bathroom" loading="lazy"><div class="yacht-grid-content"><h3>En-suite bathrooms</h3><p>Modern comfort in every guest stateroom.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_gallery6' ) ); ?>" alt="M/Y Jasmine sun deck" loading="lazy"><div class="yacht-grid-content"><h3>Open sun decks</h3><p>Space for recovery, yoga and long Red Sea evenings.</p></div></article>
				<article><img src="<?php echo esc_url( woe_content_media_url( 'yachts_jasmine_gallery7' ) ); ?>" alt="Heart-shaped pool on M/Y Jasmine" loading="lazy"><div class="yacht-grid-content"><h3>Pool & beach club</h3><p>A private place to cool down after a full riding day.</p></div></article>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="section-inner">
			<div class="section-head"><p class="eyebrow">Life on board</p><h2>The essentials are handled.</h2><p>Wake up, check the water, ride, eat and recover. The crew takes care of the yacht around you.</p></div>
			<div class="included-grid">
				<div><h2>Cabin & service</h2><ul class="clean-list"><li>Seven-night accommodation</li><li>Air-conditioned cabin</li><li>Private bathroom</li><li>Daily cabin cleaning</li><li>Towels and shared deck areas</li></ul></div>
				<div><h2>Food & logistics</h2><ul class="clean-list"><li>Fresh buffet meals</li><li>Soft drinks, coffee, snacks and fruit</li><li>Tender transfers to riding zones</li><li>Rescue support</li><li>Airport to marina transfer</li></ul></div>
			</div>
		</div>
	</section>

	<section class="cta-band">
		<div class="cta-band-inner">
			<div><p class="eyebrow">Cabin questions</p><h2>Ask about rooms and single use.</h2><p>Availability varies by yacht and week. The team confirms the exact cabin options personally.</p></div>
			<div class="button-row"><a class="button button-dark" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>">Request a cabin</a><a class="button button-outline" href="<?php echo esc_url( woe_whatsapp_url( 'Hi World of eFoil, I would like to ask about yacht cabin options.' ) ); ?>" target="_blank" rel="noopener">WhatsApp</a></div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
