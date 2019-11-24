<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ham_materialize
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
	

	<nav>
		<div class="nav-wrapper">
		<div class="brand-logo">
		<?php the_custom_logo();?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		
		</div>
		
<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="right hide-on-med-and-down">%3$s</ul>',
			) );
?>
			<div class="right "><a href="#" data-target="primary-menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
</div>
		</div>
	</nav>

<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu-mobile',
				'items_wrap'      => '<ul id="%1$s" class="right sidenav">%3$s</ul>',
			) );
?>		

	</header><!-- #masthead -->




	<div id="content" class="site-content container row">
