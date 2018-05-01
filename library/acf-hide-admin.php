<?php

function awesome_acf_hide_acf_admin() {

    // get the current site url
	$site_url = get_bloginfo( 'url' );

	// an array of protected site urls
	$protected_urls = array(
		'http://pdxnaacp.flywheelsites.com',
		'https://pdxnaacp.flywheelsites.com',
		'http://pdxnaacp.org',
		'https://pdxnaacp.org'
	);

	// check if the current site url is in the protected urls array
	if ( in_array( $site_url, $protected_urls ) ) {

	// hide the acf menu item
		return false;

	} else {

	// show the acf menu item
		return true;
	}
}

add_filter( 'acf/settings/show_admin', 'awesome_acf_hide_acf_admin' );