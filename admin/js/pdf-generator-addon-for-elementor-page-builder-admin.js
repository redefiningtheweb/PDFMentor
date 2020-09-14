(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	jQuery(document).ready(function() {
        jQuery('.watermark_img_upload').click(function(){
             var inputField = jQuery(this).parent('div');
             tb_show('watermark', 'media-upload.php?TB_iframe=true');
             window.send_to_editor = function(html)
             {  
            	var url = jQuery(html).find('img').attr('src');
             	if(typeof url == 'undefined')
             		url = jQuery(html).attr('src');	
            	jQuery( '#watermark_img_url' ).val( url );
            	jQuery( '#watermark_img_backgrnd' ).find( 'img' ).attr( 'src', url );
            	jQuery( '.watermark_remove_img' ).show();
            	jQuery( '#watermark_img' ).show();
                tb_remove();
             };
             return false;
		});
		jQuery( document ).on( 'click', '.watermark_remove_img', function() {
			jQuery('#watermark_img_url').val('');
			jQuery('#watermark_img').attr('src', '');
			jQuery(this).hide();
			jQuery( '#watermark_img' ).hide();
			  return false;
		});
		
		jQuery('.rtw_bck_color').wpColorPicker();// for background-color 

		//remove header
		jQuery('#rtw_head_remv').click(function(){
			if(jQuery('#rtw_head_remv').is(':checked'))
			{
				jQuery('#rtw_text_remv_header').hide();
			}
			else
			{
				jQuery('#rtw_text_remv_header').show();
			}
		});
		
		//remove footer
		jQuery('#rtw_foot_remv').click(function(){
			if(jQuery('#rtw_foot_remv').is(':checked'))
			{
				jQuery('#rtw_text_remv_footer').hide();
			}
			else
			{
				jQuery('#rtw_text_remv_footer').show();
			}
		});

		//For background image

		var rtw_inp= jQuery( '#rtw_bckgrnd_img' ).find( 'img' ).attr( 'src' );
		console.log(rtw_inp);
		if(rtw_inp=='' || rtw_inp == 'undefined' )
		{
			$('.rtw_btn_bckgrnd_img_upload').show();
			$('.rtw_btn_remove_bckgrnd_img').hide();
		}
		else 
		{
			jQuery( '#rtw_bckgrnd_img' ).show();
			$('.rtw_btn_bckgrnd_img_upload').hide();
			$('.rtw_btn_remove_bckgrnd_img').show();
		}
		jQuery('.rtw_btn_bckgrnd_img_upload').on('click',function(){
			var rtw_inp=jQuery('#rtw_bckgrnd_img_btn').val();
			var rtw_inputField = jQuery(this).parent('div');
			tb_show('Background', 'media-upload.php?TB_iframe=true');
			window.send_to_editor = function(html)
			{ 
			var rtw_url = jQuery(html).find('img').attr('src');
			if(typeof rtw_url == 'undefined')
			rtw_url = jQuery(html).attr('src');	
			jQuery( '#rtw_bck_img_url' ).val( rtw_url );
			jQuery( '#rtw_bckgrnd_img' ).find( 'img' ).attr( 'src', rtw_url );
			jQuery( '.rtw_btn_remove_bckgrnd_img' ).show();
			jQuery( '.rtw_btn_bckgrnd_img_upload').hide();
			jQuery( '#rtw_bckgrnd_img_btn' ).show();
			tb_remove();
			};
			return false;
			});
	jQuery( document ).on( 'click', '.rtw_btn_remove_bckgrnd_img', function() {
		jQuery('#rtw_bck_img_url').val('');
		jQuery( '#rtw_bckgrnd_img' ).find( 'img' ).attr( 'src', '' );
		jQuery(this).hide();
		jQuery( '#rtw_bckgrnd_img_btn' ).hide();
		jQuery('.rtw_btn_bckgrnd_img_upload').show();
		  return false;
	});
   });

})( jQuery );

function showHideCheck(id,check) 
{
	if(check.checked) 
	{
		jQuery("#"+id).show();
		if(id=='add_watermark_image')
		{
			var value=jQuery("#doc-add-watermark-image-dimen-select").val();
			var value1=jQuery("#doc-add-watermark-image-pos-select").val();
			if(value=='array')
			{
				jQuery('#add_watermark_image_dimension').show();
			}
			if(value=='INT')
			{
            	jQuery('#add_watermark_image_dimen_integer').show();
			}
			if(value1=='arrays')
			{
				jQuery('#add_watermark_image_pos').show();	
			}
			
		}
	} 
	else 
	{
		jQuery("#"+id).hide();
		if(id=='add_watermark_image')
		{
			jQuery('#add_watermark_image_dimension').hide();
			jQuery('#add_watermark_image_dimen_integer').hide();
			jQuery('#add_watermark_image_pos').hide();
		}
	}
}


function showHideImage()
{
    var value=jQuery("#doc-add-watermark-image-dimen-select").val();
	if(value=='array')
	{
		jQuery('#add_watermark_image_dimension').show();
		jQuery('#add_watermark_image_dimen_integer').hide();
	}
	if(value=='INT')
	{
		jQuery('#add_watermark_image_dimen_integer').show();
		jQuery('#add_watermark_image_dimension').hide();
	}
	if(value!='INT' && value!='array')
	{
		jQuery('#add_watermark_image_dimension').hide();
		jQuery('#add_watermark_image_dimen_integer').hide();
	}
}


function showHidePos()
{
    var value=jQuery("#doc-add-watermark-image-pos-select").val();
	if(value=='arrays')
	{
		jQuery('#add_watermark_image_pos').show();
	}
	else
	{
		jQuery('#add_watermark_image_pos').hide();
	}
}
