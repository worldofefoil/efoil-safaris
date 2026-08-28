<?php
/**
 * FAQ and contact page.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content">
	<section class="page-hero">
		<img src="<?php echo esc_url( woe_content_media_url( 'faq_hero_image' ) ); ?>" alt="Smiling guest during a watersports safari" fetchpriority="high">
		<div class="page-hero-content">
			<p class="eyebrow">FAQ & contact</p>
			<h1><?php echo esc_html( woe_content_value( 'faq_hero_title' ) ); ?></h1>
			<p><?php echo esc_html( woe_content_value( 'faq_hero_text' ) ); ?></p>
		</div>
	</section>
	<?php get_template_part( 'template-parts/page-jump' ); ?>

	<section class="section">
		<div class="section-head"><p class="eyebrow">Riding & equipment</p><h2>Questions from riders.</h2></div>
		<div class="faq-list">
			<?php for ( $number = 1; $number <= 6; $number++ ) : ?><details><summary><?php echo esc_html( woe_content_value( 'faq_question_' . $number ) ); ?></summary><p><?php echo esc_html( woe_content_value( 'faq_answer_' . $number ) ); ?></p></details><?php endfor; ?>
		</div>
		<div class="battery-note faq-battery-note"><div class="battery-note-logos" aria-hidden="true"><img src="<?php echo esc_url( woe_content_media_url( 'partner_1_logo' ) ); ?>" alt=""><img src="<?php echo esc_url( woe_content_media_url( 'partner_2_logo' ) ); ?>" alt=""></div><div><strong><?php echo esc_html( woe_content_value( 'activities_battery_title' ) ); ?></strong><p><?php echo esc_html( woe_content_value( 'activities_battery_text' ) ); ?></p></div></div>
	</section>

	<section class="section section-paper">
		<div class="section-inner">
			<div class="section-head"><p class="eyebrow">Yacht life</p><h2>Questions about the week.</h2></div>
			<div class="faq-list">
				<?php for ( $number = 7; $number <= 12; $number++ ) : ?><details><summary><?php echo esc_html( woe_content_value( 'faq_question_' . $number ) ); ?></summary><p><?php echo esc_html( woe_content_value( 'faq_answer_' . $number ) ); ?></p></details><?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="section-inner contact-layout">
			<div class="copy">
				<p class="eyebrow">Direct contact</p>
				<h2>Talk to the safari team.</h2>
				<p>For availability, cabin questions or help choosing the right sports package, contact <?php echo esc_html( woe_content_value( 'general_company' ) ); ?> directly.</p>
				<div class="contact-stack">
					<a href="tel:<?php echo esc_attr( woe_phone_link() ); ?>"><?php echo esc_html( woe_phone_display() ); ?></a>
					<a href="mailto:<?php echo esc_attr( woe_email() ); ?>"><?php echo esc_html( woe_email() ); ?></a>
					<a href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">Start a WhatsApp chat</a>
				</div>
			</div>
			<div>
				<p class="eyebrow">Booking request</p>
				<h2>Ready to ask for a cabin?</h2>
				<p class="text-muted">Use the booking form to send your preferred week, number of guests, riding level and equipment needs in one message.</p>
				<p><a class="button button-primary" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>">Open booking form</a></p>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
