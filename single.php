<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ham_materialize
 */

get_header();
?>

	<div id="primary" class="content-area col l9 m12 s12" data-tmpl="<?php echo basename(__FILE__, '.php');?>">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(array(
			    'prev_text'           => '<i class="material-icons">navigate_before</i> 前の記事',
			    'next_text'           => '次の記事 <i class="material-icons">navigate_next</i>',
			    'screen_reader_text'  => '前後の記事へのリンク',
			));

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
