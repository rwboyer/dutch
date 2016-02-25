<?php
	// If a feature image is set, get the id, so it can be injected as a css background property
	if ( has_post_thumbnail( $post->ID ) ) :
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		echo '<header id="featured-hero" role="banner" style="background-image: url(\'' . $image .  '\')" >' ?>
		<h1 class="entry-title-alt">Dutch Country Auctions</h1>
		<h3 class="entry-title-alt fancy">The Stamp Center</h3>
		<h2 class="entry-title-alt"><?php the_title(); ?></h2>
		<?php
		echo '</header>';
  else: ?>
    <header id="featured-hero" role="banner">
  		<h1 class="entry-title">Dutch Country Auctions</h1>
  		<h3 class="entry-title fancy">The Stamp Center</h3>
      <h2 class="entry-title"><?php the_title(); ?></h1>
    </header>
  <?php
	endif;
?>
