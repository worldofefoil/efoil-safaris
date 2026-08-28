<?php
/**
 * Partner logo overview.
 *
 * @package Efoil_Safaris
 */
?>
<section class="partner-section" aria-labelledby="partner-title">
	<div class="partner-inner">
		<div class="partner-heading">
			<p class="eyebrow">Trusted watersports network</p>
			<h2 id="partner-title">Equipment, schools and people we work with.</h2>
		</div>
		<div class="partner-grid">
			<?php foreach ( woe_partner_defaults() as $offset => $partner ) : ?>
				<?php
				$number = $offset + 1;
				$name   = woe_content_value( 'partner_' . $number . '_name' );
				$url    = woe_content_value( 'partner_' . $number . '_url' );
				$tag    = $url ? 'a' : 'div';
				?>
				<<?php echo esc_html( $tag ); ?> class="partner-item"<?php if ( $url ) : ?> href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener"<?php endif; ?>>
					<img src="<?php echo esc_url( woe_content_media_url( 'partner_' . $number . '_logo' ) ); ?>" alt="<?php echo esc_attr( $name ); ?>" loading="lazy">
					<span class="screen-reader-text"><?php echo esc_html( $name ); ?></span>
				</<?php echo esc_html( $tag ); ?>>
			<?php endforeach; ?>
		</div>
	</div>
</section>
