<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
?>
<div class="frm_wrap frm-views-info-page">
	<?php
	FrmAppHelper::get_admin_header(
		array(
			'label' => __( 'Views', 'formidable' ),
			'form'  => $form,
			'close' => $form ? admin_url( 'admin.php?page=formidable&frm_action=views&form=' . $form->id ) : '',
		)
	);
	?>
	<div class="frmcenter frm-m-12" style="max-width:706px;margin:auto;padding-top:50px;">
		<h2 style="margin-bottom:15px;"><?php esc_html_e( 'Show and Edit Entries with Views', 'formidable' ); ?></h2>
		<p style="max-width:400px;margin:0 auto 32px;">
			<?php esc_html_e( 'Bring entries to the front-end of your site for full-featured applications or just to show the content.', 'formidable' ); ?>
		</p>
		<?php
		$upgrade_link_args = array(
			'medium' => 'views-info',
			'plan'   => 'view',
			'class'  => 'frm-mb-md frm-button-primary frm-gradient',
		);
		FrmAddonsController::conditional_action_button( 'views', $upgrade_link_args );
		?>

		<a href="https://formidableforms.com/demos/" class="frm-mb-md frm-ml-xs frm-button-secondary"><?php esc_html_e( 'View Demos', 'formidable' ); ?></a>

		<div class="frm-views-features frm_grid_container">
			<div class="frm4">
				<div class="frm-views-feature">
					<div class="frm-views-feature__icon" style="--gcolor-start: #7E5CF6; --gcolor-end: #4E24F2;">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25h5.25a2 2 0 0 0 2-2V12M12 19.25H6.75a2 2 0 0 1-2-2V12M12 19.25V4.75m0 0H6.75a2 2 0 0 0-2 2V12M12 4.75h5.25a2 2 0 0 1 2 2V12m-14.5 0h14.5"/></svg>
					</div>
					<div class="frm-views-feature__title"><?php esc_html_e( 'Grid', 'formidable' ); ?></div>
					<div class="frm-views-feature__desc">
						<?php esc_html_e( 'Create a view and write less code', 'formidable' ); ?>
					</div>
				</div>
			</div>
			<div class="frm4">
				<div class="frm-views-feature">
					<div class="frm-views-feature__icon" style="--gcolor-start: #4098FD; --gcolor-end: #056FFC;">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 8.75a2 2 0 0 1 2-2h10.5a2 2 0 0 1 2 2v8.5a2 2 0 0 1-2 2H6.75a2 2 0 0 1-2-2v-8.5ZM8 4.75v3.5M16 4.75v3.5M7.75 10.75h8.5"/></svg>
					</div>
					<div class="frm-views-feature__title"><?php esc_html_e( 'Calendar', 'formidable' ); ?></div>
					<div class="frm-views-feature__desc">
						<?php esc_html_e( 'Create a view and write less code', 'formidable' ); ?>
					</div>
				</div>
			</div>
			<div class="frm4">
				<div class="frm-views-feature">
					<div class="frm-views-feature__icon" style="--gcolor-start: #67DADC; --gcolor-end: #30C9CC;">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.75 19.25h12.5a1 1 0 0 0 1-1V5.75a1 1 0 0 0-1-1H5.75a1 1 0 0 0-1 1v12.5a1 1 0 0 0 1 1ZM19.25 9.25h-14M19.25 14.75h-14"/></svg>
					</div>
					<div class="frm-views-feature__title"><?php esc_html_e( 'Table', 'formidable' ); ?></div>
					<div class="frm-views-feature__desc">
						<?php esc_html_e( 'Create a view and write less code', 'formidable' ); ?>
					</div>
				</div>
			</div>
			<div class="frm4">
				<div class="frm-views-feature">
					<div class="frm-views-feature__icon" style="--gcolor-start: #5EA93D; --gcolor-end: #258602;">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.3 11c0 4-6.3 8.3-6.3 8.3S5.7 15 5.7 11c0-3.5 3-6.3 6.3-6.3s6.3 2.8 6.3 6.3Z"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.3 11a2.3 2.3 0 1 1-4.6 0 2.3 2.3 0 0 1 4.6 0Z"/></svg>
					</div>
					<div class="frm-views-feature__title"><?php esc_html_e( 'Map', 'formidable' ); ?></div>
					<div class="frm-views-feature__desc">
						<?php esc_html_e( 'Create a view and write less code', 'formidable' ); ?>
					</div>
				</div>
			</div>
			<div class="frm4">
				<div class="frm-views-feature">
					<div class="frm-views-feature__icon" style="--gcolor-start: #F4AC3C; --gcolor-end: #EF8A01;">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15.75 8.75 3.5 3.25-3.5 3.25m-7.5-6.5L4.75 12l3.5 3.25m5-9.5-2.5 12.5"/></svg>
					</div>
					<div class="frm-views-feature__title"><?php esc_html_e( 'Classic', 'formidable' ); ?></div>
					<div class="frm-views-feature__desc">
						<?php esc_html_e( 'Create a view and write less code', 'formidable' ); ?>
					</div>
				</div>
			</div>
			<div class="frm4">
				<div class="frm-views-feature">
					<div class="frm-views-feature__icon" style="--gcolor-start: #FF6853; --gcolor-end: #FF3119;">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 10.75v6.5c0 1.1.9 2 2 2h7.5a2 2 0 0 0 2-2v-4.5a2 2 0 0 0-2-2h-9.5Zm0 0v-1c0-1.1.9-2 2-2h3.06a2 2 0 0 1 1.76 1.04l1.07 1.96m-4.89-3v-1c0-1.1.9-2 2-2h3.06a2 2 0 0 1 1.76 1.04l1.07 1.96h1.61a2 2 0 0 1 2 2v4.5a2 2 0 0 1-2 2h-1"/></svg>
					</div>
					<div class="frm-views-feature__title"><?php esc_html_e( 'Ready made solution', 'formidable' ); ?></div>
					<div class="frm-views-feature__desc">
						<?php esc_html_e( 'Create a view and write less code', 'formidable' ); ?>
					</div>
				</div>
			</div>
		</div><!--- End .frm-views-features -->

		<div class="frm_grid_container">
			<div class="frm6">
				<div class="frm-views-learn-more">
					<h3><?php esc_html_e( 'Learn more', 'formidable' ); ?></h3>
					<p><?php esc_html_e( 'Bring entries to the fron-end of your site for full-featured applications or just to show the content.', 'formidable' ); ?></p>
					<a href="https://formidableforms.com/features/display-form-data-views/" class="frm-button-secondary"><?php esc_html_e( 'Learn more', 'formidable' ); ?></a>
				</div>
			</div>
			<div class="frm6">
				<div class="frm-video-wrapper">
					<iframe width="843" height="200" src="https://www.youtube.com/embed/pmYbQ79wonQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<hr style="margin-top:35px;" />

		<div class="frm_grid_container frm-views-reviews">
			<div class="frm4">
				<div class="frm-views-review">
					<svg xmlns="http://www.w3.org/2000/svg" width="78" height="19" fill="none"><g clip-path="url(#a)"><path fill="#00749A" d="M45 7.5h-3v.3c1 0 1 .2 1 1.4v2.2c0 1.2 0 1.4-1 1.4-.8-.1-1.3-.5-2-1.2l-.7-.9c1-.2 1.6-.8 1.6-1.6 0-1-.8-1.6-2.3-1.6h-3v.3c1 0 1.1.2 1.1 1.4v2.2c0 1.2-.1 1.4-1 1.4v.3H39v-.3c-1 0-1-.2-1-1.4v-.6h.2L40 13H45c2.4 0 3.4-1.3 3.4-2.8 0-1.6-1-2.8-3.4-2.8Zm-7 2.7V8h.6c.8 0 1.1.5 1.1 1.1 0 .6-.3 1.1-1.1 1.1h-.7Zm7 2.4c-.7 0-.8-.2-.8-1V8h.8c1.8 0 2.1 1.3 2.1 2.3 0 1-.3 2.3-2 2.3ZM26.2 10.9l1.2-3.5c.3-1 .2-1.3-.9-1.3v-.3h3.2V6c-1 0-1.3.3-1.8 1.5L26 13.4h-.2L24 8l-1.8 5.3h-.2l-1.9-5.8c-.4-1.2-.7-1.5-1.6-1.5v-.3h3.7V6c-1 0-1.3.3-.9 1.3l1.1 3.5 1.7-5.1h.4l1.6 5ZM32 13.3c-1.9 0-3.4-1.3-3.4-3s1.5-3 3.4-3c1.8 0 3.4 1.3 3.4 3s-1.6 3-3.4 3Zm0-5.5c-1.6 0-2.1 1.4-2.1 2.5s.5 2.5 2 2.5c1.6 0 2.2-1.4 2.2-2.5s-.6-2.5-2.1-2.5Z"/><path fill="#464342" d="M52.6 12.8v.3h-3.9v-.3c1.2 0 1.4-.3 1.4-2V8c0-1.7-.2-2-1.4-2v-.3h3.5c1.8 0 2.7.9 2.7 2 0 1.3-1 2.2-2.7 2.2h-1v.8c0 1.7.3 2 1.4 2Zm-.4-6.4h-1v3h1c1 0 1.4-.7 1.4-1.5s-.4-1.5-1.4-1.5ZM66.6 11.5l-.1.3c-.2.6-.4.8-1.6.8h-.2c-.9 0-1-.2-1-1.4v-.8c1.3 0 1.4.1 1.4 1h.3V8.9h-.3c0 .9-.1 1-1.4 1v-2h.9c1.2 0 1.4.3 1.5.8l.1.4h.3l-.1-1.6h-5v.3c1 0 1.1.2 1.1 1.4v2.2c0 1-.1 1.3-.9 1.4-.7-.1-1.2-.5-1.8-1.2l-.8-.9c1-.2 1.6-.8 1.6-1.6 0-1-.8-1.6-2.3-1.6h-3v.3c1 0 1.1.2 1.1 1.4v2.2c0 1.2-.1 1.4-1 1.4v.3h3.3v-.3c-1 0-1.1-.2-1.1-1.4v-.6h.3l1.9 2.3h7v-1.6h-.2Zm-9-1.3V8h.7c.8 0 1 .5 1 1.1 0 .6-.2 1.1-1 1.1h-.7ZM70 13.3c-.7 0-1.3-.3-1.5-.5-.1 0-.3.3-.3.5h-.3V11h.3c.1 1.1 1 1.8 2 1.8.5 0 .9-.3.9-.8s-.4-.8-1-1.1l-1-.5c-.7-.3-1.2-.9-1.2-1.6 0-.8.7-1.5 1.8-1.5.5 0 1 .2 1.3.4l.2-.4h.3v2h-.3c-.1-.8-.6-1.5-1.5-1.5-.4 0-.9.3-.9.7 0 .4.4.7 1.2 1l1 .5c.7.4 1 1 1 1.5 0 1-.9 1.8-2 1.8ZM75.2 13.3c-.7 0-1.3-.3-1.5-.5-.1 0-.3.3-.3.5h-.3V11h.3c.1 1.1 1 1.8 2 1.8.5 0 .9-.3.9-.8s-.4-.8-1-1.1l-1-.5c-.7-.3-1.2-.9-1.2-1.6 0-.8.7-1.5 1.8-1.5.5 0 1 .2 1.3.4l.2-.4h.3v2h-.3c-.1-.8-.6-1.5-1.5-1.5-.4 0-.9.3-.9.7 0 .4.4.7 1.2 1l1 .5c.7.4 1 1 1 1.5 0 1-.9 1.8-2 1.8ZM1.7 9.3c0 3 1.7 5.6 4.2 6.8L2.3 6.3c-.4 1-.6 2-.6 3ZM14.2 9a4 4 0 0 0-.6-2.1c-.4-.6-.8-1.1-.8-1.8 0-.6.6-1.3 1.3-1.3A7.4 7.4 0 0 0 3 5.2h2.5c.4 0 .4.5 0 .6h-.8L7.3 14 8.9 9 7.8 5.8H7c-.4 0-.4-.7 0-.7l2 .1h2c.4 0 .4.5 0 .6h-.8l2.7 8 .7-2.4c.3-1 .6-1.8.6-2.4Z"/><path fill="#464342" d="M9.3 10 7 16.5a7.5 7.5 0 0 0 4.6-.1v-.1L9.3 10ZM15.7 5.7v.8a7 7 0 0 1-.5 2.7l-2.3 6.6a7.5 7.5 0 0 0 2.8-10Z"/><path fill="#464342" d="M9.1.6a8.7 8.7 0 1 0 0 17.5A8.7 8.7 0 0 0 9.2.6Zm0 17A8.3 8.3 0 1 1 9.1 1a8.3 8.3 0 0 1 0 16.6Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M.4.6h76.8V18H.4z"/></clipPath></defs></svg>
					<div class="frm-views-review__rating">
						<?php FrmAddonsHelper::show_five_star_rating( '#00749A' ); ?>
						<span><strong>4.8</strong> / 5</span>
					</div>

					<div class="frm-views-review__desc">
						<?php esc_html_e( 'Based on 1.200+ reviews on WordPress.org', 'formidable' ); ?>
					</div>
				</div><!-- End .frm-views-review -->
			</div>

			<div class="frm4">
				<div class="frm-views-review">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="none"><g fill="#EC573C" clip-path="url(#a)"><path d="M15.7 5.8h-2.6c0-.4.3-.7.8-1l.5-.2c.9-.4 1.3-1 1.3-1.7 0-.5-.2-1-.6-1.2-.4-.3-.8-.5-1.4-.5-.4 0-.8.2-1.2.4a2 2 0 0 0-.7.8l.7.8c.3-.6.7-.9 1.3-.9.5 0 .8.3.8.6s-.2.5-.7.8l-.3.1c-.7.4-1.2.8-1.4 1.2-.3.4-.4 1-.4 1.7v.1h3.9v-1ZM15.4 8H11L9 11.8h4.3l2.2 3.8 2.1-3.8-2.1-3.7Z"/><path d="M9.3 14.3a5 5 0 0 1 0-10L11 .9A8.8 8.8 0 0 0 .5 9.3a8.7 8.7 0 0 0 13.9 7l-1.9-3.2a5 5 0 0 1-3.2 1.2Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M.5.6H18V18H.5z"/></clipPath></defs></svg>

					<div class="frm-views-review__rating">
						<?php FrmAddonsHelper::show_five_star_rating( '#EC573C' ); ?>
						<span><strong>4.8</strong> / 5</span>
					</div>

					<div class="frm-views-review__desc">
						<?php esc_html_e( 'Based on 87 reviews on G2', 'formidable' ); ?>
					</div>
				</div><!-- End .frm-views-review -->
			</div>

			<div class="frm4">
				<div class="frm-views-review">
					<svg xmlns="http://www.w3.org/2000/svg" width="85" height="19" fill="none"><g clip-path="url(#a)"><path fill="#FF9D28" d="M1.1 7h11.5V2.7L1.2 7Z"/><path fill="#68C5ED" d="M12.7 2.7V18L18 .6l-5.4 2Z"/><path fill="#044D80" d="M12.7 7H8.3l4.3 11V7Z"/><path fill="#E54747" d="M1.1 7 9.5 10 8.3 7H1Z"/><path fill="#044D80" d="m27.6 14-.3.2-.6.3-.8.3c-1.2.2-2.4 0-3.5-.3-.6-.3-1-.7-1.5-1.2-.4-.5-.7-1-.9-1.7-.4-1.5-.4-3 0-4.5a6 6 0 0 1 1-1.7c.4-.6.9-1 1.5-1.2.6-.3 1.4-.4 2.2-.4.7 0 1.3 0 2 .3l.6.3.4.3.2.3.1.4c0 .2 0 .4-.2.6l-.6.6-.3-.4a3.2 3.2 0 0 0-3.5-.4l-.9 1c-.2.2-.3.6-.4 1.1-.2 1-.2 1.9 0 2.8 0 .4.3.8.5 1.2a2.6 2.6 0 0 0 2.3 1.1h.8l.7-.3.5-.4.3-.2.3.2.2.4.2.3v.7l-.3.3Zm8.2-1.2c0 .8 0 1.4.4 1.8l-.6.2h-.5c-.4 0-.7 0-.9-.2a1 1 0 0 1-.4-.6l-.9.6-1.4.2h-.8a2.1 2.1 0 0 1-1.4-1.2c-.2-.3-.2-.7-.2-1.1 0-.6 0-1 .4-1.3.2-.4.5-.6 1-.8.3-.2.8-.4 1.2-.4l1.3-.2h.7v-.3c0-.4-.1-.7-.4-.9l-1-.2c-.4 0-.9 0-1.2.2l-1 .5-.4-.6-.1-.5.2-.4.7-.4c.7-.3 1.4-.4 2.2-.4.5 0 1 0 1.4.2l1 .5.5 1 .2 1.2v3Zm-2-1.9h-.5l-.7.1-.7.2-.5.5a1 1 0 0 0-.2.6c0 .3 0 .6.2.8.2.2.5.3.9.3s.8-.1 1-.3l.4-.3V11Zm6-3.1c.1-.2.3-.4.7-.6a3.3 3.3 0 0 1 2.5-.1c.4 0 .7.3 1 .5l.6 1.2c.2.6.3 1.1.3 1.9a5.4 5.4 0 0 1-1 3.3l-1 .7c-.7.2-1.4.2-2 0-.3 0-.7-.2-1-.5V18h-2.3V7.1h.8l.9.1c.2.1.4.3.5.6Zm2.8 3v-1l-.3-.7a1 1 0 0 0-.6-.5l-.7-.1c-.4 0-.8 0-1 .2l-.2.6v3.4l.5.3.8.1c.5 0 .9-.2 1.1-.6.3-.4.4-1 .4-1.7Zm4 2.7-.2-.7V4.7H47.6l.4.2c.2 0 .3.2.4.3l.1.7V7h2.2v1.7h-2.2V12c0 .7.4 1 1 1l.7-.1.3-.2.2-.1.3.5.1.5-.1.4-.5.4-.7.3h-1c-.5.1-1 0-1.5-.3-.4-.3-.6-.6-.8-1Zm9.7-.2c.2 0 .5 0 .7-.2l.5-.1.4-.3.3-.3.4.6.2.6c0 .3 0 .5-.4.7a3 3 0 0 1-.9.4 6 6 0 0 1-1.5.2c-.4 0-1 0-1.4-.2-.5-.1-1-.4-1.3-.6a4.4 4.4 0 0 1-1.3-3.3l.3-1.8c.3-.5.5-.9.9-1.2a3 3 0 0 1 1.2-.7c.9-.3 1.9-.3 2.8 0 .4.2.8.5 1 .8l.5 1.1c.2.4.2.8.2 1.3V11.2h-4.7c0 .5.2 1 .5 1.5.3.3.9.5 1.6.5ZM57 10a2 2 0 0 0-.4-1.2c-.1-.3-.5-.5-1-.5-.4 0-.8.2-1 .4-.3.4-.4.8-.4 1.3H57Zm5.7-2.2.3-.3.3-.3.6-.3h1.4l.2.4.2.3-.6 1.6-.5-.4h-.7c-.3 0-.5 0-.8.2a1 1 0 0 0-.3.7V15h-2.2V7h.7c.4 0 .7 0 1 .2.2.1.3.3.4.6Zm6.1 0 .3-.3.4-.3.5-.3h1.4l.3.4.1.3c0 .5-.3 1-.5 1.6l-.5-.4H70c-.3 0-.5 0-.8.2a1 1 0 0 0-.3.7V15h-2.2V7h.7c.4 0 .6 0 1 .2.1.1.3.3.3.6Zm10.4 5c0 .8.1 1.4.4 1.8l-.6.2h-.5c-.4 0-.7 0-.9-.2a1 1 0 0 1-.4-.6l-.9.6-1.4.2h-.8a2.1 2.1 0 0 1-1.4-1.2c-.2-.3-.2-.7-.2-1.1 0-.6.1-1 .4-1.3.2-.4.5-.6 1-.8.3-.2.8-.4 1.2-.4l1.3-.2h.7v-.3c0-.4 0-.7-.3-.9a2 2 0 0 0-1-.2c-.5 0-1 0-1.3.2l-1 .5-.4-.6L73 8l.2-.4.7-.4c.7-.3 1.4-.4 2.2-.4.5 0 1 0 1.4.2l1 .5.5 1 .2 1.2v3Zm-2-1.9h-.5l-.8.1-.7.2-.5.5a1 1 0 0 0-.2.6c0 .3.1.6.3.8.1.2.4.3.9.3a2 2 0 0 0 1-.3l.3-.3.1-.3V11Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M.7.6h83.5V18H.7z"/></clipPath></defs></svg>
					<div class="frm-views-review__rating">
						<?php FrmAddonsHelper::show_five_star_rating( '#FF9E28' ); ?>
						<span><strong>4.9</strong> / 5</span>
					</div>

					<div class="frm-views-review__desc">
						<?php esc_html_e( 'Based on 99 reviews on Capterra', 'formidable' ); ?>
					</div>
				</div><!-- End .frm-views-review -->
			</div>
		</div>

		<div class="frm-views-guarantee">
			<svg viewBox="0 0 62 63" xmlns="http://www.w3.org/2000/svg" width="62" height="63" fill="none"><path fill="#12B76A" fill-rule="evenodd" d="M13.28 7.4c-.86.05-1.72.1-2.35.64-.62.54-.8 1.4-.97 2.26a4.5 4.5 0 0 1-.8 2.1c-.5.57-1.24.83-1.97 1.09-.83.29-1.65.58-2.1 1.27-.45.7-.38 1.56-.3 2.44.06.78.13 1.56-.19 2.24-.3.67-.95 1.13-1.6 1.6-.7.5-1.4 1.01-1.65 1.8-.24.8.07 1.6.38 2.4.29.73.57 1.47.46 2.2-.12.74-.6 1.36-1.1 1.99-.54.69-1.08 1.37-1.09 2.2-.01.82.51 1.5 1.04 2.19.47.61.95 1.23 1.05 1.96.1.74-.2 1.48-.5 2.21-.33.81-.66 1.62-.44 2.4.22.8.92 1.3 1.62 1.8a4.3 4.3 0 0 1 1.55 1.59c.3.67.22 1.46.13 2.24-.09.88-.18 1.74.25 2.43.44.7 1.25.98 2.06 1.26.74.25 1.47.51 1.95 1.07.47.55.6 1.32.75 2.1.15.85.3 1.7.92 2.25.61.53 1.47.57 2.34.61.77.04 1.56.07 2.17.47.62.4.97 1.1 1.32 1.8.39.78.78 1.55 1.51 1.88.74.34 1.58.13 2.42-.08a4.34 4.34 0 0 1 2.23-.17c.7.21 1.24.78 1.77 1.35.59.63 1.18 1.25 1.98 1.37.81.11 1.56-.33 2.32-.77.68-.4 1.36-.79 2.1-.8.73 0 1.4.4 2.07.79.75.43 1.49.87 2.3.74.81-.12 1.41-.75 2.02-1.38.54-.58 1.1-1.15 1.8-1.36.7-.21 1.46-.03 2.22.15.84.2 1.67.4 2.42.06.75-.35 1.15-1.12 1.56-1.9.36-.7.73-1.4 1.35-1.8.63-.41 1.4-.45 2.19-.5.86-.04 1.72-.09 2.35-.63.62-.54.8-1.4.97-2.25a4.5 4.5 0 0 1 .8-2.12c.5-.56 1.24-.82 1.97-1.08.83-.29 1.64-.58 2.1-1.27.45-.7.38-1.56.3-2.44-.06-.78-.13-1.56.18-2.24.32-.67.96-1.13 1.6-1.6.71-.5 1.42-1.01 1.66-1.8.24-.8-.07-1.6-.38-2.4-.29-.73-.57-1.47-.46-2.2.12-.74.6-1.36 1.1-1.99.54-.69 1.08-1.37 1.09-2.2.01-.82-.51-1.5-1.04-2.19a4.35 4.35 0 0 1-1.05-1.97c-.1-.73.2-1.47.5-2.2.33-.81.66-1.62.44-2.4-.22-.8-.92-1.3-1.62-1.8a4.3 4.3 0 0 1-1.55-1.59c-.3-.67-.22-1.46-.13-2.24.09-.88.18-1.74-.25-2.43-.44-.7-1.25-.98-2.06-1.26-.74-.25-1.47-.51-1.95-1.07-.47-.56-.61-1.33-.75-2.1-.15-.86-.3-1.72-.92-2.25-.61-.53-1.47-.57-2.34-.61-.78-.04-1.56-.07-2.17-.47-.62-.4-.97-1.1-1.32-1.8-.39-.78-.78-1.55-1.51-1.88-.74-.34-1.58-.13-2.42.08-.76.18-1.53.37-2.23.17A4.3 4.3 0 0 1 37.6 2c-.59-.63-1.18-1.25-1.98-1.37-.81-.11-1.56.33-2.32.77-.68.4-1.36.79-2.1.8-.73 0-1.4-.4-2.08-.79-.74-.43-1.48-.87-2.3-.74-.8.12-1.4.75-2 1.38a4.47 4.47 0 0 1-1.8 1.36c-.71.21-1.47.03-2.23-.15-.84-.2-1.67-.4-2.42-.06-.75.35-1.15 1.12-1.56 1.9-.36.7-.73 1.4-1.35 1.8-.63.41-1.4.45-2.19.5Z" clip-rule="evenodd"/><path fill="#fff" d="M11.3 27.06a.99.99 0 0 0 .02-.35.66.66 0 0 0-.1-.27.56.56 0 0 0-.24-.2.92.92 0 0 0-.33-.13l-2.2-.51.18-.9 2.2.51c.24.05.43.15.62.27a1.52 1.52 0 0 1 .64 1.03c.04.22.03.45-.04.71-.04.26-.15.48-.27.67-.12.19-.27.35-.45.44-.16.12-.35.19-.57.23-.2.03-.44.02-.65-.04l-2.2-.5.18-.9 2.2.5c.13.03.26.05.37.03a.74.74 0 0 0 .3-.09c.07-.05.16-.11.2-.2a.49.49 0 0 0 .15-.3ZM9.17 23.13l.05-.07c.02 0 .03-.03.05-.04l.08-.03 2.84-.78-.21-.06-.2-.08-1.86-.84.34-.73 3.52 1.56-.2.44a.4.4 0 0 1-.1.16.43.43 0 0 1-.15.09l-2.82.77.2.07.16.08 1.89.83-.31.75-3.5-1.6.18-.43.04-.09ZM14.6 18.93c0-.02.02-.03.05-.04l.06-.02.5-.08c.1.25.1.5.05.75-.04.26-.16.52-.34.8a1.8 1.8 0 0 1-1.23.84 1.92 1.92 0 0 1-1.43-.38 1.8 1.8 0 0 1-.57-.58 1.8 1.8 0 0 1-.29-.7c-.05-.25-.05-.52.02-.79.06-.26.15-.52.32-.78.07-.12.17-.23.25-.32a2.17 2.17 0 0 1 .6-.4c.1-.04.21-.08.32-.1l.16.5c0 .01.02.05.01.08l-.03.11-.06.08c-.03 0-.07.02-.1.04l-.13.05a.42.42 0 0 0-.14.07c-.03.04-.08.09-.14.13a.84.84 0 0 0-.15.2.92.92 0 0 0-.17.44c-.02.15-.03.3.01.43a1.49 1.49 0 0 0 1.49 1.04.79.79 0 0 0 .37-.15 1.26 1.26 0 0 0 .41-.48l.08-.17.03-.18v-.2c-.01-.02 0-.05 0-.07.04-.06.03-.09.04-.12ZM17.07 14.79c.2.2.34.42.46.66a2.04 2.04 0 0 1-.45 2.21 2.07 2.07 0 0 1-1.42.66c-.26 0-.5-.05-.74-.14-.25-.1-.45-.26-.66-.45-.2-.21-.34-.42-.46-.66a2.04 2.04 0 0 1 .45-2.21 2.07 2.07 0 0 1 1.42-.66c.26 0 .5.05.72.15.27.09.5.24.68.44Zm-.64.68a2.17 2.17 0 0 0-.42-.31 1.3 1.3 0 0 0-.42-.13.87.87 0 0 0-.42.07c-.15.06-.25.15-.37.27a.99.99 0 0 0-.26.39c-.04.14-.08.27-.08.42 0 .14.06.29.12.44.07.14.18.29.32.43.15.13.28.25.42.31.15.07.28.11.43.13.14.01.27-.02.42-.07a1.28 1.28 0 0 0 .64-.67.85.85 0 0 0 .06-.4c0-.15-.06-.3-.11-.45a1.15 1.15 0 0 0-.33-.43ZM16.9 12.5l.07-.02c.02-.01.04 0 .07 0h.1l2.8.93-.13-.16c-.04-.06-.09-.11-.11-.18l-1.14-1.73.66-.45 2.13 3.28-.4.27c-.04.05-.1.07-.15.07-.05.01-.12 0-.18-.03l-2.78-.92.13.17c.04.05.08.09.1.15l1.15 1.76-.66.45-2.13-3.28.4-.28.07-.03ZM24.15 10.76c.1.28.17.52.17.78a1.75 1.75 0 0 1-.55 1.36c-.19.2-.42.33-.7.47l-1.37.59-1.5-3.65 1.38-.6c.29-.1.54-.18.8-.19.26 0 .5.05.73.13.21.08.43.22.6.42.2.2.35.44.44.7Zm-.82.37c-.07-.19-.17-.32-.26-.45a.9.9 0 0 0-.34-.28 1.38 1.38 0 0 0-.42-.1c-.14 0-.29.04-.45.1l-.55.24.96 2.34.55-.24a1.02 1.02 0 0 0 .6-.65c.05-.14.06-.29.05-.45a3.82 3.82 0 0 0-.14-.5ZM26.14 12.33l-.87.24-1-3.82.88-.25 1 3.83ZM28.91 7.82l.1.71-1.07.16.44 3.21-.89.14-.45-3.2-1.07.16-.1-.7 3.04-.48ZM30.68 11.75l-.9.01-.08-3.96.9-.01.08 3.96ZM35.22 10.2c-.04.28-.1.55-.23.77-.12.24-.29.43-.49.58-.2.15-.42.26-.67.34-.26.07-.53.09-.83.06a1.98 1.98 0 0 1-1.38-.74 1.98 1.98 0 0 1-.37-1.5c.04-.29.1-.55.24-.77.12-.25.28-.43.49-.58.2-.16.42-.27.67-.34a2.12 2.12 0 0 1 1.63.2c.24.15.41.3.56.5a2.07 2.07 0 0 1 .38 1.47Zm-.91-.12c.02-.2.02-.38-.01-.53-.04-.16-.1-.3-.16-.43a.85.85 0 0 0-.3-.29c-.12-.07-.27-.1-.45-.14a.88.88 0 0 0-.45.04.87.87 0 0 0-.38.2c-.1.08-.2.22-.26.36-.06.15-.12.32-.14.52-.02.2-.02.37.01.53.04.15.09.3.16.42a.7.7 0 0 0 .32.29c.12.07.27.1.45.13.17.03.33.02.45-.03.15-.04.27-.1.38-.2.1-.09.2-.22.26-.37.04-.13.1-.3.12-.5ZM36.89 8.67c.02.02.03.04.06.05 0 .02.04.03.05.06l.03.08 1 2.85.07-.22c.01-.08.04-.14.04-.19l.65-2 .75.26-1.24 3.76-.42-.14a.58.58 0 0 1-.15-.09.24.24 0 0 1-.09-.16l-1-2.83c-.02.08-.02.13-.05.2l-.04.18-.64 2.02-.76-.26 1.2-3.76.45.15.09.04ZM41.76 15.3l-.6-.35a.66.66 0 0 1-.14-.13c-.02-.07-.04-.1-.02-.19l.14-.7-1.26-.74-.52.5c-.04.03-.1.05-.17.06-.07 0-.12 0-.2-.04l-.6-.35 3.18-2.7.8.45-.6 4.19Zm-1.42-2.59.92.54.22-1.13.04-.26c.01-.1.04-.21.07-.32l-.22.23c-.06.08-.14.13-.2.18l-.83.76ZM42.96 15.41l1.11.92-.45.56-1.8-1.5 2.41-3.07.69.58-1.96 2.51ZM10.63 39.29l-.18.16h.24c.08.03.17.01.24.03l2.16.24c.05 0 .08.02.1.01.02 0 .04.04.06.05.01.02.04.03.06.08l.03.1.25.66L10 42.03l-.28-.76 2.07-.82c.1-.04.2-.08.33-.1l-2.2-.25a.2.2 0 0 1-.17-.08.43.43 0 0 1-.1-.15l-.05-.13a.44.44 0 0 1-.02-.18c0-.05.05-.12.07-.18l1.48-1.72-.16.09-.16.06-2.07.82-.28-.76 3.58-1.42.25.66.04.1v.1l-.01.08c-.01.03-.03.06-.07.07l-1.47 1.67c-.03.04-.08.1-.15.16ZM14.29 45.23c-.22.16-.47.26-.72.34a1.87 1.87 0 0 1-1.45-.3 2.07 2.07 0 0 1-.59-.62 2.26 2.26 0 0 1-.33-.79 1.91 1.91 0 0 1 .3-1.47 2.16 2.16 0 0 1 1.3-.88c.25-.05.49-.05.74 0 .25.04.48.15.7.3.22.16.41.35.58.62.17.25.29.52.34.79a1.91 1.91 0 0 1-.28 1.46c-.18.22-.37.4-.6.55Zm-.52-.76c.15-.1.29-.24.39-.35.09-.13.16-.26.2-.4a.84.84 0 0 0 0-.43c-.03-.16-.08-.3-.18-.44-.1-.15-.21-.25-.32-.35a.75.75 0 0 0-.39-.17.88.88 0 0 0-.43.05c-.15.04-.3.12-.47.24-.15.1-.3.23-.4.34-.08.14-.15.26-.2.4a.84.84 0 0 0 0 .44c.03.15.09.3.19.43.1.16.2.26.3.34.13.07.27.14.4.16.14.02.28.01.43-.05.17-.04.33-.1.48-.21ZM16.4 44.66c.01.03.04.04.05.06 0 .02.01.04 0 .07l-.01.1-.34 3.02.15-.18c.04-.07.08-.1.13-.15l1.42-1.48.57.57-2.7 2.81-.33-.33c-.04-.05-.08-.09-.1-.15a.72.72 0 0 1-.02-.19l.32-2.98c-.05.04-.08.1-.13.15-.05.04-.08.1-.11.14l-1.44 1.5-.57-.57 2.7-2.8.33.32c.04.04.07.07.08.1ZM20.74 48.38l-.39.6-1.29-.95-.52.76 1 .72-.38.56-1-.72-.53.77 1.29.94-.4.57-2.02-1.45 2.2-3.25 2.04 1.45Z"/><path fill="#fff" d="m21.68 51.62-.63 1.34-.8-.41.62-1.34-.2-2.83.7.36c.06.05.12.07.14.14.03.06.04.1.04.17l.01 1.29.01.28v.25l.17-.17c.08-.05.15-.1.22-.18l.97-.8c.02 0 .03-.03.07-.05l.09-.03.09-.01c.02-.01.07.01.1.03L24 50l-2.32 1.62ZM24.16 54.23l.85-3.85 1.37.34c.26.06.47.13.64.22.18.1.31.2.4.3.09.12.16.26.17.4.03.14.01.29-.02.45a.7.7 0 0 1-.1.23l-.16.2c-.08.06-.15.12-.25.16-.1.04-.22.06-.33.07.24.13.4.26.5.44a.8.8 0 0 1 .05.59c-.04.15-.1.3-.2.43-.09.14-.21.24-.35.31a1.53 1.53 0 0 1-1.1.1l-1.47-.39Zm1.23-1.43-.21.96.61.14c.11.03.2.04.3.03a.36.36 0 0 0 .2-.08.36.36 0 0 0 .11-.14l.08-.18a.7.7 0 0 0 .02-.2.25.25 0 0 0-.06-.17.66.66 0 0 0-.15-.13c-.06-.05-.16-.06-.26-.1l-.64-.13Zm.12-.6.47.1.27.04c.07 0 .16-.01.22-.04a.41.41 0 0 0 .15-.1.67.67 0 0 0 .1-.24.53.53 0 0 0 .01-.22c0-.07-.02-.14-.06-.17a.4.4 0 0 0-.17-.13c-.05-.03-.14-.06-.24-.07l-.5-.12-.25.94ZM31.54 55.22l-.7-.04c-.06 0-.14-.02-.18-.07a.43.43 0 0 1-.1-.16l-.2-.7-1.46-.08-.26.69a.36.36 0 0 1-.11.14c-.06.05-.12.05-.2.05l-.69-.04 1.66-3.87.92.05 1.32 4.03Zm-2.38-1.63 1.05.05-.31-1.1c-.03-.06-.04-.15-.07-.23l-.07-.31a2.45 2.45 0 0 1-.2.53l-.4 1.06ZM34.57 53.8c.02 0 .05.01.07 0 .03.02.05 0 .06.03l.4.33c-.13.22-.3.4-.53.54a2.15 2.15 0 0 1-1.58.22 1.91 1.91 0 0 1-.65-.35 2.26 2.26 0 0 1-.46-.6 2.54 2.54 0 0 1-.17-1.6c.07-.27.18-.48.33-.7a2.07 2.07 0 0 1 1.37-.75l.41-.02c.13.03.25.03.38.07l.33.12.27.18-.25.46c-.01.03-.02.06-.06.08-.04.01-.06.04-.1.04l-.1-.01-.09-.04c-.03-.02-.06-.05-.11-.06a.47.47 0 0 0-.14-.04l-.17-.03h-.26a1.06 1.06 0 0 0-.75.45 1.48 1.48 0 0 0-.18.97c.03.2.07.38.15.52.07.14.17.27.25.36.1.1.22.16.35.2.14.04.25.05.41.03.1-.01.16-.01.22-.04l.19-.07c.06-.02.1-.06.15-.1l.14-.14.05-.04c.02 0 .04-.02.07 0ZM36.17 52.04l.12-.05c.13-.05.2-.1.23-.21l.46-1.49a.36.36 0 0 1 .12-.19c.05-.05.11-.07.2-.1l.73-.24-.63 1.87-.07.17a.47.47 0 0 1-.1.13c.07 0 .15.02.2.04.06.03.15.07.2.12l1.62 1.4-.76.25c-.04.01-.08.03-.13.03-.04.01-.07 0-.1-.01l-.08-.04c-.03-.02-.06-.03-.07-.05l-1.23-1.04a.26.26 0 0 0-.14-.07c-.05 0-.12 0-.2.03l-.21.06.48 1.6-.85.27-1.14-3.77.85-.26.5 1.55ZM42.33 51.11c.12-.07.2-.12.26-.2l.18-.21-.3-.51-.33.2c-.06.02-.1.04-.13.03-.03-.02-.09-.04-.1-.09l-.26-.43 1.17-.72.83 1.44c-.05.11-.1.23-.16.32-.05.1-.13.2-.22.29-.09.08-.19.2-.3.26-.1.1-.22.16-.37.27a1.86 1.86 0 0 1-1.5.22 2.07 2.07 0 0 1-1.2-.96 2.64 2.64 0 0 1-.28-.78c-.06-.27-.03-.52.02-.76.07-.24.17-.48.35-.7.18-.2.39-.41.64-.56.13-.07.27-.15.41-.2a1.92 1.92 0 0 1 1.08-.1l-.01.5-.02.12a.17.17 0 0 1-.09.09c-.04.01-.1.04-.17.04l-.23.02c-.07 0-.14 0-.2.03l-.2.08c-.07.02-.14.08-.22.1-.14.09-.26.2-.35.34a.8.8 0 0 0-.16.4c-.01.15-.03.3 0 .46a1.93 1.93 0 0 0 .55.92c.15.11.27.19.42.22a1.17 1.17 0 0 0 .89-.13ZM45.4 48.67a.8.8 0 0 0 .2-.28.6.6 0 0 0 .06-.28.73.73 0 0 0-.07-.32.72.72 0 0 0-.2-.3l-1.5-1.76.66-.6 1.5 1.75c.16.18.28.38.33.58.08.2.11.42.1.62-.03.2-.07.4-.19.6a1.95 1.95 0 0 1-1.02.93c-.2.08-.4.11-.6.1-.19-.03-.4-.07-.57-.17-.18-.1-.35-.25-.51-.43l-1.5-1.75.67-.6 1.5 1.75c.09.11.19.2.28.25.1.06.2.1.3.1.1.02.18 0 .29-.04a.52.52 0 0 0 .27-.15ZM49.94 44.5l-.43.56c-.04.07-.1.11-.17.12a.2.2 0 0 1-.16-.01l-.68-.24-.9 1.18.38.6c.02.04.04.1.05.17 0 .07-.03.13-.07.2l-.43.55-2.1-3.65.57-.73 3.94 1.26Zm-2.68 1.08.65-.85-1.04-.4c-.06-.02-.14-.06-.24-.07-.1-.01-.19-.07-.28-.1l.2.25c.05.08.1.16.12.22l.6.95ZM49.49 42.34l1.26.68-.42.82-3.39-1.83.6-1.13c.14-.25.25-.44.4-.6.14-.15.29-.26.45-.32.15-.06.3-.1.44-.08.15.02.3.05.43.15.12.05.22.13.3.22.08.09.16.18.2.28.04.1.08.24.1.35.02.11.03.26 0 .39a.6.6 0 0 1 .18-.1.6.6 0 0 1 .2-.05l1.55-.1-.38.73c-.07.12-.16.2-.3.21l-1.28.05a.36.36 0 0 0-.15.03c-.04.02-.06.08-.09.13l-.1.17Zm-.56-.3.16-.32c.05-.12.1-.2.1-.3.01-.1 0-.18-.02-.27-.03-.06-.06-.14-.12-.19a.52.52 0 0 0-.2-.14.49.49 0 0 0-.44-.05c-.14.06-.25.2-.37.4l-.16.32 1.05.56ZM53.17 36.67l-.22.7c-.02.07-.06.14-.1.15a.24.24 0 0 1-.17.07h-.7l-.43 1.44.56.43.1.13c.02.07.02.14 0 .2l-.22.69-3.21-2.66.27-.9 4.12-.25Zm-2.14 1.96.32-1.02-1.12.02c-.07 0-.16.02-.25 0-.1.02-.2.01-.3 0 .08.07.18.13.25.2a2 2 0 0 0 .2.16l.9.64ZM49.55 34.85c.02-.03 0-.05.03-.06l.04-.07c.02 0 .06-.04.08-.05l2.48-1.6-.22-.02-.2-.02-2-.22.08-.81 3.8.44-.06.48c0 .07-.02.13-.05.17-.04.03-.06.1-.14.13l-2.47 1.57c.07 0 .14 0 .2.02.06 0 .11 0 .17.03l2.04.24-.08.8-3.8-.43.05-.49c.05-.06.06-.1.05-.11ZM49.67 28.7l.71-.04.06 1.12 3.13-.2.06.93-3.13.19.07 1.11-.72.04-.18-3.15ZM49.1 26.02l.67-.14.33 1.59.87-.2-.26-1.2.66-.14.26 1.2.88-.2-.33-1.6.68-.14.52 2.49-3.76.82-.52-2.48ZM48.14 23.3l.63-.25.57 1.52.84-.33-.44-1.16.62-.24.43 1.16.86-.34-.56-1.52.63-.25.87 2.4-3.6 1.39-.85-2.38ZM36.47 46.15a15.68 15.68 0 1 0-11.2-29.3 15.68 15.68 0 0 0 11.2 29.3Z"/><path fill="#12B76A" fill-rule="evenodd" d="M36.98 36.48c.2.1.42.17.65.2.23.05.44.04.64-.02.22-.06.37-.14.46-.25a.41.41 0 0 0 .07-.38.37.37 0 0 0-.1-.17.46.46 0 0 0-.17-.1 1.31 1.31 0 0 0-.25-.06l-.3-.05-.69-.1a1.88 1.88 0 0 1-.78-.28 1.26 1.26 0 0 1-.51-.75 1.34 1.34 0 0 1 .2-1.12c.12-.16.27-.3.45-.44a2.26 2.26 0 0 1 2.33-.07l-.36.81a2.13 2.13 0 0 0-.54-.15 1.35 1.35 0 0 0-.54.04.78.78 0 0 0-.4.23.37.37 0 0 0-.08.36.3.3 0 0 0 .1.17c.05.04.12.07.2.1l.25.05.31.04.68.08c.31.04.59.14.8.3.24.18.4.44.47.73a1.4 1.4 0 0 1-.2 1.15 1.8 1.8 0 0 1-.47.47 2.72 2.72 0 0 1-2.64.1l.41-.89Zm-10.75 4.3-1.38.37-1.27-4.71 1.34-.36c.36-.1.7-.13 1-.12a1.92 1.92 0 0 1 1.53.82c.2.26.34.6.45 1 .1.36.14.73.12 1.1-.03.3-.12.6-.27.87a2 2 0 0 1-.61.63c-.25.17-.56.3-.9.4ZM33 38.97l-1.13.3-.59-1.04-1.43.38v1.2l-1.08.29.22-5.1 1.27-.35L33 38.97Zm2.25-.6-1.06.28-.45-1.68-2.23-2.65 1.13-.3.72.97.66.93h.02l.06-.58.06-.57.14-1.2 1.11-.3-.6 3.42.44 1.68Zm-9.36 1.58c.2-.05.38-.13.53-.22.15-.1.27-.22.35-.37.08-.15.13-.33.15-.54 0-.25-.03-.5-.1-.74a2.28 2.28 0 0 0-.28-.68 1.02 1.02 0 0 0-.88-.51c-.19 0-.38.02-.57.07l-.2.06.8 2.98.2-.05Zm3.94-4.31h-.03l.03.82v1.26l1.01-.26-.22-.4-.4-.7a23.7 23.7 0 0 0-.39-.72ZM27.26 32l1.9-.5.5 1.89-6.43 1.72-.5-1.9 2.2-.59-1.58-5.84-1.9.5-.38-1.44a8.23 8.23 0 0 0 2.27-1.6l1.72-.46 2.2 8.22Zm9-4.89 1.16-.3.48 1.77-1.16.32.64 2.42-2.18.58-.65-2.42-4.37 1.17-.44-1.6 2.07-7.07 2.86-.77 1.58 5.9Zm-3.14-3.34-.06.02a61.1 61.1 0 0 1-.37 1.93l-.75 2.55 2.14-.57-.45-1.64c-.1-.38-.19-.76-.27-1.15l-.24-1.14Z" clip-rule="evenodd"/><path fill="#054F31" d="M9.44 33.75c.39-.15.58-.6.43-1a.74.74 0 0 0-.96-.44.78.78 0 0 0-.43 1c.15.4.58.6.96.44ZM48.07 18.8c.38-.15.57-.6.43-1a.74.74 0 0 0-.97-.44.78.78 0 0 0-.43 1c.15.4.58.59.97.44Z"/></svg>
			<h4><?php esc_html_e( '100% No-Risk, Money Back Guarantee!', 'formidable' ); ?></h4>
			<p><?php esc_html_e( 'We\'re excited to have you experience the power of Formidable Forms. Over the next 14 days, if Formidable Forms isn’t the best fit for your project, simply reach out! We’ll happily refund 100% of your money. No questions asked.', 'formidable' ); ?></p>
		</div>
	</div>
