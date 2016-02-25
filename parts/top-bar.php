<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid">
  <div class="red-line">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="name">
                <a href="<?php echo home_url(); ?>"><img class="top-logo" src="/wp-content/themes/FoundationPress-master/assets/images/logo.png"\></a>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
  </div>
</div>
