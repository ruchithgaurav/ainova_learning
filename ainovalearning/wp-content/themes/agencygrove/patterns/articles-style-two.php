<?php
/**
 * Title: Articles Style Two
 * Slug: agencygrove/articles
 * Categories: agencygrove
 * Keywords: articles
 */
?>
<!-- wp:group {"metadata":{"name":"News Style 2"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-bottom:0"><mark style="background-color:rgba(0, 0, 0, 0);color:#01a4ef" class="has-inline-color"><?php echo esc_html__( "News Style 2", 'agencygrove' ); ?></mark></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0"}}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-center has-body-font-family" style="margin-top:0;font-size:32px;font-style:normal;font-weight:600;line-height:1.2"><?php echo esc_html__( "Our Latest", 'agencygrove' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( "News", 'agencygrove' ); ?> </mark>&amp; <?php echo esc_html__( "Notices", 'agencygrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":24,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#9c9d9f","minHeight":450,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9c9d9f"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{"background":"#000000"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#000000;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} /-->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->