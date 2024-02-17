<?php

/**
 * Title: Hero Section
 * Slug: hero-section
 * Categories: Featured
 * Keywords: hero section
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/img/hero-bg.png'; ?>","id":121,"dimRatio":0,"isDark":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"hero-section-cover","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light hero-section-cover" style="margin-top:0px;margin-bottom:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-121" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/hero-bg.png'; ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
        <main class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"50px"},"margin":{"top":"350px","bottom":"350px"}}},"className":"hero-section"} -->
            <div class="wp-block-columns are-vertically-aligned-center hero-section" style="margin-top:350px;margin-bottom:350px"><!-- wp:column {"verticalAlignment":"center","width":"70%","className":"hero-text-col"} -->
                <div class="wp-block-column is-vertically-aligned-center hero-text-col" style="flex-basis:70%"><!-- wp:heading {"style":{"typography":{"fontSize":"60px","textTransform":"capitalize"}}} -->
                    <h2 class="wp-block-heading" style="font-size:60px;text-transform:capitalize"><?php echo esc_html_x('Get started now and watch your business grow.', 'Hero Section', 'suku'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"custom-paragraph-color"} -->
                    <p class="has-custom-paragraph-color-color has-text-color"><?php echo esc_html_x('Choose from a wide range of customizable templates and themes to make your website look professional and attractive. Get started now.', 'Hero Section', 'suku'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x('Get Started', 'Hero Section', 'suku'); ?></a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x('Learn More', 'Hero Section', 'suku'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"30%","className":"pos-a hero-img-col"} -->
                <div class="wp-block-column is-vertically-aligned-center pos-a hero-img-col" style="flex-basis:30%"><!-- wp:image {"id":617,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/hero-image.png'; ?>" alt="" class="wp-image-617" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":224,"sizeSlug":"full","linkDestination":"none","className":"pos-a"} -->
                    <figure class="wp-block-image size-full pos-a"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/hero-img-2.png'; ?>" alt="" class="wp-image-224" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </main>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
