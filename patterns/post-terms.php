<?php
/**
 * Title: Post terms
 * Slug: indio/post-terms
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","className":"entry-footer","style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"},"right":{},"bottom":{},"left":{}}},"fontSize":"x-small","layout":{"type":"default"}} -->
<footer class="wp-block-group entry-footer has-x-small-font-size" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html__( 'Category:', 'indio' ); ?> "} /-->
		<!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_html__( 'Tags:', 'indio' ); ?> "} /-->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
