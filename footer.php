<?php
/**
 * Site footer.
 *
 * @package Efoil_Safaris
 */
?>
<footer class="site-footer">
	<div class="footer-main">
		<div class="footer-brand">
			<?php $footer_logo = woe_content_media_url( 'general_logo' ) ?: woe_asset_url( 'images/yacht-safaris-logo-transparent.png' ); ?>
			<img src="<?php echo esc_url( $footer_logo ); ?>" alt="<?php echo esc_attr( woe_content_value( 'general_brand' ) ); ?>">
			<p><?php echo esc_html( woe_content_value( 'general_footer_tagline' ) ); ?></p>
		</div>
		<div>
			<h2>Explore</h2>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<a href="<?php echo esc_url( woe_page_url( 'the-safari' ) ); ?>">The Safari</a>
			<a href="<?php echo esc_url( woe_page_url( 'wingfoil-kite' ) ); ?>">Wingfoil & Kite</a>
			<a href="<?php echo esc_url( woe_page_url( 'yachts-cabins' ) ); ?>">Yachts & Cabins</a>
			<a href="<?php echo esc_url( woe_page_url( 'dates-booking' ) ); ?>">Dates & Booking</a>
		</div>
		<div>
			<h2>Contact</h2>
			<a href="tel:<?php echo esc_attr( woe_phone_link() ); ?>"><?php echo esc_html( woe_phone_display() ); ?></a>
			<a href="mailto:<?php echo esc_attr( woe_email() ); ?>"><?php echo esc_html( woe_email() ); ?></a>
			<a href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">WhatsApp</a>
		</div>
		<div>
			<h2>Company</h2>
			<p><?php echo esc_html( woe_content_value( 'general_company' ) ); ?><br><?php echo nl2br( esc_html( woe_content_value( 'general_address' ) ) ); ?></p>
			<a href="<?php echo esc_url( woe_page_url( 'privacy-policy' ) ); ?>">Privacy Policy</a>
			<a href="<?php echo esc_url( woe_page_url( 'terms-conditions' ) ); ?>">Terms & Conditions</a>
		</div>
	</div>
	<div class="footer-bottom">
		<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> World of eFoil GmbH</span>
		<span>Yacht Safaris | Hurghada, Egypt</span>
	</div>
</footer>

<nav class="mobile-action-bar" aria-label="Quick contact">
	<a href="<?php echo esc_url( woe_page_url( 'dates-booking' ) ); ?>">DATES</a>
	<a href="<?php echo esc_url( woe_whatsapp_url() ); ?>" target="_blank" rel="noopener">WHATSAPP</a>
	<a class="mobile-action-primary" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) . '#booking' ); ?>">REQUEST</a>
</nav>

<dialog class="image-lightbox" data-lightbox>
	<button class="lightbox-close" type="button" aria-label="Close image"></button>
	<button class="lightbox-prev" type="button" aria-label="Previous image"></button>
	<img alt="">
	<button class="lightbox-next" type="button" aria-label="Next image"></button>
	<p></p>
</dialog>
<?php wp_footer(); ?>
</body>
</html>
