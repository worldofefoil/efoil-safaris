<?php
/**
 * Not found template.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content" class="generic-content">
	<p class="eyebrow">404</p>
	<h1>That page has moved.</h1>
	<p>Return to the safari overview or go directly to the available dates.</p>
	<div class="button-row">
		<a class="button button-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to home</a>
		<a class="button button-water" href="<?php echo esc_url( woe_page_url( 'dates-booking' ) ); ?>">See dates</a>
	</div>
</main>
<?php get_footer(); ?>

