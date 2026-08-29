<?php
/**
 * Full safari activity overview.
 *
 * @package Efoil_Safaris
 */
?>
<section class="section activity-showcase" id="activities">
	<div class="section-head">
		<p class="eyebrow">15 activities | one yacht</p>
		<h2><?php echo esc_html( woe_content_value( 'activities_title' ) ); ?></h2>
		<p><?php echo esc_html( woe_content_value( 'activities_text' ) ); ?></p>
	</div>
	<div class="battery-note">
		<div class="battery-note-logos" aria-hidden="true">
			<span><img src="<?php echo esc_url( woe_asset_url( 'images/partners/aerofoils-audi-compact.webp' ) ); ?>" alt=""></span>
			<span><img src="<?php echo esc_url( woe_asset_url( 'images/partners/lift-foils-compact.webp' ) ); ?>" alt=""></span>
		</div>
		<div><strong><?php echo esc_html( woe_content_value( 'activities_battery_title' ) ); ?></strong><p><?php echo esc_html( woe_content_value( 'activities_battery_text' ) ); ?></p></div>
	</div>
	<div class="activity-showcase-grid">
		<?php foreach ( woe_activity_defaults() as $offset => $activity ) : ?>
			<?php $number = $offset + 1; ?>
			<article class="activity-card<?php echo $number <= 3 ? ' is-featured' : ''; ?>">
				<img src="<?php echo esc_url( woe_content_media_url( 'activity_' . $number . '_image' ) ); ?>" alt="<?php echo esc_attr( woe_content_value( 'activity_' . $number . '_title' ) ); ?>" loading="lazy">
				<div class="activity-card-copy">
					<span><?php echo esc_html( woe_content_value( 'activity_' . $number . '_label' ) ); ?></span>
					<h3><?php echo esc_html( woe_content_value( 'activity_' . $number . '_title' ) ); ?></h3>
					<p><?php echo esc_html( woe_content_value( 'activity_' . $number . '_text' ) ); ?></p>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>
