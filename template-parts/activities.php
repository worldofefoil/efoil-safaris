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
	<div class="activity-visual-strip" aria-label="Featured watersports activities">
		<?php foreach ( array_slice( woe_activity_defaults(), 0, 4 ) as $offset => $activity ) : ?>
			<?php $number = $offset + 1; ?>
			<a class="activity-visual-tile" href="#activity-<?php echo esc_attr( $activity[0] ); ?>">
				<img src="<?php echo esc_url( woe_content_media_url( 'activity_' . $number . '_image' ) ); ?>" alt="<?php echo esc_attr( woe_content_value( 'activity_' . $number . '_title' ) ); ?>" loading="lazy">
				<span><small><?php echo esc_html( woe_content_value( 'activity_' . $number . '_label' ) ); ?></small><strong><?php echo esc_html( woe_content_value( 'activity_' . $number . '_title' ) ); ?></strong></span>
			</a>
		<?php endforeach; ?>
	</div>
	<div class="activity-detail-grid">
		<?php foreach ( woe_activity_defaults() as $offset => $activity ) : ?>
			<?php $number = $offset + 1; ?>
			<article id="activity-<?php echo esc_attr( $activity[0] ); ?>" class="activity-card<?php echo $number <= 3 ? ' is-featured' : ''; ?>">
				<div class="activity-card-copy">
					<span><?php echo esc_html( woe_content_value( 'activity_' . $number . '_label' ) ); ?></span>
					<h3><?php echo esc_html( woe_content_value( 'activity_' . $number . '_title' ) ); ?></h3>
					<p><?php echo esc_html( woe_content_value( 'activity_' . $number . '_text' ) ); ?></p>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>

