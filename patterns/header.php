<?php
/**
 * Title: Default header
 * Slug: indio/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":48,"shouldSyncIcon":false,"className":"is-style-rounded"} /-->
			<!-- wp:group {"style":{"spacing":{"padding":{"left":"15px"}},"border":{"left":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--contrast);border-left-style:dotted;border-left-width:1px;padding-left:15px">
				<!-- wp:site-title {"level":0} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
