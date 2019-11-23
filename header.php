<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rkagency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto:400,300,100,700&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
	<?
	if( is_page_template('templates-subcategories.php') ){
		?>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<?
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="loaderArea">
		<div class="loader"></div>
	</div>

	
	<header class="header">
	<div class="header__top-line">

	<div class="desktop-menu">
	<div class="desktop-menu__wrapper w1200">
		<ul class="d-menu__left">
			<li class="active"><a href="javascript:void(0)">SEO</a></li>
			<li><a href="javascript:void(0)">PPC</a></li>
			<li><a href="javascript:void(0)">Marketing</a></li>
			<li><a href="javascript:void(0)">Development</a></li>
		</ul>
		<div class="d-menu__right">
			<div class="d-menu__content active">
				<div class="menu__title">SEO</div>
				<?

				wp_nav_menu( array(
					'menu' => 'seo',
					'menu_class'      => 'menu__list',
					'container'       => '',
				));

				?>
			</div>
			<div class="d-menu__content">
				<div class="menu__title">PPC</div>
				<?

				wp_nav_menu( array(
					'menu' => 'ppc',
					'menu_class'      => 'menu__list',
					'container'       => '',
				));

				?>
			</div>
			<div class="d-menu__content">
				<a href="<?=get_site_url() . '/marketing';?>" class="menu__title dropdown">Marketing</a>
				<?

				wp_nav_menu( array(
					'menu' => 'marketing',
					'menu_class'      => 'menu__list',
					'container'       => '',
				));

				?>
			</div>
			<div class="d-menu__content">
				<a href="<?=get_site_url() . '/razrabotka-sayta';?>" class="menu__title dropdown">Development</a>
				<?

				wp_nav_menu( array(
					'menu' => 'development',
					'menu_class'      => 'menu__list',
					'container'       => '',
				));

				?>
			</div>
		</div>
	</div>
</div>


		<div class="top-line w1200">
			<div class="top-line__left-col">
				<a href="/" class="top-line__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg" alt="Логотип">
				</a>
				<?
				wp_nav_menu( array(
					'menu' => 'header-menu',
					'menu_id'        => 'primary-menu',
					'menu_class'      => 'top-line__menu',
					'container'       => '',
				));

				?>
			</div>
			<div class="top-line__menu__phone">
				<span><a href="tel:0955381829">095 53 81 829</a></span>
			</div>	
		</div>
	</div>
</header>


<style>
	.breadcrumb.pl{
		margin-top: 80px;
		max-width: 1200px;
		margin: 90px auto 0 auto;
	}
	.entry-header{
		display: none;
	}
</style>

	<?
	
	
if ( is_page('10') ) {
	return false;
	}
else {
	?>
		<div class="breadcrumb pl">
	<?
	if(function_exists('bcn_display'))
	{
		bcn_display();
	}
}
	
	?>




