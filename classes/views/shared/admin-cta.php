<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

$attributes          = array();
$attributes['class'] = trim( 'frm-cta ' . $class );

if ( $id ) {
	$attributes['id'] = $id;
}
?>

<div <?php FrmAppHelper::array_to_html_params( $attributes, true ); ?>>
	<div class="frm-cta-content">
		<h4 class="frm-cta-title">
			<?php echo FrmAppHelper::kses( $title, array( 'a', 'br', 'span', 'p', 'svg', 'use' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</h4><!-- .frm-cta-title -->

		<span class="frm-cta-text">
			<?php echo FrmAppHelper::kses( $description, array( 'a', 'br', 'span', 'p', 'svg', 'use' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</span><!-- .frm-cta-text -->
	</div><!-- .frm-cta-content -->

	<a href="<?php echo esc_url( $link_url ); ?>" target="_blank" class="frm-cta-link button button-primary frm-button-primary">
		<?php echo esc_html( $link_text ); ?>
	</a><!-- .frm-cta-link -->
</div><!-- .frm-cta -->
