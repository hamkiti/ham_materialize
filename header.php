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

$logo_image_link = get_custom_logo();




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

	<header id="masthead" class="site-header">
		<div class="ornament_right ballon_taba1">
			<div class="ballon_taba2"></div>
		</div>
		<div class="ornament_left ballon_taba1">
			<div class="ballon_taba3"></div>
		</div>
		<div class="brand-logo">
  		<?php if ($logo_image_link) { ?>
			<?php echo $logo_image_link;?>
		<?php } else { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		<?php } ?>
		</div>
		
	<nav>
		<div class="nav-wrapper">
			
		
<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="hide-on-med-and-down">%3$s</ul>',
				'walker' => new Ham_Walker_Nav_Menu('dropdown')
			) );
?>
			<div class="right ">
			<a href="#" data-target="mobile-side-manu" class="sidenav-trigger right sidenav-trigger-btn">
				<span class="sidenav_closed">
					<i class="material-icons">menu</i>
				</span>

			</a>
</div>
		</div>
	</nav>


	</header><!-- #masthead -->
<div id="mobile-side-manu" class="right sidenav">
	<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu-mobile',
				'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
				'walker' => new Ham_Walker_Nav_Menu()
			) );
?>		
 <a class="sidenav-close-btn" href="#sidenav_close"><span>×閉じる</span></a>
</div>
<div id="page" class="site">






	<div id="content" class="site-content container row">
