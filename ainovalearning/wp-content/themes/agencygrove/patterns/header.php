<?php
/**
 * Title: Header
 * Slug: agencygrove/header
 * Categories: header, agencygrove
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" id="sticky-header" style="padding-top:20px;padding-right:var(--wp--preset--spacing--20);padding-bottom:20px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} /-->

<!-- wp:navigation {"icon":"menu","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"25px"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-style:none;border-width:0px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px"> <?php echo esc_html__( 'Suscribe', 'agencygrove' ); ?> </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->