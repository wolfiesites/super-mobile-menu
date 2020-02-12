<?php
/*
Plugin Name: Super Mobile Menu
Plugin URI: https://github.com/CommanderxDoge/super-mobile-menu
Description: This plugin adds responsive mobile menu to your website
Version: 1.0
Author: Paweł Witek
Author URI: https://github.com/CommanderxDoge/
Text Domain: smm
License: MIT
*/
//make constans
define('PLUGIN_PREFIX', 'smm');
define('SMM_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SMM_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('SMM_PLUGIN_SETTINGS', 'super_mobile_settings');

//add helpers
include( plugin_dir_path( __FILE__ ) . '/inc/helpers/functions.php');
//add global options
include( plugin_dir_path( __FILE__ ) . '/inc/options/options.php');

Class Super_mobile_menu {
	public function __construct(){
		// add_action('wp_enqueue_scripts', [ $this, 'super_mobile_enqueue_scripts'] );
		add_action('admin_enqueue_scripts', [ $this, 'smm_admin_enqueue_scripts'] );
		add_action('wp_enqueue_scripts', [ $this, 'smm_front_enqueue_scripts'] );
		add_action ('admin_menu', [ $this, 'smm_add_menu_pages' ]);
		add_action('wp_footer', [ $this, 'smm_add_menu' ]);
		add_action('wp_ajax_import', [ $this, 'smm_import' ]);
	}
	public function smm_admin_enqueue_scripts() {
		wp_enqueue_script(PLUGIN_PREFIX . '-image-picker', plugin_dir_url(__FILE__) . '/assets/admin/js/media-upload-button.js', array(), false, true );
		wp_register_script(PLUGIN_PREFIX . '-iconpicker-js', plugin_dir_url(__FILE__) . '/assets/admin/js/jquery.fonticonpicker.min.js', array('jquery'), false, true );
		wp_register_script(PLUGIN_PREFIX . '-iconpicker-alpha-js', plugin_dir_url(__FILE__) . '/assets/admin/js/wp-color-picker-alpha.min.js', array('jquery', 'smm-iconpicker-js'), false, true );
		wp_register_script(PLUGIN_PREFIX . '-tabs-js', plugin_dir_url(__FILE__) . '/assets/admin/js/tabs.js', array('jquery'), false, true );
		wp_register_script(PLUGIN_PREFIX . '-helpers-js', plugin_dir_url(__FILE__) . '/assets/admin/js/helpers.js', array('jquery'), false, false );
		wp_register_script(PLUGIN_PREFIX . '-switcher-js', plugin_dir_url(__FILE__) . '/assets/admin/js/switcher.js', array('jquery'), false, true );
		wp_register_script(PLUGIN_PREFIX . '-iconrepeater-js', plugin_dir_url(__FILE__) . '/assets/admin/js/iconrepeater.js', array('jquery'), false, true );
		wp_register_script(PLUGIN_PREFIX . '-fontpicker-js', plugin_dir_url(__FILE__) . '/assets/admin/js/FontPicker.js', array('jquery'), false, true );
		wp_register_script(PLUGIN_PREFIX . '-fontpicker-settings-js', plugin_dir_url(__FILE__) . '/assets/admin/js/fontpicker-settings.js', array('jquery', PLUGIN_PREFIX . '-fontpicker-js'), false, true );
		wp_register_style(PLUGIN_PREFIX . '-options-css', plugin_dir_url(__FILE__) . '/assets/admin/css/option.css' );
		wp_register_style(PLUGIN_PREFIX . '-iconpicker-css', plugin_dir_url(__FILE__) . '/assets/admin/css/jquery.fonticonpicker.min.css' );
		//localize scripts
		wp_localize_script( PLUGIN_PREFIX . '-iconpicker-js', PLUGIN_PREFIX . '_vars', array(
			'fontAwesomeArray' => json_encode(smm_get_font_icons()),
		) );
		wp_localize_script( PLUGIN_PREFIX . '-switcher-js', PLUGIN_PREFIX . '_vars', array(
			'fontAwesomeArray' => json_encode(smm_get_font_icons()),
		) );
	}

	public function smm_front_enqueue_scripts() {
		wp_enqueue_style(PLUGIN_PREFIX . '-hamburger-css', plugin_dir_url(__FILE__) . '/assets/admin/css/hamburgers.min.css' );
		wp_enqueue_style(PLUGIN_PREFIX . '-animate-css', plugin_dir_url(__FILE__) . '/assets/front/css/animate.min.css' );
		wp_enqueue_style(PLUGIN_PREFIX . '-front-css', plugin_dir_url(__FILE__) . '/assets/front/css/style.css' );
	}

	public function smm_add_menu_pages(){
		$capability = 'manage_options';
		$icon = 'dashicons-menu';
		$menu_title = "Super Mobile Menu";
		add_menu_page(
			__( 'Super Mobile Menu' , 'super-mobile-menu' ),
			$menu_title,
			$capability,
			'super-menu',
			'wm_main_page_screen',
			$icon,
			120
		);
		function wm_main_page_screen(){
			include(plugin_dir_path( __FILE__ ) . '/inc/pages/menu_page.php');
		}
		add_action( 'admin_init', 'smm_register_settings' );
		function smm_register_settings(){
			register_setting( SMM_PLUGIN_SETTINGS, SMM_PLUGIN_SETTINGS );
		}
	}
//add template on front-end
	public function smm_add_menu(){ 
		include(plugin_dir_path( __FILE__ ) . '/inc/templates/front/mobile_menu.php');
	}
	public function smm_import(){
		include(SMM_PLUGIN_PATH . '/inc/import/settings.php');
	}	
}
new Super_mobile_menu;