</div>

<style>
	.frm-views-info-page .frm_grid_container {
		grid-gap: 16px;
	}
	.frm-views-features {
		margin-top: 18px;
		margin-bottom: 40px;
	}
	.frm-views-feature {
		box-shadow: 0 1px 3px 0 #1018281A;
		padding: 16px 24px;
		text-align: left;
		border-radius: 8px;
	}
	.frm-views-feature__icon {
		height: 40px;
		width: 40px;
		border-radius: 9px;
		padding: 8px;
		box-sizing: border-box;
		background: linear-gradient(var(--gcolor-start), var(--gcolor-end));
		color: #fff;
		margin-bottom: 8px;
	}
	.frm-views-feature__icon > svg {
		width: 24px;
	}
	.frm-views-feature__title {
		font-weight: 700;
		margin-bottom: 2px;
	}
	.frm-views-feature__desc {
		color: #667085;
	}
	.frm-views-learn-more {
		text-align: left;
	}
	.frm-views-learn-more h3 {
		font-size: 18px;
		font-weight: 600;
		margin-bottom: 16px;
		margin-top: 23px;
	}
	.frm-views-reviews {
		margin-top: 33px;
	}
	.frm-views-review {
		box-shadow: 0 1px 4px 1px #10182814;
		text-align: left;
		padding: 10px 15px;
		border-radius: 8px;
	}
	.frm-views-review__rating {
		line-height: 1;
		margin-bottom: 3px;
	}
	.frm-views-review__rating svg {
		margin-right: 3px;
	}
	.frm-views-review__rating span {
		font-size: 9px;
		vertical-align: middle;
	}
	.frm-views-review__desc {
		font-size: 9px;
	}
	.frm-views-guarantee {
		text-align: left;
		margin-top: 32px;
	}
	.frm-views-guarantee:after {
		content: '';
		display: block;
		height: 0;
		visibility: hidden;
		clear: both;
	}
	.frm-views-guarantee > svg {
		float: left;
		margin-top: 9px;
		margin-right: 20px;
	}
	.frm-views-guarantee h4 {
		margin-bottom: 5px;
	}
	.frm-views-guarantee p {
		margin-top: 0;
		font-size: 12px;
	}
</style>
