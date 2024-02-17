<?php

/**
 * Title: CTA Box
 * Slug: cta-box
 * Categories: General
 * Keywords: ctabox
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0px","right":"15px","bottom":"0px","left":"15px"}}},"className":"homepage-cta-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group homepage-cta-section" style="margin-top:0px;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"60px","right":"60px"}},"border":{"radius":"10px"}},"backgroundColor":"custom-primary-button","className":"content-box","layout":{"type":"constrained"}} -->
    <div class="wp-block-group content-box has-custom-primary-button-background-color has-background" style="border-radius:10px;padding-top:80px;padding-right:60px;padding-bottom:80px;padding-left:60px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"white","fontFamily":"public-sans"} -->
        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-public-sans-font-family" style="font-size:40px;font-style:normal;font-weight:700;line-height:1.3"><?php echo esc_html_x('Grow your business fast with', 'CTA Box Text', 'suku'); ?> </h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"white","fontFamily":"public-sans"} -->
        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-public-sans-font-family" style="font-size:40px;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html_x('Suku', 'CTA Box Text', 'suku'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"20px"}}}} -->
        <div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"backgroundColor":"custom-footer-background","textColor":"white","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"inter"} -->
            <div class="wp-block-button has-custom-font-size has-inter-font-family has-medium-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-white-color has-custom-footer-background-background-color has-text-color has-background wp-element-button"><?php echo esc_html_x('Subscribe Now', 'CTA Box Text', 'suku'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
