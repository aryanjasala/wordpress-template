<?php
/**
 * Config file
 * This file is loaded very early (immediately after `wp-config.php`), which means that most WordPress APIs,
 * classes, and functions are not available. The code below should be limited to pure PHP.
 *
 * @package AryanX
 */

// Disable updates for theme and plugin.
define( 'DISALLOW_FILE_MODS', true );

// Set IP from Cloudflare to RealIP in site health.
if ( isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) ) {
	$_SERVER['REMOTE_ADDR']    = $_SERVER['HTTP_CF_CONNECTING_IP'];
	$_SERVER['HTTP_X_REAL_IP'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
}
