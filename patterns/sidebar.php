<?php
/**
 * Title: Default sidebar
 * Slug: indio/sidebar
 * Block Types: core/template-part/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"neutral","fontSize":"x-small","layout":{"type":"default"}} -->
<div class="wp-block-group has-neutral-background-color has-background has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php echo esc_html__( 'About the author', 'indio' ); ?></h3>
	<!-- /wp:heading -->
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/brian-gardner.jpg'; ?>" alt="Brian Gardner"/></figure>
	<!-- /wp:image -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'Hey, I’m Brian Gardner—a designer inspired by simplicity, fueled by good espresso, and refreshed by running.', 'indio' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph -->
	<p><a href="#"><?php echo esc_html__( 'Learn more about me →', 'indio' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
