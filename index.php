<?php
/**
 * Fallback template.
 *
 * @package Efoil_Safaris
 */

get_header();
?>
<main id="main-content" class="generic-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<h1>Nothing found</h1>
		<p>The requested content is not available.</p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>

