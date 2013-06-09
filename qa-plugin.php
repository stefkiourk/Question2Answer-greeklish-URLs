<?php
/*
	Plugin Name: Greek-to-Greeklish URI conversion
	Plugin URI: 
	Plugin Description: Converts all greek locale chars to the corrensponding latin ones, thus avoiding the conversion to encoded URLs.
	Plugin Version: 1.0
	Plugin Date: 2013-03-03
	Plugin Author: Kiourkoulis Stefanos
	Plugin Author URI: http://stefki.com
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_overrides('qa-q-request-overrides.php');
