<?php
/**
 * Wingfoil and kite page.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content">
	<section class="page-hero">
		<img src="<?php echo esc_url( woe_content_media_url( 'sports_hero_image' ) ); ?>" alt="Wingfoil rider and board in clear Red Sea water" fetchpriority="high">
		<div class="page-hero-content">
			<p class="eyebrow">Wingfoil & kitesurfing</p>
			<h1><?php echo esc_html( woe_content_value( 'sports_hero_title' ) ); ?></h1>
			<p><?php echo esc_html( woe_content_value( 'sports_hero_text' ) ); ?></p>
		</div>
	</section>
	<?php get_template_part( 'template-parts/page-jump' ); ?>

	<section class="duotone-standard duotone-standard-compact" aria-label="Duotone equipment standard">
		<div class="duotone-standard-inner">
			<div class="duotone-standard-mark"><img src="<?php echo esc_url( woe_content_media_url( 'home_duotone_logo' ) ); ?>" alt="Equipped with Duotone" loading="lazy"></div>
			<div class="duotone-standard-copy">
				<p class="eyebrow">Premium setup on board</p>
				<h2><?php echo esc_html( woe_content_value( 'home_duotone_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'home_duotone_text' ) ); ?></p>
				<span><?php echo esc_html( woe_content_value( 'home_duotone_note' ) ); ?></span>
			</div>
		</div>
	</section>

	<section class="section" id="wingfoil">
		<div class="editorial-split">
			<div class="copy">
				<p class="eyebrow">Main focus 01</p>
				<h2><?php echo esc_html( woe_content_value( 'sports_wing_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'sports_wing_p1' ) ); ?></p>
				<p><?php echo esc_html( woe_content_value( 'sports_wing_p2' ) ); ?></p>
				<div class="feature-stat-grid">
					<div><strong>Beginner</strong><span>Wing control and first board rides</span></div>
					<div><strong>Foiling</strong><span>Lift, height control and longer flight</span></div>
					<div><strong>Independent</strong><span>Transitions and guided riding</span></div>
					<div><strong>Duotone range</strong><span>Premium options for different levels</span></div>
				</div>
			</div>
			<img src="<?php echo esc_url( woe_content_media_url( 'sports_wing_image' ) ); ?>" alt="Wingfoiler in stable flight" loading="lazy">
		</div>
	</section>

	<section class="section section-paper">
		<div class="section-inner">
			<div class="section-head">
				<p class="eyebrow">Wingfoil academy</p>
				<h2>A progression path that makes sense.</h2>
				<p>Training is adapted to conditions and personal level. The three stages below describe the usual route toward independent foiling.</p>
			</div>
			<div class="course-grid">
				<article><span class="level">Level 1 | Discovery</span><h3><?php echo esc_html( woe_content_value( 'sports_level1_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'sports_level1_text' ) ); ?></p><small><?php echo esc_html( woe_content_value( 'sports_level1_hours' ) ); ?></small></article>
				<article><span class="level">Level 2 | Foiling</span><h3><?php echo esc_html( woe_content_value( 'sports_level2_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'sports_level2_text' ) ); ?></p><small><?php echo esc_html( woe_content_value( 'sports_level2_hours' ) ); ?></small></article>
				<article><span class="level">Level 3 | Independence</span><h3><?php echo esc_html( woe_content_value( 'sports_level3_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'sports_level3_text' ) ); ?></p><small><?php echo esc_html( woe_content_value( 'sports_level3_hours' ) ); ?></small></article>
			</div>
		</div>
	</section>

	<section class="section academy-video-section" aria-label="Duotone Academy videos">
		<div class="section-head">
			<p class="eyebrow">Duotone Academy</p>
			<h2>Learn before the trip. Progress on the water.</h2>
			<p>Two useful Academy sessions for wing control and new freestyle ideas with the same premium Duotone focus you will find on board.</p>
		</div>
		<div class="academy-video-grid">
			<article>
				<div class="academy-video-frame"><iframe src="https://www.youtube.com/embed/3FnCakezwOQ?list=PLKSlkt4cEJPl-uFUF2N4Fzvgw8tQspLhJ" title="BASICS - Fly your wing on the beach - Duotone Wing Academy" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
				<h3>Wing control on the beach</h3>
				<p>The foundation for confident handling before your first water session.</p>
			</article>
			<article>
				<div class="academy-video-frame"><iframe src="https://www.youtube.com/embed/n6RIJebLb-0?list=PLKSlkt4cEJPm9YYfNByZENk-7uD7Dxb6B" title="Duotone Academy App - 11 New Freestyle Tricks" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
				<h3>Freestyle inspiration</h3>
				<p>Eleven new ideas for experienced riders who want to add more to every session.</p>
			</article>
		</div>
	</section>

	<section class="section" id="kite">
		<div class="editorial-split reverse">
			<div class="copy">
				<p class="eyebrow">Main focus 02</p>
				<h2><?php echo esc_html( woe_content_value( 'sports_kite_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'sports_kite_p1' ) ); ?></p>
				<p><?php echo esc_html( woe_content_value( 'sports_kite_p2' ) ); ?></p>
				<ul class="spec-line spec-line-dark">
					<li>Flat-water options</li><li>Guided sessions</li><li>Duotone rental</li><li>Rescue support</li>
				</ul>
			</div>
			<img src="<?php echo esc_url( woe_content_media_url( 'sports_kite_image' ) ); ?>" alt="Kitesurfer riding at sunset" loading="lazy">
		</div>
	</section>

	<section class="video-section" id="efoil" aria-label="eFoil option">
		<div class="video-wrap">
			<video controls playsinline preload="metadata" poster="<?php echo esc_url( woe_content_media_url( 'sports_efoil_poster' ) ); ?>">
				<source src="<?php echo esc_url( woe_content_media_url( 'sports_efoil_video' ) ); ?>" type="video/mp4">
				Your browser does not support the video element.
			</video>
		</div>
		<div class="video-copy">
			<p class="eyebrow">The eFoil highlight</p>
			<h2><?php echo esc_html( woe_content_value( 'sports_efoil_title' ) ); ?></h2>
			<p><?php echo esc_html( woe_content_value( 'sports_efoil_text' ) ); ?></p>
			<p>Equipment and coaching are arranged separately from the yacht package.</p>
			<div class="battery-inline"><strong><?php echo esc_html( woe_content_value( 'activities_battery_title' ) ); ?></strong><span><?php echo esc_html( woe_content_value( 'activities_battery_text' ) ); ?></span></div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/activities' ); ?>

	<?php get_template_part( 'template-parts/partners' ); ?>

	<section class="cta-band">
		<div class="cta-band-inner">
			<div><p class="eyebrow">Tell us your level</p><h2>We will shape the right setup.</h2><p>Share your main sport, experience and equipment needs with the safari team.</p></div>
			<div class="button-row"><a class="button button-dark" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>">Request advice</a><a class="button button-outline" href="<?php echo esc_url( woe_whatsapp_url( 'Hi World of eFoil, I would like advice about wingfoil, kite or eFoil options for the safari.' ) ); ?>" target="_blank" rel="noopener">WhatsApp</a></div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
