<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://redefiningtheweb.com/
 * @since      1.0.0
 *
 * @package    Pdf_Generator_Addon_For_Elementor_Page_Builder
 * @subpackage Pdf_Generator_Addon_For_Elementor_Page_Builder/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Pdf_Generator_Addon_For_Elementor_Page_Builder
 * @subpackage Pdf_Generator_Addon_For_Elementor_Page_Builder/admin
 * @author     SmarGasBord <smargasbord@gmail.com>
 */
class Pdf_Generator_Addon_For_Elementor_Page_Builder_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pdf_Generator_Addon_For_Elementor_Page_Builder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pdf_Generator_Addon_For_Elementor_Page_Builder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/pdf-generator-addon-for-elementor-page-builder-admin.css', array(), $this->version, 'all' );
        wp_enqueue_style( 'wp-color-picker' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pdf_Generator_Addon_For_Elementor_Page_Builder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pdf_Generator_Addon_For_Elementor_Page_Builder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/pdf-generator-addon-for-elementor-page-builder-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script('media-upload');
	    wp_enqueue_script('thickbox');
		wp_enqueue_style('thickbox');
		wp_enqueue_script( 'wp-color-picker');
		wp_register_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/pdf-generator-addon-for-elementor-page-builder-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );


	}

	/**
	 * Delete pdf when post updated.
	 *
	 * @since    1.0.1
	 */
	function rtw_pgaepb_pdf_delete( $rtw_post_id )
	{
		global $post;
		if( file_exists( RTW_PDF_DIR . '/' .$rtw_post_id. '.pdf' ) )
		{
			unlink(RTW_PDF_DIR . '/' .$rtw_post_id. '.pdf');
		}
		if( file_exists( RTW_PDF_DIR . '/' .$post->post_name. '.pdf' ) )
		{
			unlink(RTW_PDF_DIR . '/' . $post->post_name . '.pdf');
		}
	}


	/**
	 * This Function is used add menu setting
	 *
	 * @since    1.0.0
	 * @name rtw_pgaepb_add_menu_page
	 */
	public function rtw_pgaepb_add_menu_page()
	{
		add_menu_page(__('Elementor PDF Setting'),__('Elementor PDF Setting'),'manage_options','rtw_pgaepb',array($this,'rtw_pgaepb_add_menu_page_html'));
	}


	/**
	 * This Function is used add html for menu setting
	 *
	 * @since    1.0.0
	 * @name rtw_pgaepb_add_menu_page_html
	 */
	public function rtw_pgaepb_add_menu_page_html()
	{
		include(RTW_PGAEPB_DIR.'admin/partials/pdf-generator-addon-for-elementor-page-builder-admin-display.php');
	}

    /**
	 * This Function is used save admin settings
	 *
	 * @since    1.0.0
	 * @name rtw_pgaepb_save_admin_setting
	 */
	public function rtw_pgaepb_save_admin_setting()
	{
		if( isset( $_POST['rtw_pdf_submit'] ) )
		{
			$pdf_dir = RTW_PDF_DIR;
			array_map('unlink', glob("$pdf_dir/*.*"));
		}
		register_setting('rtw_pgaepb_header_setting','rtw_pgaepb_header_setting_opt');
		register_setting('rtw_pgaepb_footer_setting','rtw_pgaepb_footer_setting_opt');
		register_setting('rtw_pgaepb_basic_setting','rtw_pgaepb_basic_setting_opt');
		register_setting('rtw_pgaepb_css_setting','rtw_pgaepb_css_setting_opt');
		register_setting('rtw_pgaepb_watermark_setting','rtw_pgaepb_watermark_setting_opt');

	}

}
