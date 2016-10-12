<?php
namespace Site_Customizer\inc\classes;

defined( 'ABSPATH' ) or die( 'File cannot be accessed directly' );

class Setup_Functions {
	public static function init() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'wp_admin_style' ) );
	}

	public static function wp_admin_style() {
		wp_register_style( 'admin-css', plugins_url( '../css/admin.css', __FILE__ ) );
		wp_enqueue_style( 'admin-css' );
		wp_register_style( 'admin-js', plugins_url( '../js/admin.js',  __FILE__ ) );
		wp_enqueue_style( 'admin-js' );
	}


	public static function detect_mobile_device() {
		$detect_device = '';
		if ( wp_is_mobile() ) {
			$detect_device = 'mobile';
		} else {
			$detect_device = 'desktop';
		}
		return $detect_device;
	}
}
