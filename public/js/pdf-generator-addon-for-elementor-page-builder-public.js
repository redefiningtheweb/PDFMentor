(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write $ code here, so the
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

	$(document).ready( function(){
		$('.rtw_pgaepb_pdf_button').on( 'click', function() {
			$('.rtw_pdf_gif').show();
			var rtw_post_id = $(this).data('post_id');
			var rtw_post_url = $(this).data('post_url');
			var rtw_pdf_cache = $(this).data('pdf_cache');
			$.post(
				rtw_post_url,
				{
					'rtw_pgaepb_id': rtw_post_id,
					'rtw_pdf_cache': rtw_pdf_cache
				},
				function(response)
				{
					$('.rtw_pdf_gif').hide();
					if( response.status == true )
					{
						window.location.href = response.pdf_url
					}
					else
					{
						alert(rtw_pgaepb_obj.some_thing_msg);
					}
				},'json'
			);
		});
	});
})( jQuery );
