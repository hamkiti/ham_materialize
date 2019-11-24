<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ham_materialize
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col l3 m12 s12 row">
	<div class="col s12">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</col>
</div><!-- #secondary -->
