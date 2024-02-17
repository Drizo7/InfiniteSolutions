<?php
/**
 * Title: Latest News
 * Slug: construction-blocks/latest-news
 * Categories: construction-blocks, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"},"margin":{"bottom":"var:preset|spacing|80"}}},"className":"latest-news","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group latest-news" style="margin-bottom:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:spacer {"height":"18px"} -->
<div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"inter"} -->
<h3 class="wp-block-heading has-text-align-center has-inter-font-family" style="font-style:normal;font-weight:700"><?php esc_html_e('Latest News','construction-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"18px"} -->
<div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"latest-blogs","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","bottom":"2em","left":"2em","right":"2em"}},"border":{"width":"1px","style":"dashed","color":"#111111","radius":"10px"}},"backgroundColor":"section-bg","className":"wow swing","layout":{"type":"constrained"}} -->
<div class="wp-block-group wow swing has-border-color has-section-bg-background-color has-background" style="border-color:#111111;border-style:dashed;border-width:1px;border-radius:10px;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:post-featured-image {"isLink":true,"align":"center","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:post-title {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"small"} /-->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"excerptLength":20} /-->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:read-more {"style":{"typography":{"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"width":"1px"}},"borderColor":"primary","textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','construction-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"130px","className":"latest-spacer"} -->
<div style="height:130px" aria-hidden="true" class="wp-block-spacer latest-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->