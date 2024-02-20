<?php
require_once get_template_directory() . '/lib/declutter.php';
require_once get_template_directory() . '/lib/vite.php';
new WPVite(isChild: false);


if (!function_exists('vitewp_setup')) {
	function vitewp_setup() {
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');

		add_theme_support(
			'html5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption'
			)
		);
	}
	add_action('after_setup_theme', 'vitewp_setup');
}

function vitewp_register_menus() {
	register_nav_menu('main_menu', 'Main Menu');
}
add_action('after_setup_theme', 'vitewp_register_menus');
