<?php
/**
 * Summary email base class
 *
 * @since x.x
 * @package Formidable
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

abstract class FrmSummaryEmail {

	/**
	 * Is HTML email?
	 *
	 * @var bool
	 */
	protected $is_html = true;

	/**
	 * Gets email subject.
	 *
	 * @return string
	 */
	abstract protected function get_subject();

	/**
	 * Gets inner content.
	 *
	 * @return string
	 */
	abstract protected function get_inner_content();

	/**
	 * Constructor.
	 */
	public function __construct() {
		/**
		 * Enables HTML for summary emails.
		 *
		 * @since x.x
		 *
		 * @param bool $enable Set to `true` to enable.
		 */
		$this->is_html = apply_filters( 'frm_html_summary_emails', true );
	}

	/**
	 * Gets recipients.
	 *
	 * @return string
	 */
	protected function get_recipients() {
		$recipients = FrmAppHelper::get_settings()->summary_emails_recipients;
		$recipients = str_replace( '[admin_email]', get_bloginfo( 'admin_email' ), $recipients );
		return $recipients;
	}

	/**
	 * Gets email headers.
	 *
	 * @return string[]
	 */
	protected function get_headers() {
		return array(
			'Content-Type: ' . ( $this->is_html ? 'text/html; charset=UTF-8' : 'text/plain' ),
			'From: ' . get_bloginfo( 'name' ) . ' <' . get_bloginfo( 'admin_email' ) . '>',
		);
	}

	/**
	 * Gets email content.
	 *
	 * @return string
	 */
	protected function get_content() {
		$args = $this->get_content_args();

		/**
		 * Filters the summary email content args.
		 *
		 * @since x.x
		 *
		 * @param array $args        Content args.
		 * @param array $filter_args Contains `email_obj`: summary email object.
		 */
		$args = apply_filters( 'frm_summary_email_content_args', $args, array( 'email_obj' => $this ) );

		$suffix = $this->is_html ? '' : '-plain';

		ob_start();
		include $this->get_include_file( 'base' );
		$content = ob_get_clean();

		$content = str_replace( '%%INNER_CONTENT%%', $this->get_inner_content(), $content );

		return $content;
	}

	/**
	 * Gets include file path from the given file name.
	 *
	 * @param string $file_name File name.
	 * @return string
	 */
	protected function get_include_file( $file_name ) {
		$suffix = $this->is_html ? '' : '-plain';
		return FrmAppHelper::plugin_path() . '/classes/views/summary-emails/' . $file_name . $suffix . '.php';
	}

	/**
	 * Gets content args.
	 *
	 * @return array
	 */
	protected function get_content_args() {
		return array(
			'subject'          => $this->get_subject(),
			'site_url'         => home_url( '/' ),
			'site_url_display' => home_url( '/' ),
			'unsubscribe_url'  => site_url() . '/wp-admin/admin.php?page=formidable-settings&t=misc_settings',
			'support_url'      => FrmSummaryEmailsHelper::get_frm_url( 'new-topic', 'contact_support' ),
		);
	}

	/**
	 * Sends email.
	 *
	 * @return bool
	 */
	public function send() {
		$recipients = $this->get_recipients();
		$content    = $this->get_content();
		$subject    = $this->get_subject();
		$headers    = $this->get_headers();

		$sent = wp_mail( $recipients, $subject, $content, $headers );
		if ( ! $sent ) {
			$headers = implode( "\r\n", $headers );
			$sent    = mail( $recipients, $subject, $content, $headers );
		}

		return $sent;
	}
}
