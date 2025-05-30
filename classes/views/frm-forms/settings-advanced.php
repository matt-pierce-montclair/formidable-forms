<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
?>
<p class="howto">
	<?php esc_html_e( 'Modify the basic form settings here.', 'formidable' ); ?>
</p>

<div class="frm_grid_container">
	<p class="frm6 frm_form_field">
		<label for="frm_form_name">
			<?php esc_html_e( 'Form Title', 'formidable' ); ?>
		</label>
		<input type="text" id="frm_form_name" name="name" value="<?php echo esc_attr( $values['name'] ); ?>" />
	</p>

	<p class="frm6 frm_form_field">
		<label for="frm_form_key">
			<?php esc_html_e( 'Form Key', 'formidable' ); ?>
		</label>
		<input type="text" id="frm_form_key" name="form_key" value="<?php echo esc_attr( $values['form_key'] ); ?>" />
	</p>

	<p>
		<label for="frm_form_description">
			<?php esc_html_e( 'Form Description', 'formidable' ); ?>
		</label>
		<textarea id="frm_form_description" name="description" cols="50" rows="4"><?php echo FrmAppHelper::esc_textarea( $values['description'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></textarea>
	</p>

	<p class="frm8 frm_form_field">
		<label for="show_title" class="frm_inline_block">
			<input type="checkbox" name="options[show_title]" id="show_title" value="1" <?php checked( $values['show_title'], 1 ); ?> />
			<?php esc_html_e( 'Show the form title', 'formidable' ); ?>
		</label>
	</p>

	<p class="frm8 frm_form_field">
		<label for="show_description" class="frm_inline_block">
			<input type="checkbox" name="options[show_description]" id="show_description" value="1" <?php checked( $values['show_description'], 1 ); ?> />
			<?php esc_html_e( 'Show the form description', 'formidable' ); ?>
		</label>
	</p>

<?php
/**
 * Fires after the form description field.
 *
 * @since 6.18
 *
 * @param array $values The form values.
 */
do_action( 'frm_settings_after_form_description', $values );

if ( ! $values['is_template'] ) {
	$first_h3 = '';

	if ( has_action( 'frm_settings_buttons' ) ) {
		?>
		<h3 class="<?php echo esc_attr( $first_h3 ); ?>">
			<?php esc_html_e( 'Form Settings', 'formidable' ); ?>
		</h3>
		<div class="misc-pub-section">
			<?php do_action( 'frm_settings_buttons', $values ); ?>
			<div class="clear"></div>
		</div>
		<?php
		$first_h3 = '';
	}
}
?>

<h3 class="<?php echo esc_attr( $first_h3 ); ?>">
	<?php esc_html_e( 'On Submit', 'formidable' ); ?>
	<?php FrmAppHelper::tooltip_icon( __( 'Choose what will happen after the user submits this form.', 'formidable' ) ); ?>
</h3>

<input type="hidden" name="options[on_submit_migrated]" value="<?php echo empty( $values['on_submit_migrated'] ) ? '' : intval( $values['on_submit_migrated'] ); ?>" />

<p class="frm8 frm_form_field">
	<label for="no_save" class="frm_inline_block">
		<input type="checkbox" name="options[no_save]" id="no_save" value="1" <?php checked( $values['no_save'], 1 ); ?> />
		<?php esc_html_e( 'Do not store entries submitted from this form', 'formidable' ); ?>
	</label>
</p>

<?php
if ( is_callable( 'FrmFormsController::render_spam_settings' ) ) {
	FrmFormsController::render_spam_settings( $values );
}
FrmTipsHelper::pro_tip( 'get_form_settings_tip', 'p' );
?>

<!--AJAX Section-->
<h3><?php esc_html_e( 'AJAX', 'formidable' ); ?>
	<?php FrmAppHelper::tooltip_icon( __( 'Make stuff happen in the background without a page refresh', 'formidable' ), array( 'data-placement' => 'right' ) ); ?>
</h3>

<table class="form-table">
	<tr>
		<td>
			<label for="ajax_load" class="frm_inline_block">
				<input type="checkbox" name="options[ajax_load]" id="ajax_load" value="1"<?php echo $values['ajax_load'] ? ' checked="checked"' : ''; ?> /> <?php esc_html_e( 'Load and save form builder page with AJAX', 'formidable' ); ?>
				<?php FrmAppHelper::tooltip_icon( __( 'Recommended for long forms.', 'formidable' ) ); ?>
			</label>
		</td>
	</tr>
	<?php do_action( 'frm_add_form_ajax_options', $values ); ?>
	<tr>
		<td>
			<label for="ajax_submit">
				<input type="checkbox" name="options[ajax_submit]" id="ajax_submit" value="1" <?php checked( $values['ajax_submit'], 1 ); ?> />
				<?php esc_html_e( 'Submit this form with AJAX', 'formidable' ); ?>
				<?php FrmAppHelper::tooltip_icon( __( 'Submit the form without refreshing the page.', 'formidable' ) ); ?>
			</label>
		</td>
	</tr>
	<tr>
		<td>
			<label for="js_validate" class="frm_inline_block">
				<input type="checkbox" name="options[js_validate]" id="js_validate" value="1" <?php checked( $values['js_validate'], 1 ); ?> />
				<?php esc_html_e( 'Validate this form with javascript', 'formidable' ); ?>
				<?php FrmAppHelper::tooltip_icon( __( 'Required fields, email format, and number format can be checked instantly in your browser. You may want to turn this option off if you have any customizations to remove validation messages on certain fields.', 'formidable' ), array( 'data-container' => 'body' ) ); ?>
			</label>
		</td>
	</tr>
</table>

<input type="hidden" name="options[custom_style]" value="<?php echo esc_attr( $values['custom_style'] ); ?>" />

<!--Permissions Section-->
<?php
do_action( 'frm_add_form_perm_options', $values );

/*
 * We keep this section to make the frm_add_form_msg_options hook still work after we moved the Success message option
 * to the On Submit action, and moved the Draft message option to the below of its checkbox.
 */
if ( has_action( 'frm_add_form_msg_options' ) ) :
	?>
	<table class="form-table frm-fields">
		<?php do_action( 'frm_add_form_msg_options', $values ); ?>
	</table>
<?php endif; ?>

<!--Misc Section-->
<?php if ( has_action( 'frm_additional_form_options' ) ) { ?>
<h3><?php esc_html_e( 'Miscellaneous', 'formidable' ); ?></h3>
<table class="form-table">
	<?php do_action( 'frm_additional_form_options', $values ); ?>
</table>
<?php } ?>

</div>
