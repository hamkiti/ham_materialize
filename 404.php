<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ham_materialize
 */

get_header();
?>
<div class="page-template-full-width">
	<div id="primary" class="content-area col l9 m12 s12" data-tmpl="<?php echo basename(__FILE__, '.php');?>">


			<article class="error-404 not-found">


				<div class="page-content" style="text-align:center;">
					
					お探しのページが見つかりません。<br>
					ご指定のページは、削除されたか移動した可能性がございます。<br>
					<br>
					<br>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPページに戻る</a>
				</div><!-- .page-content -->
			</article><!-- .error-404 -->


	</div><!-- #primary -->
</div>
<?php
get_footer();
