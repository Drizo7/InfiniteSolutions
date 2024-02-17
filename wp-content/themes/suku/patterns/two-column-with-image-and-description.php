<?php

/**
 * Title: Two Column with Image and Description
 * Slug: two-column-with-image-and-description
 * Categories: General
 * Keywords: two column, two column with image and description
 */
?>
<!-- wp:group {"style":{"color":{"background":"#f2f2f2"},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"120px","bottom":"250px","right":"15px","left":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f2f2f2;margin-top:0px;margin-bottom:0px;padding-top:120px;padding-right:15px;padding-bottom:250px;padding-left:15px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"pos-r img-col"} -->
        <div class="wp-block-column is-vertically-aligned-center pos-r img-col"><!-- wp:image {"id":294} -->
            <figure class="wp-block-image"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/stats-col-img.png'; ?>" alt="" class="wp-image-294" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"20px","right":"20px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"custom-primary-button","className":"pos-a overlay-text","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group pos-a overlay-text has-custom-primary-button-background-color has-background" style="border-radius:10px;margin-top:0px;margin-bottom:0px;padding-top:30px;padding-right:20px;padding-bottom:30px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"textColor":"white"} -->
                <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:24px"><?php echo esc_html_x('WordPress Marketing Conference', 'Stats Section', 'suku'); ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
            <h2 class="wp-block-heading"><?php echo esc_html_x('You can turn a simple idea into an impactful website that stands out from the crowd.', 'Stats Section', 'suku'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"30px"}}}} -->
            <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading -->
                    <h2 class="wp-block-heading"><?php echo esc_html_x('70+', 'Stats Section', 'suku'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
                    <p style="font-size:16px"><?php echo esc_html_x('Search Digital Agency New York, Information from Trusted Internet. Explore the Best Info Now.', 'Stats Section', 'suku'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading -->
                    <h2 class="wp-block-heading"><?php echo esc_html_x('156+', 'Stats Section', 'suku'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
                    <p style="font-size:16px"><?php echo esc_html_x('Search Digital Agency New York, Information from Trusted Internet. Explore the Best Info Now.', 'Stats Section', 'suku'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
