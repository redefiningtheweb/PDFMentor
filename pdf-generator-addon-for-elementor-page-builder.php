<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://redefiningtheweb.com/
 * @since             1.0.0
 * @package           Pdf_Generator_Addon_For_Elementor_Page_Builder
 *
 * @wordpress-plugin
 * Plugin Name:       PDF Generator Addon for Elementor Page Builder
 * Plugin URI:        http://redefiningtheweb.com/pdf-generator-addon-for-elementor-page-builder
 * Description:       Pdf Generator Addon for Wordpress Elementor Page Builder allows to create pdf of pages and post.
 * Version:           1.3.1
 * Author:            RedefiningTheWeb
 * Author URI:        http://redefiningtheweb.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pdf-generator-addon-for-elementor-page-builder
 * Domain Path:       /languages
 * Tested up to:      5.4.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RTW_PGAEPA_NAME_VERSION', '1.0.0' );

/**
 * Define Plugin Constant
 * @name rtw_pgaepb_define_constant
 *
 * @since    1.0.0
 */
function rtw_pgaepb_define_constant()
{
	if( !defined('RTW_PDF_DIR') )
	{
		define ('RTW_PDF_DIR', WP_CONTENT_DIR .'/uploads/rtw_pdf');
	}
	if( !defined('RTW_PGAEPB_DIR') )
	{
		define('RTW_PGAEPB_DIR', plugin_dir_path( __FILE__ ) );
	}
	if( !defined('RTW_PGAEPB_URL') )
	{
		define('RTW_PGAEPB_URL', plugin_dir_url( __FILE__ ) );
	}
	if( !defined('RTW_PGAEPB_HOME') )
	{
		define('RTW_PGAEPB_HOME', home_url() );
	}
}

//Plugin Constant end



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pdf-generator-addon-for-elementor-page-builder-activator.php
 */
function activate_pdf_generator_addon_for_elementor_page_builder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pdf-generator-addon-for-elementor-page-builder-activator.php';
	Pdf_Generator_Addon_For_Elementor_Page_Builder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pdf-generator-addon-for-elementor-page-builder-deactivator.php
 */
function deactivate_pdf_generator_addon_for_elementor_page_builder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pdf-generator-addon-for-elementor-page-builder-deactivator.php';
	Pdf_Generator_Addon_For_Elementor_Page_Builder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pdf_generator_addon_for_elementor_page_builder' );
register_deactivation_hook( __FILE__, 'deactivate_pdf_generator_addon_for_elementor_page_builder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pdf-generator-addon-for-elementor-page-builder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pdf_generator_addon_for_elementor_page_builder() {

	$plugin = new Pdf_Generator_Addon_For_Elementor_Page_Builder();
	$plugin->run();

}
rtw_pgaepb_define_constant();
run_pdf_generator_addon_for_elementor_page_builder();
