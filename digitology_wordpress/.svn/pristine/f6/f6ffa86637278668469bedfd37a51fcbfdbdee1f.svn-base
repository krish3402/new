<?php
/**
 * Admin View: Settings
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="wrap">
	<h1><?php _e( 'Forkit Settings', 'forkit-ribbon' ); ?></h1>
	<form method="post" id="mainform" action="options.php">
		<?php settings_fields( 'forkit_ribbon_settings_fields' ); ?>
		<?php $options = wp_parse_args( get_option( 'forkit_ribbon_options', array() ), array( 'ribbon_text' => '', 'ribbon_link' => '', 'detached_text' => '', 'curtain_content' => '', 'uninstall_data' => 0 ) ); ?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row" class="titledesc">
					<label for="ribbon_text"><?php _e( 'Ribbon Text', 'forkit-ribbon' ) ?></label>
				</th>
				<td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Ribbon Text', 'forkit-ribbon' ) ?></span></legend>
						<input class="regular-text" type="text" name="forkit_ribbon_options[ribbon_text]" id="ribbon_text" value="<?php echo esc_attr( $options['ribbon_text'] ); ?>" placeholder="<?php _e( 'Enter Ribbon Text', 'forkit-ribbon' ); ?>" />
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<label for="ribbon_link"><?php _e( 'Ribbon Link', 'forkit-ribbon' ) ?></label>
				</th>
				<td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Ribbon Link', 'forkit-ribbon' ) ?></span></legend>
						<input class="regular-text code" type="url" name="forkit_ribbon_options[ribbon_link]" id="ribbon_link" value="<?php echo esc_attr( $options['ribbon_link'] ); ?>" placeholder="<?php _e( 'Enter Ribbon Link', 'forkit-ribbon' ); ?>" />
						<p class="description" id="tagline-description"><?php _e( 'If curtain content is empty then fork ribbon acts as a link.', 'forkit-ribbon' ); ?></p>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<label for="detached_text"><?php _e( 'Detached Text', 'forkit-ribbon' ) ?></label>
				</th>
				<td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Detached Text', 'forkit-ribbon' ) ?></span></legend>
						<input class="regular-text" type="text" name="forkit_ribbon_options[detached_text]" id="detached_text" value="<?php echo esc_attr( $options['detached_text'] ); ?>" placeholder="<?php _e( 'Enter Detached Text', 'forkit-ribbon' ); ?>" />
						<p class="description" id="tagline-description"><?php _e( 'In a few words, this is displayed when ribbon is hovered.', 'forkit-ribbon' ); ?></p>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<label for="curtain_content"><?php _e( 'Curtain Content', 'forkit-ribbon' ) ?></label>
				</th>
				<td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Curtain Content', 'forkit-ribbon' ) ?></span></legend>
						<?php
							$settings = array(
								'textarea_name' => 'forkit_ribbon_options[curtain_content]',
								'quicktags'     => array( 'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,close' ),
								'tinymce'       => array(
									'theme_advanced_buttons1' => 'bold,italic,strikethrough,separator,bullist,numlist,separator,blockquote,separator,justifyleft,justifycenter,justifyright,separator,link,unlink,separator,undo,redo,separator',
									'theme_advanced_buttons2' => '',
								),
								'editor_css'    => '<style>#wp-curtain_content-editor-container .wp-editor-area{height:175px; width:100%;}</style>'
							);

							wp_editor( htmlspecialchars_decode( $options['curtain_content'] ), 'curtain_content', apply_filters( 'forkit_ribbon_curtain_editor_settings', $settings ) );
						?>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<label for="uninstall_data"><?php _e( 'Remove All Data', 'forkit-ribbon' ) ?></label>
				</th>
				<td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Remove All Data', 'forkit-ribbon' ) ?></span></legend>
						<label><input type="checkbox" name="forkit_ribbon_options[uninstall_data]" id="uninstall_data" value="1" <?php checked( '1', $options['uninstall_data'] ); ?> /> <?php _e( 'Remove all data when using the "Delete" link on the plugins screen.', 'forkit-ribbon' ); ?></label>
					</fieldset>
				</td>
			</tr>
		</table>
		<p class="submit">
			<input name="save" class="button-primary" type="submit" value="<?php esc_attr_e( 'Save Changes', 'forkit-ribbon' ); ?>" />
		</p>
	</form>
</div>
