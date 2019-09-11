<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpparallax
*/

if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
	<aside id="secondaryright" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-right' ); ?>
	</aside><!-- #secondary -->
<?php endif;