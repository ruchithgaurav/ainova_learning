<?php
/**
 * Title: Header
 * Slug: bizgrove/header
 * Categories: header, bizgrove
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" id="sticky-header" style="padding-top:20px;padding-right:var(--wp--preset--spacing--20);padding-bottom:20px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"body"} /-->

<!-- wp:navigation {icon":"menu","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"19px"},"spacing":{"blockGap":"35px"}},"layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Log In', 'bizgrove' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'bizgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->