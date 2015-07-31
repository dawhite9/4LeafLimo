<?php
/*
Plugin Name: SVGMagic Plugin
Plugin URI: http://www.andibauer.at/svg-magic-wordpress-plugin/
Description: This plugin includes SVGMagic to your site and enables .svg Upload to your media library.
Version: 1.1
Author: andibauer
Author URI: http://www.andibauer.at/
License: GPL3
*/

// Register main function
function svgmagic_include() {
	wp_enqueue_script('svgmagic', plugins_url('/js/jquery.svgmagic.min.js', __FILE__), false, '1.0');
	wp_enqueue_script('svgmagicinc', plugins_url('/js/svgmagic.js', __FILE__), false, '1.0');
}
add_action('wp_enqueue_scripts', 'svgmagic_include');

// Enable Localisation
load_plugin_textdomain('svgmagic', false, basename( dirname( __FILE__ ) ) . '/languages' );

// Enable SVG Upload
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Fix to show svg in Media Manager
// TODO: show svg in media manager VIA JS

// Fix to insert right
function wg_fix_svg_size_attributes( $out, $id )
{
	$image_url  = wp_get_attachment_url( $id );
	$file_ext   = pathinfo( $image_url, PATHINFO_EXTENSION );

	if ( ! is_admin() || 'svg' !== $file_ext )
	{
		return false;
	}

	return array( $image_url, null, null, false );
}
add_filter( 'image_downsize', 'wg_fix_svg_size_attributes', 10, 2 );

// Admin Screen
// TODO: Admin Options