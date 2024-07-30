<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
if ( $component['has-multiple-values'] ) : ?>
	<div class="<?php echo esc_attr( $component_class ); ?>" <?php echo esc_attr( $component_attr ); ?> >
		<div class="frm-slider-component frm-has-multiple-values frm-group-sliders" data-display-sliders="top,bottom" data-type="vertical" data-max-value="<?php echo (int) $component['max_value']; ?>">
			<div class="frm-flex-justify">
				<div class="frm-slider-container">
					<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-top-bottom' ); ?>
					<span class="frm-slider">
						<span class="frm-slider-active-track">
							<span class="frm-slider-bullet">
								<span class="frm-slider-value-label"><?php echo (int) $component['vertical']['value']; ?></span>
							</span>
						</span>
					</span>
				</div>
				<div class="frm-slider-value">
					<input type="text" value="<?php echo (int) $component['vertical']['value']; ?>" />
					<select>
						<option <?php selected( $component['vertical']['unit'], 'px' ); ?> value="px">px</option>
						<option <?php selected( $component['vertical']['unit'], 'em' ); ?> value="em">em</option>
						<option <?php selected( $component['vertical']['unit'], '%' ); ?> value="%">%</option>
					</select>
				</div>
			</div>
		</div>
		<div class="frm-slider-component frm-has-multiple-values frm_hidden" data-type="top" data-max-value="<?php echo (int) $component['max_value']; ?>">
			<div class="frm-flex-justify">
				<div class="frm-slider-container">
					<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-top' ); ?>
					<span class="frm-slider">
						<span class="frm-slider-active-track">
							<span class="frm-slider-bullet">
								<span class="frm-slider-value-label"><?php echo (int) $component['top']['value']; ?></span>
							</span>
						</span>
					</span>
				</div>
				<div class="frm-slider-value">
					<input type="text" value="<?php echo (int) $component['top']['value']; ?>" />
					<select>
						<option <?php selected( $component['top']['unit'], 'px' ); ?> value="px">px</option>
						<option <?php selected( $component['top']['unit'], 'em' ); ?> value="em">em</option>
						<option <?php selected( $component['top']['unit'], '%' ); ?> value="%">%</option>
					</select>
				</div>
			</div>
		</div>
		<div class="frm-slider-component frm-has-multiple-values frm_hidden" data-type="bottom" data-max-value="<?php echo (int) $component['max_value']; ?>">
			<div class="frm-flex-justify">
				<div class="frm-slider-container">
					<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-bottom' ); ?>
					<span class="frm-slider">
						<span class="frm-slider-active-track">
							<span class="frm-slider-bullet">
								<span class="frm-slider-value-label"><?php echo (int) $component['bottom']['value']; ?></span>
							</span>
						</span>
					</span>
				</div>
				<div class="frm-slider-value">
					<input type="text" value="<?php echo (int) $component['bottom']['value']; ?>" />
					<select>
						<option <?php selected( $component['bottom']['unit'], 'px' ); ?> value="px">px</option>
						<option <?php selected( $component['bottom']['unit'], 'em' ); ?> value="em">em</option>
						<option <?php selected( $component['bottom']['unit'], '%' ); ?> value="%">%</option>
					</select>
				</div>
			</div>
		</div>
		<div class="frm-slider-component frm-has-multiple-values frm-group-sliders" data-display-sliders="left,right" data-type="horizontal" data-max-value="<?php echo (int) $component['max_value']; ?>">
			<div class="frm-flex-justify">
				<div class="frm-slider-container">
					<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-left-right' ); ?>
					<span class="frm-slider">
						<span class="frm-slider-active-track">
							<span class="frm-slider-bullet">
								<span class="frm-slider-value-label"><?php echo (int) $component['horizontal']['value']; ?></span>
							</span>
						</span>
					</span>
				</div>
				<div class="frm-slider-value">
					<input type="text" value="<?php echo (int) $component['horizontal']['value']; ?>" />
					<select>
						<option <?php selected( $component['horizontal']['unit'], 'px' ); ?> value="px">px</option>
						<option <?php selected( $component['horizontal']['unit'], 'em' ); ?> value="em">em</option>
						<option <?php selected( $component['horizontal']['unit'], '%' ); ?> value="%">%</option>
					</select>
				</div>
			</div>
		</div>
		<div class="frm-slider-component frm-has-multiple-values frm_hidden" data-type="left" data-max-value="<?php echo (int) $component['max_value']; ?>">
			<div class="frm-flex-justify">
				<div class="frm-slider-container">
					<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-left' ); ?>
					<span class="frm-slider">
						<span class="frm-slider-active-track">
							<span class="frm-slider-bullet">
								<span class="frm-slider-value-label"><?php echo (int) $component['left']['value']; ?></span>
							</span>
						</span>
					</span>
				</div>
				<div class="frm-slider-value">
					<input type="text" value="<?php echo (int) $component['left']['value']; ?>" />
					<select>
						<option <?php selected( $component['left']['unit'], 'px' ); ?> value="px">px</option>
						<option <?php selected( $component['left']['unit'], 'em' ); ?> value="em">em</option>
						<option <?php selected( $component['left']['unit'], '%' ); ?> value="%">%</option>
					</select>
				</div>
			</div>
		</div>
		<div class="frm-slider-component frm-has-multiple-values frm_hidden" data-type="right" data-max-value="<?php echo (int) $component['max_value']; ?>">
			<div class="frm-flex-justify">
				<div class="frm-slider-container">
					<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-right' ); ?>
					<span class="frm-slider">
						<span class="frm-slider-active-track">
							<span class="frm-slider-bullet">
								<span class="frm-slider-value-label"></span>
							</span>
						</span>
					</span>
				</div>
				<div class="frm-slider-value">
					<input type="text" value="<?php echo (int) $component['right']['value']; ?>" />
					<select>
						<option <?php selected( $component['right']['unit'], 'px' ); ?> value="px">px</option>
						<option <?php selected( $component['right']['unit'], 'em' ); ?> value="em">em</option>
						<option <?php selected( $component['right']['unit'], '%' ); ?> value="%">%</option>
					</select>
				</div>
			</div>
		</div>
		<input type="hidden" <?php echo esc_attr( $field_name ); ?> value="<?php echo esc_attr( $field_value ); ?>" id="<?php echo esc_attr( $component['id'] ); ?>" />
	</div>
