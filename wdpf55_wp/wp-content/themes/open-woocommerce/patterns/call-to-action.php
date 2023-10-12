<?php
/**
 * Call to action
 * 
 * slug: call-to-action
 * title: Call to Action
 * categories: open-woocommerce
 */

return array(
'title'      =>__( 'Call to Action', 'open-woocommerce' ),
'categories' => array( 'open-woocommerce' ),
'content'    => '
<!-- wp:cover {"url":"'.esc_url(get_stylesheet_directory_uri()) .'/assests/banner.jpg","id":161,"dimRatio":30,"overlayColor":"black","minHeight":50,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"margin":{"top":"0"}},"color":{}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw;min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-161" alt="" src="http://localhost/wordpress/wp-content/uploads/2023/09/shopping.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"65px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"0.9","letterSpacing":"-2px"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color" style="font-size:65px;font-style:normal;font-weight:700;letter-spacing:-2px;line-height:0.9;text-transform:uppercase">Enjoy</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"78px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"0.9","letterSpacing":"-2px"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color" style="font-size:78px;font-style:normal;font-weight:700;letter-spacing:-2px;line-height:0.9;text-transform:uppercase">20% Off</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-orange","textColor":"white","style":{"border":{"radius":"0px"}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link has-white-color has-luminous-vivid-orange-background-color has-text-color has-background wp-element-button" style="border-radius:0px">Call to action</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);

