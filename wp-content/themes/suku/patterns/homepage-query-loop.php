<?php

/**
 * Title: Homepage Query Loop
 * Slug: homepage-query-loop
 * Categories: General
 * Keywords: queryloop
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","right":"15px","left":"15px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:120px;padding-right:15px;padding-bottom:120px;padding-left:15px">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x('Read our blog', 'Homepage Query Loop', 'suku'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php echo esc_html_x('With lots of unique blocks, you can easily build a page without coding. Build your next landing page.', 'Homepage Query Loop', 'suku'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
    <main class="wp-block-query">
        <!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":2}} -->
        <!-- wp:group -->
        <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

            <!-- wp:group {"style":{"typography":{"fontSize":"16px"}},"textColor":"custom-paragraph-color","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group has-custom-paragraph-color-color has-text-color" style="font-size:16px">
                <!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

                <!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-paragraph-color"},":hover":{"color":{"text":"var:preset|color|custom-primary-button"}}}}},"textColor":"custom-paragraph-color"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"isLink":true,"fontFamily":"public-sans"} /-->

            <!-- wp:post-excerpt {"excerptLength":15} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"50px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group" style="margin-top:50px">
            <!-- wp:query-pagination {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-footer-background"},":hover":{"color":{"text":"var:preset|color|custom-primary-button"}}}}},"textColor":"custom-footer-background","layout":{"type":"flex","justifyContent":"center"}} -->
            <!-- wp:query-pagination-previous {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->

            <!-- wp:query-pagination-numbers {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->

            <!-- wp:query-pagination-next {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:group -->
    </main>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->
