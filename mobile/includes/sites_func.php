<?php
if( !defined( 'ABSPATH')){ exit(); }

register_nav_menu('mobile_top_menu', __('Mobile top menu for guest','pntheme'));
register_nav_menu('mobile_top_menu_user', __('Mobile top menu for users','pntheme'));

if(function_exists('is_mobile') and is_mobile()){
	remove_action('wp_enqueue_scripts', 'my_themeinit', 0);
	add_action('wp_enqueue_scripts', 'my_mobthemeinit', 100);
	function my_mobthemeinit(){
		global $or_template_directory;

		$plugin = get_plugin_class();
		$plugin_url = get_premium_url();

		wp_deregister_style('open-sans');
		wp_enqueue_style('open-sans', is_ssl_url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic-ext,cyrillic"), false, $plugin->vers());		
		wp_enqueue_script("jquery-checkbox", $plugin_url .'js/jquery-checkbox/script.min.js', false, $plugin->vers('0.2'));
		wp_enqueue_script("jquery table", $plugin_url ."js/jquery-table/script.min.js", false, '0.2');
		wp_enqueue_script('jquery mobile site js', $or_template_directory.'/mobile/js/site.js', false, $plugin->vers());
		wp_enqueue_style('theme-style', $or_template_directory . "/mobile/style.css", false, $plugin->vers());
	}
}