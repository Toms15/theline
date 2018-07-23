<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Line
 */

$logo = get_field('logo', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href='<?php echo get_template_directory_uri() . '/css/vendor.css'?>' rel='stylesheet' type='text/css'>
	<link href='<?php echo get_template_directory_uri() . '/css/main.css'?>' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<div class="icon__social">
				<a href="">
					<i class="fa fa-facebook-official"></i>
				</a>
				<a href="">
					<i class="fa fa-instagram"></i>
				</a>
				<a href="">
					<i class="fa fa-linkedin-square"></i>
				</a>
			</div>
		</nav><!-- #site-navigation -->
		<div class="menu__mobile">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>
	</header><!-- #masthead -->
	<?php
		get_template_part( 'section/content', 'header_mobile' );
	?>

	<div id="content" class="site-content">
