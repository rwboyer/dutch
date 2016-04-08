<?php
/**
 * Add filters for Dutch Country customization.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

// Auction captions

if ( ! function_exists( 'dtc_auction_caption' ) ) :
function dtc_auction_caption($caption_text, $attachment) {
  $img_meta = wp_get_attachment_metadata($attachment->ID);
  $caption_text = "Lot # " . basename($img_meta['file'], ".jpg");
  return $caption_text;
}
endif;
add_filter( 'prso_found_gallery_image_caption' , 'dtc_auction_caption', 10, 2);

add_filter( 'body_class', 'my_custom_body_classes' );
function my_custom_body_classes( $classes ) {
	if ( is_search() ){
		$classes[] = 'woocommerce'; // show products properly on the search page
	}
	return $classes;
}

?>
