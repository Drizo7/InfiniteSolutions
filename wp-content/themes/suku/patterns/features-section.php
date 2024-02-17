<?php

/**
 * Title: Features Section
 * Slug: features-section
 * Categories: General
 * Keywords: features
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"140px","bottom":"140px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:140px;padding-bottom:140px"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"15px","left":"15px"},"blockGap":{"left":"50px"}}}} -->
    <div class="wp-block-columns" style="padding-right:15px;padding-left:15px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":159,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/easily-customizable.png'; ?>" alt="" class="wp-image-159" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"style":{"typography":{"fontSize":"24px"}},"textColor":"custom-footer-background"} -->
            <h2 class="wp-block-heading has-custom-footer-background-color has-text-color" style="font-size:24px"><?php echo esc_html_x('Easily Customizable', 'Features Section with Column Swap', 'suku'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html_x('Tailor your website to your liking with endless options to personalize the design and functionality.', 'Features Section with Column Swap', 'suku'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":155,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="
            <?php echo esc_url(get_template_directory_uri()) . '/assets/img/build-your-site.png'; ?>" alt="" class="wp-image-155" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"style":{"typography":{"fontSize":"24px"}},"textColor":"custom-footer-background"} -->
            <h2 class="wp-block-heading has-custom-footer-background-color has-text-color" style="font-size:24px"><?php echo esc_html_x('Build your site', 'Features Section with Column Swap', 'suku'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html_x('Tailor your website to your liking with endless options to personalize the design and functionality.', 'Features Section with Column Swap', 'suku'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":156,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img src="
            <?php echo esc_url(get_template_directory_uri()) . '/assets/img/seo-optimized.png'; ?>" alt="" class="wp-image-156" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"style":{"typography":{"fontSize":"24px"}},"textColor":"custom-footer-background"} -->
            <h2 class="wp-block-heading has-custom-footer-background-color has-text-color" style="font-size:24px"><?php echo esc_html_x('SEO Optimized', 'Features Section with Column Swap', 'suku'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html_x('Tailor your website to your liking with endless options to personalize the design and functionality.', 'Features Section with Column Swap', 'suku'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
