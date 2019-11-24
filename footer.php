<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ham_materialize
 */

?>

	</div><!-- #content -->

</div><!-- #page -->
<footer class="site-footer">
	<div class="container" id="footer">
		<div class="row col s12">
			<div class="row">
				<div class="col m8 s12 site-info">
					
				</div><!-- .site-info -->
				<div class="col m4 s12 site-info" style="text-align:right">
					(C) <?php the_time('Y'); ?> <?php bloginfo( 'name' ); ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>
