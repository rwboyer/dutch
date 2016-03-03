<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">
	<footer id="footer">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<div class="footer">
  		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/associations.png">
  		<p>DUTCH COUNTRY AUCTIONS   |   THE STAMP CENTER   |   4115 CONCORD PIKE   |   WILMINGTON, DE  19803</p>
  		<p>(302) 478-8740  |  FAX (302) 478-8779  | <a href="mailto:auctions@dutchcountryauctions.com">Auctions@DutchCountryAuctions.com</a></p>
  		<p class="footer-small">by 2Fish</p>
		</div>
		<?php do_action( 'foundationpress_after_footer' ); ?>
	</footer>
</div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
