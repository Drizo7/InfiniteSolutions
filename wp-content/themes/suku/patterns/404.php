<?php

/**
 * Title: 404
 * Slug: 404
 * Categories: General
 * Keywords: 404
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"250px","bottom":"200px","right":"15px","left":"15px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:250px;padding-right:15px;padding-bottom:200px;padding-left:15px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
            <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"style":{"typography":{"fontSize":"200px","fontStyle":"normal","fontWeight":"800","lineHeight":"0.7"}},"fontFamily":"public-sans"} -->
                <h2 class="wp-block-heading has-public-sans-font-family" style="font-size:200px;font-style:normal;font-weight:800;line-height:0.7"><?php echo esc_html_x('404', '404 Page Text', 'suku'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"100","lineHeight":"1"}}} -->
                <p style="font-size:40px;font-style:normal;font-weight:100;line-height:1"><?php echo esc_html_x('error', '404 Page Text', 'suku'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"color":{"text":"#454545"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"fontFamily":"public-sans"} -->
            <p class="has-text-color has-public-sans-font-family" style="color:#454545;font-size:40px;font-style:normal;font-weight:400;line-height:1.3"><?php echo esc_html_x('Something\'s missing', '404 Page Text', 'suku'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"color":{"text":"#454545"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"fontFamily":"public-sans"} -->
            <p class="has-text-color has-public-sans-font-family" style="color:#454545;font-size:18px;font-style:normal;font-weight:400;line-height:1.3"><?php echo esc_html_x('You\'re seeing this page because the URL you entered doesn\'t exist.', '404 Page Text', 'suku'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x('Back to Home', '404 Page Text', 'suku'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":604,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/404-img.png'; ?>" alt="" class="wp-image-604" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->
