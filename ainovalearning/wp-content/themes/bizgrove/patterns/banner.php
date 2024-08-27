<?php
/**
 * Title: Banner
 * Slug: bizgrove/banner
 * Categories: bizgrove
 * Keywords: banner
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"30px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundSize":"cover","backgroundPosition":"50% 50%"},"dimensions":{"minHeight":"650px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="min-height:650px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"40px","top":"40px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h1 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php echo esc_html__( 'Your Gateway to Career Excellence', 'bizgrove' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"24px","bottom":"24px"},"margin":{"top":"0","bottom":"0"}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-bottom:24px"><?php echo esc_html__( 'Viverra turpis tincidunt facilisis commodo rhoncus odio ac nulla gravida. Ridiculus dolor euismod eros dictumst gravida habitant. Si habitant per tortor consectetuer interdum magnis semper mattis sed eros pretium.', 'bizgrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base-2","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"borderColor":"base-2"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-2-color has-text-color has-link-color has-border-color has-base-2-border-color wp-element-button"><?php echo esc_html__( 'Get Started', 'bizgrove' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"button-hover-color","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-button-hover-color-background-color has-background wp-element-button"><?php echo esc_html__( 'Explore More', 'bizgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"id":7,"width":"414px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.png" alt="banner" class="wp-image-7" style="width:414px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->