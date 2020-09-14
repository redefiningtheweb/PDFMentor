<?php
settings_fields('rtw_pgaepb_basic_setting');
$rtw_wprh_get_setting = get_option('rtw_pgaepb_basic_setting_opt');
?>
<table class="wp-list-table form-table">
	<tbody>
		<tr>
			<th><?php _e('Hide Page Title', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[hide_title]" value="1" <?php echo isset( $rtw_wprh_get_setting['hide_title'] ) && $rtw_wprh_get_setting['hide_title'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php _e('Check it if you want to hide page title.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php _e('Include Featured Image', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[featured_img]" value="1" <?php echo isset( $rtw_wprh_get_setting['featured_img'] ) && $rtw_wprh_get_setting['featured_img'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php _e('Check it if you want to show featured image.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php _e('Show Post Date', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[post_date]" value="1" <?php echo isset( $rtw_wprh_get_setting['post_date'] ) && $rtw_wprh_get_setting['post_date'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php _e('Check it if you want to show date of post.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php _e('Show Post Tags', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[post_tag]" value="1" <?php echo isset( $rtw_wprh_get_setting['post_tag'] ) && $rtw_wprh_get_setting['post_tag'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php _e('Check it if you want to show tag list of post.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php _e('Show Post Category List', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[post_category]" value="1" <?php echo isset( $rtw_wprh_get_setting['post_category'] ) && $rtw_wprh_get_setting['post_category'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php _e('Check it if you want to show category of the post.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('PDF File Name', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<select name="rtw_pgaepb_basic_setting_opt[file_name]">
					<option>Select</option>
					<option value="post_name" <?php echo isset( $rtw_wprh_get_setting['file_name'] ) && $rtw_wprh_get_setting['file_name'] == 'post_name' ? 'selected="selected"' : '';?>><?php _e('Post Name', 'pdf-generator-addon-for-elementor-page-builder');?>
					</option>
					<option value="post_id" <?php echo isset( $rtw_wprh_get_setting['file_name'] ) && $rtw_wprh_get_setting['file_name'] == 'post_id' ? 'selected="selected"' : '';?>><?php _e('Post ID', 'pdf-generator-addon-for-elementor-page-builder');?>
					</option>
				 	}
				?>
				</select>
				<div class="descr"><?php _e('Select what is name of generated pdf file.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Rtl Support', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<input type="checkbox" name="rtw_pgaepb_basic_setting_opt[rtl]" value="1" <?php echo isset( $rtw_wprh_get_setting['rtl'] ) && $rtw_wprh_get_setting['rtl'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php _e('Check it if you want generate pdf in Arabic or languages which start from right align.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Allowed Post Types', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<?php
					$rtw_get_post = get_post_types( array('public' => true), 'names' );
					unset($rtw_get_post['attachment']);
					foreach ( $rtw_get_post as $key => $value) 
					{
						?>
		                	<p>
		                		<input name="rtw_pgaepb_basic_setting_opt[post_type][<?php echo $value?>]" value="1" <?= ( isset( $rtw_wprh_get_setting['post_type'][$value] ) && $rtw_wprh_get_setting['post_type'][$value] == 1  ? 'checked="checked"' : ''); ?> type="checkbox"/>
		            			<?php echo ucfirst($value);?>
		                	</p>
					   <?php 
					}
				?>
				<div class="descr"><?php _e('Choose on which post type you want to generate pdf.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
		<th class="tr1"><?php _e('Background Color', 'pdf-generator-addon-for-elementor-page-builder');?></th>
		
		<td class="tr2">
				<input type="text" class="rtw_bck_color" value="<?= ( isset ( $rtw_wprh_get_setting['rtw_back_color'] ) ? $rtw_wprh_get_setting['rtw_back_color'] : ''); ?>" name="rtw_pgaepb_basic_setting_opt[rtw_back_color]" />
				<div class="descr"><?php _e('Select color for generated pdf file.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
		    <th class="tr1"><?php _e('Background Image', 'pdf-generator-addon-for-elementor-page-builder');?></th>
		    <td class="tr2"><?php $rtw_src= isset($rtw_wprh_get_setting['rtw_bck_img'] ) ? $rtw_wprh_get_setting['rtw_bck_img'] : '';?>
			   <div id="rtw_bckgrnd_img"><img id="rtw_bckgrnd_img_btn" width="60px" height="60px" src = "<?php echo esc_url($rtw_src); ?>"/>
				</div>
				<div id="rtw_bck_img"><input type="hidden" id="rtw_bck_img_url" name="rtw_pgaepb_basic_setting_opt[rtw_bck_img]" value="<?php echo esc_attr($rtw_src); ?>" />
				
				<button type="button" class="rtw_btn_bckgrnd_img_upload button"><?php esc_html_e( 'Upload/Add image', 'pdf-generator-addon-for-elementor-page-builder'); ?></button><br>
				<button type="button" class="rtw_btn_remove_bckgrnd_img button"><?php esc_html_e( 'Remove image', 'pdf-generator-addon-for-elementor-page-builder'); ?></button>
				<div class="descr"><?php _e('Select background image for generated pdf file.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
	</tbody>	
</table>