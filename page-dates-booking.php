<?php
/**
 * Dates and booking page.
 *
 * @package Efoil_Safaris
 */

$booking_status = isset( $_GET['booking'] ) ? sanitize_key( wp_unslash( $_GET['booking'] ) ) : '';
$maj_dates       = array_filter( array( woe_content_value( 'dates_maj_date1' ), woe_content_value( 'dates_maj_date2' ) ) );
$bp_dates        = array_filter( array( woe_content_value( 'dates_bp_date1' ), woe_content_value( 'dates_bp_date2' ), woe_content_value( 'dates_bp_date3' ), woe_content_value( 'dates_bp_date4' ) ) );
$all_dates       = array_merge( $maj_dates, $bp_dates );
get_header();
?>
<main id="main-content">
	<section class="page-hero">
		<img src="<?php echo esc_url( woe_content_media_url( 'dates_hero_image' ) ); ?>" alt="Watersports rider beside the safari yacht" fetchpriority="high">
		<div class="page-hero-content">
			<p class="eyebrow">Dates & booking</p>
			<h1><?php echo esc_html( woe_content_value( 'dates_hero_title' ) ); ?></h1>
			<p><?php echo esc_html( woe_content_value( 'dates_hero_text' ) ); ?></p>
		</div>
	</section>
	<?php get_template_part( 'template-parts/page-jump' ); ?>

	<section class="section section-paper">
		<div class="section-inner">
			<div class="section-head">
				<p class="eyebrow">Available safaris</p>
				<h2>Pick the yacht and week.</h2>
				<p>Prices are starting prices per person for the seven-night yacht package. Sport lessons, rental and compulsory local fees are handled separately.</p>
			</div>
			<div class="date-grid">
				<article class="trip-panel">
					<img src="<?php echo esc_url( woe_content_media_url( 'dates_maj_image' ) ); ?>" alt="M/Y Majestic safari yacht" loading="lazy">
					<div class="trip-content">
						<div class="trip-meta"><span><?php echo esc_html( woe_content_value( 'dates_maj_label' ) ); ?></span><strong class="trip-price"><?php echo esc_html( woe_content_value( 'dates_maj_price' ) ); ?></strong></div>
						<h3><?php echo esc_html( woe_content_value( 'dates_maj_title' ) ); ?></h3>
						<p><?php echo esc_html( woe_content_value( 'dates_maj_text' ) ); ?></p>
						<div class="date-list">
							<?php foreach ( $maj_dates as $date ) : ?><a href="#booking" data-date="<?php echo esc_attr( $date ); ?>"><?php echo esc_html( $date ); ?></a><?php endforeach; ?>
						</div>
					</div>
				</article>
				<article class="trip-panel">
					<img src="<?php echo esc_url( woe_content_media_url( 'dates_bp_image' ) ); ?>" alt="M/Y Black Panther premium superyacht" loading="lazy">
					<div class="trip-content">
						<div class="trip-meta"><span><?php echo esc_html( woe_content_value( 'dates_bp_label' ) ); ?></span><strong class="trip-price"><?php echo esc_html( woe_content_value( 'dates_bp_price' ) ); ?></strong></div>
						<h3><?php echo esc_html( woe_content_value( 'dates_bp_title' ) ); ?></h3>
						<p><?php echo esc_html( woe_content_value( 'dates_bp_text' ) ); ?></p>
						<div class="date-list">
							<?php foreach ( $bp_dates as $date ) : ?><a href="#booking" data-date="<?php echo esc_attr( $date ); ?>"><?php echo esc_html( $date ); ?></a><?php endforeach; ?>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="section-inner">
			<div class="included-grid">
				<div>
					<p class="eyebrow">Included</p>
					<h2>In the yacht price.</h2>
					<ul class="clean-list"><?php foreach ( woe_content_lines( 'dates_included' ) as $item ) : ?><li><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul>
				</div>
				<div>
					<p class="eyebrow">Not included</p>
					<h2>Added separately.</h2>
					<ul class="clean-list"><?php foreach ( woe_content_lines( 'dates_excluded' ) as $item ) : ?><li><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-dark" id="booking">
		<div class="section-inner booking-layout">
			<div class="copy">
				<p class="eyebrow">Personal booking request</p>
				<h2><?php echo esc_html( woe_content_value( 'dates_booking_title' ) ); ?></h2>
				<p><?php echo esc_html( woe_content_value( 'dates_booking_text' ) ); ?></p>
				<div class="contact-stack">
					<a href="tel:<?php echo esc_attr( woe_phone_link() ); ?>"><?php echo esc_html( woe_phone_display() ); ?></a>
					<a href="mailto:<?php echo esc_attr( woe_email() ); ?>"><?php echo esc_html( woe_email() ); ?></a>
					<a href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">Open WhatsApp</a>
				</div>
			</div>
			<form class="booking-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
				<?php if ( 'sent' === $booking_status ) : ?>
					<p class="form-status form-wide" role="status">Thank you. Your request has been sent successfully.</p>
				<?php elseif ( 'error' === $booking_status ) : ?>
					<p class="form-status error form-wide" role="alert">The request could not be sent. Please use WhatsApp or email us directly.</p>
				<?php endif; ?>
				<input type="hidden" name="action" value="woe_booking">
				<?php wp_nonce_field( 'woe_booking_request', 'woe_booking_nonce' ); ?>
				<label>Name<input type="text" name="name" autocomplete="name" required></label>
				<label>Email or WhatsApp<input type="text" name="contact" autocomplete="email" required></label>
				<label>Preferred date
					<select name="date" id="preferred-date">
						<option value="Any available week">Any available week</option>
						<?php foreach ( $all_dates as $date ) : ?><option value="<?php echo esc_attr( $date ); ?>"><?php echo esc_html( $date ); ?></option><?php endforeach; ?>
					</select>
				</label>
				<label>Number of guests<input type="number" name="guests" min="1" max="30" inputmode="numeric" placeholder="2"></label>
				<label class="form-wide">Main interest
					<select name="sports">
						<option value="Wingfoiling">Wingfoiling</option>
						<option value="Kitesurfing">Kitesurfing</option>
						<option value="Wingfoil and kite">Wingfoil and kite</option>
						<option value="eFoil highlight">eFoil highlight</option>
						<option value="Non-rider / relax">Non-rider / relax</option>
						<option value="Mixed group">Mixed group</option>
					</select>
				</label>
				<label class="form-wide">Message<textarea name="message" rows="5" placeholder="Tell us your riding level, cabin wishes and equipment needs."></textarea></label>
				<label class="form-honeypot" aria-hidden="true">Company<input type="text" name="company" tabindex="-1" autocomplete="off"></label>
				<label class="privacy-check form-wide"><input type="checkbox" name="privacy" value="1" required><span>I agree that my details may be used to answer this request. See the <a href="<?php echo esc_url( woe_page_url( 'privacy-policy' ) ); ?>">Privacy Policy</a>.</span></label>
				<button class="button button-dark form-wide" type="submit">Send booking request</button>
				<a class="button button-water form-wide" href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">Request via WhatsApp</a>
			</form>
		</div>
	</section>

	<section class="section">
		<div class="section-head"><p class="eyebrow">Before you send</p><h2>What happens next?</h2></div>
		<div class="process-grid">
			<article><span>01</span><h3>We check cabins</h3><p>Availability and room options are verified for your preferred week.</p></article>
			<article><span>02</span><h3>We match the sports</h3><p>Rental, lessons and support are suggested for your level and focus.</p></article>
			<article><span>03</span><h3>You get details</h3><p>The team sends the full price, current local fees and payment schedule.</p></article>
			<article><span>04</span><h3>Your place is held</h3><p>Once the booking conditions are accepted, the cabin is confirmed.</p></article>
		</div>
	</section>
</main>
<?php get_footer(); ?>
