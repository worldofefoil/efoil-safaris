<?php
/**
 * Gallery page.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content">
	<section class="page-hero">
		<img src="<?php echo esc_url( woe_content_media_url( 'gallery_hero_image' ) ); ?>" alt="Watersports friends enjoying the yacht safari" fetchpriority="high">
		<div class="page-hero-content">
			<p class="eyebrow">Gallery</p>
			<h1><?php echo esc_html( woe_content_value( 'gallery_hero_title' ) ); ?></h1>
			<p><?php echo esc_html( woe_content_value( 'gallery_hero_text' ) ); ?></p>
		</div>
	</section>
	<?php get_template_part( 'template-parts/page-jump' ); ?>

	<section class="section gallery-videos">
		<div class="section-head"><p class="eyebrow">Moving moments</p><h2>See the safari in motion.</h2><p>Three short views of riding, open water and life beyond the marina.</p></div>
		<div class="gallery-video-grid">
			<?php for ( $video = 1; $video <= 3; $video++ ) : ?>
				<figure class="<?php echo 3 === $video ? 'is-portrait' : ''; ?>"><video controls playsinline preload="metadata" poster="<?php echo esc_url( woe_content_media_url( 'gallery_video_poster_' . $video ) ); ?>"><source src="<?php echo esc_url( woe_content_media_url( 'gallery_video_' . $video ) ); ?>" type="video/mp4">Your browser does not support the video element.</video><figcaption><?php echo esc_html( woe_content_value( 'gallery_video_caption_' . $video ) ); ?></figcaption></figure>
			<?php endfor; ?>
		</div>
	</section>

	<?php
	$gallery_sections = array(
		array( 'On the water', 'Wind, foil and open space.', 'Select any image to open it at full size.', 1, 6, false ),
		array( 'On board', 'The moving basecamp.', '', 7, 12, true ),
		array( 'Between sessions', 'The rest of the safari.', '', 13, 18, false ),
		array( 'New collection', 'Wingfoil and kite days.', 'More recent images from sessions and training on the Red Sea.', 19, 41, true ),
		array( 'Safari archive', 'The story behind the week.', 'eFoil, sunsets, food, crew and the small moments between sessions.', 42, 66, false ),
	);
	foreach ( $gallery_sections as $gallery_section ) :
		list( $eyebrow, $title, $intro, $start, $end, $paper ) = $gallery_section;
		?>
		<section class="section<?php echo $paper ? ' section-paper' : ''; ?>">
			<?php if ( $paper ) : ?><div class="section-inner"><?php endif; ?>
			<div class="section-head"><p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p><h2><?php echo esc_html( $title ); ?></h2><?php if ( $intro ) : ?><p><?php echo esc_html( $intro ); ?></p><?php endif; ?></div>
			<div class="mosaic">
				<?php for ( $number = $start; $number <= $end; $number++ ) : ?>
					<figure class="<?php echo 4 === ( ( $number - $start ) % 6 ) + 1 ? 'mosaic-wide' : ''; ?>" data-lightbox-item tabindex="0"><img src="<?php echo esc_url( woe_content_media_url( 'gallery_image_' . $number ) ); ?>" alt="<?php echo esc_attr( woe_content_value( 'gallery_caption_' . $number ) ); ?>" loading="lazy"><figcaption><?php echo esc_html( woe_content_value( 'gallery_caption_' . $number ) ); ?></figcaption></figure>
				<?php endfor; ?>
			</div>
			<?php if ( $paper ) : ?></div><?php endif; ?>
		</section>
	<?php endforeach; ?>

	<?php get_template_part( 'template-parts/partners' ); ?>

	<section class="cta-band">
		<div class="cta-band-inner">
			<div><p class="eyebrow">See it for yourself</p><h2>Choose a week on the Red Sea.</h2><p>Ask for current cabin availability and the right sports package for you.</p></div>
			<div class="button-row"><a class="button button-dark" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) ); ?>">Dates & booking</a><a class="button button-outline" href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">WhatsApp</a></div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
