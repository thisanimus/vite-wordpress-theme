<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Base meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="language" content="english" />
	<meta name="description" content="{{ description }}" />

	<!-- Reassure the browser that we are mobile-friendly -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="view-transition" content="same-origin" />
	<?php wp_head(); ?>

<body <?php body_class(); ?>>

	<header>
		<?php if (!(is_front_page() || is_home())) : bloginfo('name'); ?>
		<?php else : ?>
			<h1><?php bloginfo('name'); ?></h1>
		<?php endif; ?>

		<p><?php bloginfo('description'); ?></p>
		<?php if (has_nav_menu('main_menu')) : ?>
			<nav><?php wp_nav_menu(array('theme_location' => 'main_menu')); ?></nav>
		<?php endif; ?>
	</header>
	<?php wp_body_open(); ?>