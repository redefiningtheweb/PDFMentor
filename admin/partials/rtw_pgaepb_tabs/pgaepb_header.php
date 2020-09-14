<?php
settings_fields('rtw_pgaepb_header_setting');
$rtw_wprh_get_setting = get_option('rtw_pgaepb_header_setting_opt');
?>
<table class="wp-list-table form-table">
<tr>
		<th class="tr1"><?php _e('Remove Header', 'pdf-generator-addon-for-elementor-page-builder');?></th>
		
		<td class="tr2"><input type="checkbox" id ="rtw_head_remv" name="rtw_pgaepb_header_setting_opt[rtw_remove_header]" value="1" <?php echo isset( $rtw_wprh_get_setting['rtw_remove_header'] ) && $rtw_wprh_get_setting['rtw_remove_header'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php _e('Check it if you want to remove header', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		
		</tr>
</table>
<table id="rtw_text_remv_header" class="wp-list-table form-table <?= isset($rtw_wprh_get_setting['rtw_remove_header'])  ? 'display_none' : '' ?>">
	<tbody>
		<tr>
			<th><?php _e('Header Html', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td>
				<?php
					$rtw_content = isset( $rtw_wprh_get_setting['rtw_header_html'] ) ? $rtw_wprh_get_setting['rtw_header_html'] : '';
					$rtw_setting = array(
						'wpautop' => true,
						'media_buttons' => true,
						'textarea_name' => 'rtw_pgaepb_header_setting_opt[rtw_header_html]',
						'textarea_rows' => 7
					);
					wp_editor($rtw_content, 'rtw_pgaepb_header_editor', $rtw_setting );
				?>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Header Top Margin', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="number" min="0" name="rtw_pgaepb_header_setting_opt[header_top_margin]" value="<?php echo isset( $rtw_wprh_get_setting['header_top_margin'] ) ? $rtw_wprh_get_setting['header_top_margin'] : '7'; ?>" />
				<div class="descr"><?php _e('Enter your required top margin (By default 7)', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Header Section Font', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<select name="rtw_pgaepb_header_setting_opt[header_font_family]">
				<?php 
					foreach ( $rtw_fonts as $key => $value ) 
					{ 
						?>
							<option value="<?php echo $value;?>" <?php echo isset( $rtw_wprh_get_setting['header_font_family'] ) && $rtw_wprh_get_setting['header_font_family'] == $value ? 'selected="selected"' : '';?>><?php echo $key;?></option>
						<?php
				 	}
				?>
				</select>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Header Section Font Size', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<input type="number" min="0" name="rtw_pgaepb_header_setting_opt[header_font_size]"
				value="<?php echo isset( $rtw_wprh_get_setting['header_font_size'] ) ? $rtw_wprh_get_setting['header_font_size'] : '20'; ?>" />
				<div class="descr"><?php _e('Enter your required font size for Pdf Header(By default 15)', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
	</tbody>	
</table>