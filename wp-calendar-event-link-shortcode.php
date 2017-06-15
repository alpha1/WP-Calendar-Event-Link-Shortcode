<?php

/*
Plugin Name: WP Calendar Event Link Shortcode
Plugin URI: https://democratizeverything.org/plugins/sendgrid-events
Description:
Version: 0.0.2
Author: Democratize Everything
Author URI: https://democratizeverything.org/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Github URI: https://github.com/alpha1/WP-Calendar-Event-Link-Shortcode
*/


add_shortcode( 'calendar_link', 'wp_calendar_event_link' );
function wp_calendar_event_link( $atts, $content = null, $tag = null){
	$default_atts = array(


	);

	return "";
}
?>