<?php
/**
 * Shared subpage navigation.
 *
 * @package Efoil_Safaris
 */

$links = array(
	'home'           => 'Home',
	'the-safari'     => 'The Safari',
	'wingfoil-kite'  => 'Wing & Kite',
	'yachts-cabins'  => 'Yachts',
	'dates-booking'  => 'Dates',
	'gallery'        => 'Gallery',
	'faq-contact'    => 'FAQ',
);
?>
<nav class="section-jump" aria-label="Safari pages">
	<?php foreach ( $links as $slug => $label ) : ?>
		<a href="<?php echo esc_url( woe_page_url( $slug ) ); ?>" <?php echo is_page( $slug ) ? 'aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
	<?php endforeach; ?>
</nav>
