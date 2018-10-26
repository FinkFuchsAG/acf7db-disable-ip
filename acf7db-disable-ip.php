<?php
/**
 * @package ACF7DB_Disable_IP
 * @version 1.0
 */
/*
Plugin Name: ACF/DB Disable IP
Plugin URI: https://github.com/FinkFuchsAG/acf7db-disable-ip
Description: This plugin disables the ip storage of the form subimssions.
Author: Manuel Dudda
Version: 1.0
Author URI: https://duddaweb.de/
Text Domain: acf7db-disable-ip
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'after_setup_theme', 'acf7db_disable_ip' );

function acf7db_disable_ip() {
	do_shortcode( '[cf7-db-display-ip]' );
}
