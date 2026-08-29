<?php
/**
 * The Safari page.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content">
	<section class="page-hero">
		<img src="<?php echo esc_url( woe_content_media_url( 'safari_hero_image' ) ); ?>" alt="Foil session at sunset on the Red Sea" fetchpriority="high">
		<div class="page-hero-content">
			<p class="eyebrow">The safari</p>
			<h1><?php echo esc_html( woe_content_value( 'safari_hero_title' ) ); ?></h1>
			<p><?php echo esc_html( woe_content_value( 'safari_hero_text' ) ); ?></p>
		</div>
	</section>
	<?php get_template_part( 'template-parts/page-jump' ); ?>

	<section class="section">
		<div class="editorial-split">
			<div class="copy">
				<p class="eyebrow">Why a yacht safari</p>
				<h2><?php echo esc_html( woe_content_value( 'safari_intro_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'safari_intro_p1' ) ); ?></p>
				<p><?php echo esc_html( woe_content_value( 'safari_intro_p2' ) ); ?></p>
				<div class="feature-stat-grid">
					<div><strong>7 nights</strong><span>Liveaboard accommodation</span></div>
					<div><strong>2&nbsp;tenders</strong><span>Transfers and rescue support</span></div>
					<div><strong>Daily</strong><span>Fresh chef-prepared meals</span></div>
					<div><strong>Flexible</strong><span>Route based on conditions</span></div>
				</div>
			</div>
			<img src="<?php echo esc_url( woe_content_media_url( 'safari_intro_image' ) ); ?>" alt="Yacht anchored near a Red Sea island" loading="lazy">
		</div>
	</section>

	<img class="full-image" src="<?php echo esc_url( woe_content_media_url( 'safari_full_image' ) ); ?>" alt="Riding beside the safari yacht" loading="lazy">

	<section class="section">
		<div class="section-head">
			<p class="eyebrow">A week on board</p>
			<h2>A clear rhythm with room for surprises.</h2>
			<p>The following plan is a guide. Wind, group level and marine conditions always have the final word.</p>
		</div>
		<div class="timeline">
			<article><time>Day 1</time><h3><?php echo esc_html( woe_content_value( 'safari_day1_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'safari_day1_text' ) ); ?></p></article>
			<article><time>Day 2</time><h3><?php echo esc_html( woe_content_value( 'safari_day2_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'safari_day2_text' ) ); ?></p></article>
			<article><time>Days 3-4</time><h3><?php echo esc_html( woe_content_value( 'safari_day34_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'safari_day34_text' ) ); ?></p></article>
			<article><time>Days 5-6</time><h3><?php echo esc_html( woe_content_value( 'safari_day56_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'safari_day56_text' ) ); ?></p></article>
			<article><time>Day 7</time><h3><?php echo esc_html( woe_content_value( 'safari_day7_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'safari_day7_text' ) ); ?></p></article>
			<article><time>Day 8</time><h3><?php echo esc_html( woe_content_value( 'safari_day8_title' ) ); ?></h3><p><?php echo esc_html( woe_content_value( 'safari_day8_text' ) ); ?></p></article>
		</div>
	</section>

	<section class="section section-dark">
		<div class="section-inner">
			<div class="included-grid">
				<div>
					<p class="eyebrow">Included</p>
					<h2>Already on board.</h2>
					<ul class="clean-list"><?php foreach ( woe_content_lines( 'safari_included' ) as $item ) : ?><li><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul>
				</div>
				<div>
					<p class="eyebrow">Plan separately</p>
					<h2>Not included.</h2>
					<ul class="clean-list"><?php foreach ( woe_content_lines( 'safari_excluded' ) as $item ) : ?><li><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="editorial-split reverse">
			<div class="copy">
				<p class="eyebrow">Not only for riders</p>
				<h2><?php echo esc_html( woe_content_value( 'safari_nonrider_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'safari_nonrider_p1' ) ); ?></p>
				<p><?php echo esc_html( woe_content_value( 'safari_nonrider_p2' ) ); ?></p>
			</div>
			<img src="<?php echo esc_url( woe_content_media_url( 'safari_nonrider_image' ) ); ?>" alt="Morning yoga on the yacht deck" loading="lazy">
		</div>
	</section>

	<section class="cta-band">
		<div class="cta-band-inner">
			<div><p class="eyebrow">Ready for the Red Sea?</p><h2>Find the right week for your group.</h2><p>We will help with cabin choice, riding level and equipment options.</p></div>
			<div class="button-row"><a class="button button-dark" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) ); ?>">Dates & booking</a><a class="button button-outline" href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">WhatsApp</a></div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
