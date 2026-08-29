<?php
/**
 * Battery rental note shown as part of an eFoil section.
 *
 * @package Efoil_Safaris
 */
?>
<div class="battery-note efoil-battery-note">
	<div class="battery-note-logos" aria-hidden="true">
		<span><img src="<?php echo esc_url( woe_asset_url( 'images/partners/aerofoils-audi-compact.webp' ) ); ?>" alt=""></span>
		<span><img src="<?php echo esc_url( woe_asset_url( 'images/partners/lift-foils-compact.webp' ) ); ?>" alt=""></span>
	</div>
	<div>
		<strong><?php echo esc_html( woe_content_value( 'activities_battery_title' ) ); ?></strong>
		<p><?php echo esc_html( woe_content_value( 'activities_battery_text' ) ); ?></p>
	</div>
</div>
