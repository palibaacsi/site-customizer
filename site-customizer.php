<?php
/*
* Plugin Name: Site Customizer
* Description: Simple Plugin to illustrate namespacing, classes, and functions combining to help customize a new site
* Version: 0.8.1
* Author: PTB
*/

namespace Site_Customizer;

defined( 'ABSPATH' ) or die( 'File cannot be accessed directly' );


// Autoloader will let us call classes directly rather than requiring the files first
require_once( 'autoload.php' );

inc\classes\Dev_Dashboard::init();
inc\classes\Logging_Helpers::init();
inc\classes\Setup_Functions::init();
inc\classes\WP_Logging::init();

