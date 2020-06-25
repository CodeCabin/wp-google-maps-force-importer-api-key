<?php
/*
Plugin Name: WP Google Maps - Force Importer API Key
Description: This plugin forces the WP Google Maps importer to use a different API key to the browser map, which solves "Request Denied" issues with geocoding on import where the server does not transmit the HTTP referrer field correctly. There is a field for an alternative key present in 8.1.0 which makes this plugin redundant.
Version: 1.0
*/

add_action('init', function() {
	
	global $wpgmza;
	
	if(empty($wpgmza))
		return;	// Prevent crashing if the core plugin is not loaded
	
	$wpgmza->settings->importer_google_maps_api_key = "YOUR IP RESTRICTED KEY HERE";
	
});