<?php

/**
 * Title: Sidebar
 * Slug: sidebar
 * Categories: General
 * Keywords: sidebar
 */
?>
<!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":316,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/sidebar-img-1.png'; ?>" alt="" class="wp-image-316" /></figure>
    <!-- /wp:image -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"20px"}}},"fontFamily":"inter"} -->
    <p class="has-inter-font-family" style="margin-top:20px;font-size:18px;font-style:normal;font-weight:600"><?php echo esc_html_x('Lorem ipsum dolor sit amet consectetur. Dapibus quis non tincidunt volutpat mauris quis. Sagittis lacinia et lectus', 'Sidebar Section Text', 'suku'); ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"lineHeight":"1"}},"textColor":"custom-primary-button"} -->
    <h2 class="wp-block-heading has-custom-primary-button-color has-text-color" style="margin-bottom:40px;line-height:1"><?php echo esc_html_x('Follow', 'Sidebar Section Text', 'suku'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:social-links {"customIconColor":"#2f2f2f","iconColorValue":"#2f2f2f","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"40px"}}},"className":"is-style-logos-only"} -->
    <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

        <!-- wp:social-link {"url":"#","service":"twitter"} /-->

        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

        <!-- wp:social-link {"url":"#","service":"github"} /-->
    </ul>
    <!-- /wp:social-links -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"75px"} -->
<div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"lineHeight":"1"}},"textColor":"custom-primary-button"} -->
    <h2 class="wp-block-heading has-custom-primary-button-color has-text-color" style="margin-bottom:40px;line-height:1"><?php echo esc_html_x('Recent Post', 'Sidebar Section Text', 'suku'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:latest-posts {"postsToShow":4,"displayPostContent":true,"excerptLength":10,"displayPostDate":true,"displayFeaturedImage":true,"addLinkToFeaturedImage":true,"className":"sidebar-recent-posts"} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
