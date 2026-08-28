<?php
/**
 * Privacy policy page.
 *
 * @package Efoil_Safaris
 */

get_header();
$custom_content = '';
if ( have_posts() ) {
	the_post();
	$custom_content = trim( get_the_content() );
}
?>
<main id="main-content" class="legal-page">
	<p class="eyebrow">Legal</p>
	<h1>Privacy Policy</h1>
	<div class="legal-content">
		<?php if ( $custom_content ) : ?>
			<?php echo apply_filters( 'the_content', $custom_content ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php else : ?>
			<h2>Booking and contact requests</h2>
			<p>When you use the booking form, we process the name, contact details, preferred date, group size, sport interest and message you submit so that <?php echo esc_html( woe_content_value( 'general_company' ) ); ?> can answer your request. The request is sent by email to <?php echo esc_html( woe_email() ); ?>. Please do not include sensitive medical information in the free-text field.</p>
			<p>The website uses locally hosted photos, fonts and video. It does not require an external video platform to play the safari video. Additional services introduced later, such as analytics, maps or newsletter tools, may require this policy and the consent setup to be updated before launch.</p>
			<?php woe_render_legal_source( 'privacy-policy-source.html' ); ?>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
