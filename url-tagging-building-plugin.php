<?php
/*
Plugin Name: Url Tagging Builder
Plugin URI: http://www.pengunjungblog.com/plugin/url-tagging-builder/ ‎
Description: Url Tagging Builder help you tracking your marketing with custom campaign parameters Google Analytics.
Author: Syaiful Bahri
Author URI: http://www.pengunjungblog.com/
Version: 1.0
*/



/******************************
* global variables
******************************/

$utb_prefix = 'utb_';
$utb_plugin_name = 'Url Tagging Builder';


/*
This code is a currently a placeholder for code coming in a future version of Url Tagging Builder Plugin.
I prepare to add short link service (bit.ly, goo.gl, etc) . So, ignore it, but don't remove.
*/

define( 'UTB_DIR', plugin_dir_path( __FILE__ ) );
define( 'UTB_URL', plugin_dir_url( __FILE__ ) );
define( 'UTB_BASENAME', plugin_basename( __FILE__ ) );
define( 'UTB_LIB_DIR', UTB_DIR . 'includes/' );

/******************************
* includes
******************************/

include('includes/admin-page.php'); // the plugin options page HTML