<?php

/**
 * Title: Post Query Loop
 * Slug: post-query-loop
 * Categories: General
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"180px","bottom":"120px","right":"15px","left":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:180px;padding-right:15px;padding-bottom:120px;padding-left:15px"><!-- wp:query-title {"style":{"typography":{"fontSize":"50px"}},"type":"archive","textAlign":"center","showPrefix":false} /-->

    <!-- wp:term-description {"style":{"typography":{"fontSize":"25px"}},"textAlign":"center"} /-->

    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"perPage":2},"tagName":"main","layout":{"type":"constrained"}} -->
    <main class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":2}} -->
        <!-- wp:group -->
        <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

            <!-- wp:group {"style":{"typography":{"fontSize":"16px"}},"textColor":"custom-paragraph-color","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group has-custom-paragraph-color-color has-text-color" style="font-size:16px"><!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

                <!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-paragraph-color"},":hover":{"color":{"text":"var:preset|color|custom-primary-button"}}}}},"textColor":"custom-paragraph-color"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"isLink":true,"fontFamily":"public-sans"} /-->

            <!-- wp:post-excerpt {"excerptLength":15} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"50px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group" style="margin-top:50px"><!-- wp:query-pagination {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-footer-background"},":hover":{"color":{"text":"var:preset|color|custom-primary-button"}}}}},"textColor":"custom-footer-background","layout":{"type":"flex","justifyContent":"center"}} -->
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