<?php else : ?>
	<div>
		<?php if ( empty( $component['independent_fields'] ) ) : ?>
			<div class="frm-slider-component <?php echo esc_attr( $component_class ); ?>" <?php echo esc_attr( $component_attr ); ?> data-display-sliders="top,bottom" data-type="vertical" data-max-value="<?php echo (int) $component['max_value']; ?>">
				<div class="frm-flex-justify">
					<div class="frm-slider-container">
						<?php if ( ! empty( $component['icon'] ) ) : ?>
							<?php FrmAppHelper::icon_by_class( $component['icon'] ); ?>
						<?php endif; ?>
						<span class="frm-slider">
							<span class="frm-slider-active-track">
								<span class="frm-slider-bullet">
									<span class="frm-slider-value-label"><?php echo (int) $field_value; ?></span>
								</span>
							</span>
						</span>
					</div>
					<div class="frm-slider-value">
						<input type="text" value="<?php echo (int) $field_value; ?>" />
						<input type="hidden" <?php echo esc_attr( $field_name ); ?> value="<?php echo esc_attr( $field_value ); ?>" id="<?php echo esc_attr( $component['id'] ); ?>" />
						<select>
							<option <?php selected( $component['unit_measurement'], 'px' ); ?> value="px">px</option>
							<option <?php selected( $component['unit_measurement'], 'em' ); ?> value="em">em</option>
							<option <?php selected( $component['unit_measurement'], '%' ); ?> value="%">%</option>
						</select>
					</div>
				</div>
			</div>
		<?php else : ?>
			<div class="<?php echo esc_attr( $component_class ); ?>" <?php echo esc_attr( $component_attr ); ?> >
				<div class="frm-slider-component frm-group-sliders frm-has-independent-fields" data-display-sliders="top,bottom" data-max-value="<?php echo (int) $component['max_value']; ?>">
					<div class="frm-flex-justify">
						<div class="frm-slider-container">
							<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-top-bottom' ); ?>
							<span class="frm-slider">
								<span class="frm-slider-active-track">
									<span class="frm-slider-bullet">
										<span class="frm-slider-value-label"><?php echo (int) $field_value; ?></span>
									</span>
								</span>
							</span>
						</div>
						<div class="frm-slider-value">
							<input type="text" value="<?php echo (int) $field_value; ?>" />
							<select>
								<option <?php selected( $component['unit_measurement'], 'px' ); ?> value="px">px</option>
								<option <?php selected( $component['unit_measurement'], 'em' ); ?> value="em">em</option>
								<option <?php selected( $component['unit_measurement'], '%' ); ?> value="%">%</option>
							</select>
						</div>
					</div>

					<?php 
					foreach ( $component['independent_fields'] as $field ) :
						?>
						<div class="frm-slider-component frm-independent-slider-field frm_hidden" data-type="<?php echo esc_attr( $field['type'] ); ?>" data-max-value="<?php echo (int) $component['max_value']; ?>">
							<div class="frm-flex-justify">
								<div class="frm-slider-container">
									<?php if ( ! empty( $component['icon'] ) ) : ?>
										<?php FrmAppHelper::icon_by_class( 'frm_icon_font frm-margin-' . $field['type'] ); ?>
									<?php endif; ?>
									<span class="frm-slider">
										<span class="frm-slider-active-track">
											<span class="frm-slider-bullet">
												<span class="frm-slider-value-label"><?php echo (int) $field['value']; ?></span>
											</span>
										</span>
									</span>
								</div>
								<div class="frm-slider-value">
									<input type="text" value="<?php echo (int) $field['value']; ?>" />
									<input type="hidden" <?php echo esc_attr( $field['name'] ); ?> value="<?php echo esc_attr( $field['value'] ); ?>" id="<?php echo esc_attr( $field['id'] ); ?>" />
									<select>
										<option <?php selected( $component['unit_measurement'], 'px' ); ?> value="px">px</option>
										<option <?php selected( $component['unit_measurement'], 'em' ); ?> value="em">em</option>
										<option <?php selected( $component['unit_measurement'], '%' ); ?> value="%">%</option>
									</select>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>