<?php
/**
 *
 * Template Name: Full Width SideBar
 *
 * @package ham_materialize
 */

get_header();
?>

	<div id="primary" class="content-area col l12 m12 s12" data-tmpl="<?php echo basename(__FILE__, '.php');?>">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div><!-- #primary -->

<?php
get_footer();
