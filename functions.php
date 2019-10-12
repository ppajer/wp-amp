<?php

require 'lib/php/class.WPAMP.php';

/*

 Configuration

 Set up your AMP libraries, Google fonts and custom styles here.

*/

$config = array(
		'amp_libs' => array('amp-sidebar', 'amp-consent', 'amp-analytics'),
		'amp_fonts' => array(
			'Montserrat' => array(900),
			'Roboto' => array(300)
		),
		'admin_styles_to_keep' => array('wp-admin', 'admin-bar', 'dashicons', 'open-sans'),
		'custom_styles' => array('style.css')
	);

WPAMP::setup($config);

?>