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
  $caption_text = $img_meta['file'];
  return $caption_text;
}
endif;
add_filter( 'prso_found_gallery_image_caption' , 'dtc_auction_caption', 10, 2);

?>
