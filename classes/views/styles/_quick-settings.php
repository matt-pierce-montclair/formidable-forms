<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
?>
<hr class="frm12"/>
<h2 class="frm12 frm-mb-0"><?php esc_html_e( 'Quick Settings', 'formidable' ); ?></h2>

<p class="frm12"><?php esc_html_e( 'Essential presets for a quick start. Explore advanced settings for more options', 'formidable' ); ?>.</p>

<div class="frm5 frm_form_field frm-mt-md"><label class="frm-style-item-heading"><?php esc_html_e( 'Primary', 'formidable' ); ?></label></div>
<div class="frm7 frm_form_field frm-mt-md">
	<?php
	new FrmPrimaryColorStyleComponent(
		null,
		$style->post_content['submit_bg_color'],
		array(
			'id'          => 'frm_style_qsettings_submit_bg_color',
			'frm_style'   => $frm_style,
			'style'       => $style,
			'action_slug' => 'submit_bg_color',
			'will_change' => array(
				$frm_style->get_field_name( 'submit_bg_color' ),
				$frm_style->get_field_name( 'slider_bar_color' ),
				$frm_style->get_field_name( 'slider_color' ),
				$frm_style->get_field_name( 'border_color_active' ),
				$frm_style->get_field_name( 'submit_border_color' ),
			),
		)
	);
	?>
</div>

<div class="frm5 frm_form_field"><label class="frm-style-item-heading"><?php esc_html_e( 'Field Text', 'formidable' ); ?></label></div>
<div class="frm7 frm_form_field">
	<?php
	new FrmPrimaryColorStyleComponent(
		null,
		$style->post_content['text_color'],
		array(
			'id'          => 'frm_style_qsettings_text_color',
			'frm_style'   => $frm_style,
			'style'       => $style,
			'action_slug' => 'text_color',
			'will_change' => array(
				$frm_style->get_field_name( 'text_color' ),
				$frm_style->get_field_name( 'section_color' ),
				$frm_style->get_field_name( 'check_label_color' ),
			),
		)
	);
	?>
</div>

<div class="frm5 frm_form_field"><label class="frm-style-item-heading"><?php esc_html_e( 'Field Border', 'formidable' ); ?></label></div>
<div class="frm7 frm_form_field">
	<?php
	new FrmPrimaryColorStyleComponent(
		null,
		$style->post_content['border_color'],
		array(
			'id'          => 'frm_style_qsettings_border_color',
			'frm_style'   => $frm_style,
			'style'       => $style,
			'action_slug' => 'border_color',
			'will_change' => array(
				$frm_style->get_field_name( 'border_color' ),
			),
		)
	);
	?>
</div>

<div class="frm5 frm_form_field"><label class="frm-style-item-heading"><?php esc_html_e( 'Button Text', 'formidable' ); ?></label></div>
<div class="frm7 frm_form_field">
	<?php
	new FrmPrimaryColorStyleComponent(
		null,
		$style->post_content['submit_text_color'],
		array(
			'id'          => 'frm_style_qsettings_submit_text_color',
			'frm_style'   => $frm_style,
			'style'       => $style,
			'action_slug' => 'submit_text_color',
			'will_change' => array(
				$frm_style->get_field_name( 'submit_text_color' ),
			),
		)
	);
	?>
</div>

<hr class="frm12"/>

<div class="frm5 frm_form_field"><label class="frm-style-item-heading"><?php esc_html_e( 'Vertical Spacing', 'formidable' ); ?></label></div>
<div class="frm7 frm_form_field">
	<?php
	new FrmSliderStyleComponent(
		null,
		$style->post_content['field_margin'],
		array(
			'id'          => 'field_margin',
			'max_value'   => 100,
			'will_change' => array(
				$frm_style->get_field_name( 'field_margin' ),
			),
		)
	);
	?>
</div>

<div class="frm5 frm_form_field"><label class="frm-style-item-heading"><?php esc_html_e( 'Input Field Padding', 'formidable' ); ?></label></div>
<div class="frm7 frm_form_field">
	<?php
	new FrmSliderStyleComponent(
		null,
		$style->post_content['field_pad'],
		array(
			'id'          => 'field_pad',
			'max_value'   => 100,
			'will_change' => array(
				$frm_style->get_field_name( 'field_pad' ),
			),
		)
	);
	?>
</div>
<hr class="frm12"/>
<div class="frm5 frm_form_field"><label class="frm-style-item-heading"><?php esc_html_e( 'Base Font Size', 'formidable' ); ?></label></div>
<div class="frm7 frm_form_field">
	<?php
	new FrmSliderStyleComponent(
		null,
		$style->post_content['field_font_size'],
		array(
			'id'          => 'field_font_size',
			'max_value'   => 100,
			'will_change' => array(
				$frm_style->get_field_name( 'field_font_size' ),
			),
		)
	);
	?>
</div>

<hr class="frm12"/>

<div class="frm5 frm_form_field">
	<label class="frm-style-item-heading"><?php esc_html_e( 'Field Shape', 'formidable' ); ?></label>
</div>
<div class="frm7 frm_form_field frm-sm-z-index">
	<?php
	new FrmFieldShapeStyleComponent(
		$frm_style->get_field_name( 'field_shape_type' ),
		$style->post_content['field_shape_type'],
		array(
			'id' => 'frm_field_shape',
		)
	);
	?>
</div>

<div class="frm5 frm_form_field frm_hidden" data-frm-element="field-shape-corner-radius">
	<label class="frm-style-item-heading"><?php esc_html_e( 'Corner Radius', 'formidable' ); ?></label>
</div>
<div class="frm7 frm_form_field frm_hidden frm-md-z-index" data-frm-element="field-shape-corner-radius">
	<?php
	new FrmSliderStyleComponent(
		null,
		$style->post_content['border_radius'],
		array(
			'id'          => 'frm_border_radius',
			'max_value'   => 50,
			'will_change' => array(
				$frm_style->get_field_name( 'border_radius' ),
			),
		)
	);
	?>
</div>

<hr class="frm12"/>

<a id="frm-style-advanced-settings-button" class="frm-button-secondary frm-margin-top-md frm-text-center" href="#"><?php esc_html_e( 'Show advanced settings', 'formidable' ); ?></a>