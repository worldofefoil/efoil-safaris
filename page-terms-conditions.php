<?php
/**
 * Terms and conditions page.
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
	<h1>Terms & Conditions</h1>
	<div class="legal-content">
		<?php if ( $custom_content ) : ?>
			<?php echo apply_filters( 'the_content', $custom_content ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php else : ?>
			<?php woe_render_legal_source( 'terms-conditions-source.html' ); ?>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
