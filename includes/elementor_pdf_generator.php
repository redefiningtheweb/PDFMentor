<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_RTW_PDF extends Widget_Base {
	private $rtw_pgaepb_stng;
	public function get_name() {
		return 'wts-pricetable';
	}

	public function get_title() {
		return __( 'Pdf - Generator', 'elementor' );
	}

	public function get_icon() {
		return 'fa fa-file-pdf-o pdf_icon';
	}

    public function get_categories() {
		return [ 'basic' ];
	}


	protected function _register_controls() {
		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'PDF Settings', 'elementor' )
			]
		);

		$this->add_control(
			'pdf_width',
			[
				'label' => __( 'Pdf button Width', 'elementor' ),
				'type' => Controls_Manager::NUMBER,
				'placeholder' => __( 'Enter pdf button width', 'elementor' ),
				'default' => 60,
			]
		);

		$this->add_control(
			'pdf_height',
			[
				'label' => __( 'Pdf button Height', 'elementor' ),
				'type' => Controls_Manager::NUMBER,
				'placeholder' => __( 'Enter pdf button height', 'elementor' ),
				'default' => 60,
			]
		);

        $this->add_control(
		  'pdf_image',
		  [
		     'label' => __( 'PDF Button Icon', 'elementor' ),
		     'type' => Controls_Manager::MEDIA,
		     'default' => [
		        'url' => RTW_PGAEPB_URL.'/public/images/pdf_icon.png',
		     ],
		  ]
		);

        $this->add_control(
			'pdf_class',
			[
				'label' => __( 'Class of Html element which exclude from pdf', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'For multiple use commma', 'elementor' )
			]
		);

        $this->add_control(
			'pdf_id',
			[
				'label' => __( 'ID of Html element which exclude from pdf', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'For multiple use commma', 'elementor' )
			]
		);

        $this->end_controls_section();
	}

	protected function render() {
        $settings = $this->get_settings();
        $rtw_basic_stng = get_option('rtw_pgaepb_basic_setting_opt');
		if( !$rtw_basic_stng )
		{
			$rtw_basic_stng = array();
		}
		$rtw_css_stng = get_option('rtw_pgaepb_css_setting_opt');
		if( !$rtw_css_stng )
		{
			$rtw_css_stng = array();
		}
		$rtw_header_stng = get_option('rtw_pgaepb_header_setting_opt');
		if( !$rtw_header_stng )
		{
			$rtw_header_stng = array();
		}
		$rtw_footer_stng = get_option('rtw_pgaepb_footer_setting_opt');
		if( !$rtw_footer_stng )
		{
			$rtw_footer_stng = array();
		}
		$rtw_watermark_stng = get_option('rtw_pgaepb_watermark_setting_opt');
		if( !$rtw_watermark_stng )
		{
			$rtw_watermark_stng = array();
		}
		$this->rtw_pgaepb_stng = array_merge($rtw_basic_stng,$rtw_css_stng,$rtw_header_stng,$rtw_footer_stng,$rtw_watermark_stng);
        if( !isset( $_GET['generate_pdf']) )
		{
			global $post;
			
			if(empty( $this->rtw_pgaepb_stng['post_type'] ) )
			{
				return;
			}
			if ( !array_key_exists( get_post_type(), $this->rtw_pgaepb_stng['post_type'] ) )
			{
				return;
			}
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) 
			{
				 if( is_cart() || is_checkout() || is_shop() )
				{
					return;
				}
			}
		   	$rtw_pgaepb_img = wp_get_attachment_image_src( $settings['pdf_image']['id'], 'full' );
		   	if( !$rtw_pgaepb_img )
		   	{
		   		$rtw_pgaepb_img[0] = $settings['pdf_image']['url'];
		   	}
		   	$rtw_pgaepb_width = '50px';
		   	$rtw_pgaepb_height = '50px';
		   	if( isset( $settings['pdf_width'] ) && !empty( $settings['pdf_width'] ) )
		   	{
		   		$rtw_pgaepb_width = $settings['pdf_width'];
		   	}
		   	if( isset( $settings['pdf_height'] ) && !empty( $settings['pdf_height'] ) )
		   	{
		   		$rtw_pgaepb_height = $settings['pdf_height'];
		   	}

		   	// CHECK PDF FILE EXIST FOR CACHING
		   	if (isset($this->rtw_pgaepb_stng['file_name'] ) && $this->rtw_pgaepb_stng ['file_name'] == 'post_name') 
			{
				$rtw_file_path = RTW_PDF_DIR . '/' . $post->post_name . '.pdf';
			} 
			else 
			{
				$rtw_file_path = RTW_PDF_DIR . '/' .$post->ID. '.pdf';
			}
			$rtw_is_cache = true;
		   	if( !file_exists( $rtw_file_path ) ) 
		   	{
				$rtw_is_cache = false;
			}
			$rtw_html = '<div class="rtw_pgaepb_main">
			<a style="cursor:pointer;" target="_blank" rel="noindex,nofollow" data-post_url="'.esc_url ( add_query_arg ( 'generate_pdf', 'true', get_permalink ( $post->ID ) ) ).'" data-post_id="' .$post->ID. '" data-pdf_cache="'.$rtw_is_cache.'" title="Download PDF" class="rtw_pgaepb_pdf_button">
			<img alt="'.__('Download PDF','pdf-generator-addon-for-elementor-page-builder').'" src="' . $rtw_pgaepb_img[0] . '" width="'.$rtw_pgaepb_width.'" height="'.$rtw_pgaepb_height.'">
			</a>
			<img src="'.RTW_PGAEPB_URL.'/public/images/spinner.gif" class="rtw_pdf_gif">
			</div>';
			
			echo $rtw_html;
		}
	}

	protected function content_template() {
		?>
		<#

        box_html = '';

		print( separator_html );
		#>
		<?php
	}
}
Plugin::instance()->widgets_manager->register_widget_type( new Widget_RTW_PDF() );