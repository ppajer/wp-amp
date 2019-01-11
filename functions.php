<?php

/*

 Configuration

 Set up your AMP libraries and Google fonts here.

*/

$wpamp_enabled_plugins = array(
		'amp-sidebar', 'amp-consent', 'amp-analytics'
	);

$wpamp_custom_fonts = array(
	'Montserrat' => array(900),
	'Roboto' => array(300)
	);

function wpamp_libs() {
	foreach ($wpamp_enabled_plugins as $key => $value) {
		echo '<script async custom-element="'.$lib.'" src="https://cdn.ampproject.org/v0/'.$lib.'-0.1.js"></script>';
	}
}

function wpamp_fonts() {
	$fontBase = 'https://fonts.googleapis.com/css?family=';
	$fontFamilies = array();
	foreach ($wpamp_custom_fonts as $font => $sizes) {
		$fontFamilies[] = $font.':'.implode(',', $sizes);
	}

	echo '<link rel="stylesheet" href="'.$fontBase.implode('|', $fontFamilies).'">';
}

?>