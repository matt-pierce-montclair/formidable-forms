<?php
/**
 * Base template for summary emails
 *
 * @since x.x
 * @package Formidable
 *
 * @var array $args Content args.
 */

$section_style = 'padding: 3em 4.375em; border-bottom: 1px solid #eaecf0';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no, date=no, email=no, address=no">
	<meta name="x-apple-disable-message-reformatting">
	<title></title>
	<!--[if (mso 16)]> <style type="text/css"> a { text-decoration: none; } </style> <![endif]-->
	<!--[if gte mso 9]> <style> sup { font-size: 100% !important; } </style> <![endif]-->
	<!--[if gte mso 9]> <xml> <o:OfficeDocumentSettings> <o:AllowPNG></o:AllowPNG> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml> <![endif]-->
	<!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body style="background-color: #eee; color: #475467; font-family: 'Inter', Arial, sans-serif;">
	<style type="text/css">
		.frm_inbox_dismiss { display: none; }

		.frm-button-primary {
			font-size: 0.875em;
			display: inline-block;
			line-height: 2.4;
			padding-left: 1em;
			padding-right: 1em;
			border-radius: 1.2em;
			border: 1px solid #d0d5dd;
			font-weight: 600;
			color: #fff;
			background-color: #4199fd;
			text-decoration: none;
		}
	</style>
	<div style="background-color: #fff; max-width: 42.5em; margin: auto;">
		%%INNER_CONTENT%%

		<div style="<?php echo esc_attr( $section_style ); ?>">
			<a href="<?php echo esc_url( $args['unsubscribe_url'] ); ?>" style="color: currentColor; font-size: 0.75em; line-height: 1.33; font-weight: 500;"><?php esc_html_e( 'Unsubscribe', 'formidable' ); ?></a>
		</div>
	</div>
</body>
</html>
