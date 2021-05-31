<?php
/*
Plugin Name: Youtubesubs
Plugin URI: https://wordpress.org/plugins/youtubesubs/
Description: Displays YouTube sub button and count
Version: 1.0.0
Author: Cleiton Andrade
Author URI: https://wordpress.org/plugins/youtubesubs/
*/

//Exit if accessed directly
if( !defined( 'ABSPATH' )){
    exit;
}

// Load Scripts
require_once( plugin_dir_path( __FILE__ ).'/includes/youtubesubs-scripts.php' );
