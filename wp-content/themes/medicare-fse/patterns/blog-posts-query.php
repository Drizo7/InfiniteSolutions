<?php
/**
 * Title: Blog Posts Query
 * Slug: medicare-fse/blog-posts-query
 * Categories: medicare-fse
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;flex-basis:70%"><!-- wp:query {"queryId":12,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":2},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"fontSize":"small"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"height":"240px"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.8rem"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","right":"0","bottom":"0","left":"0"}},"color":{"text":"#848484"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column" style="padding-left:0;flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"medicare-fse","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->