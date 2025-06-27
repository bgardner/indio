<?php
/**
 * Title: List of posts
 * Slug: indio/posts
 * Categories: posts
 * Block Types: core/query
 */
?>
<!-- wp:group {"metadata":{"name":"Posts"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40)">
	<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"},"blockGap":"10px"},"border":{"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"}}},"layout":{"type":"default"}} -->
			<article class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--20)">
				<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
				<!-- wp:post-date {"fontSize":"x-small"} /-->
			</article>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top:0">
			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
