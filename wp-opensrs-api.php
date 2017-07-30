<?php
/**
 * WP-OpenSRS-API (http://domains.opensrs.guide/docs)
 *
 * @package WP-OpenSRS-API
 */

/*
* Plugin Name: WP OpenSRS API
* Plugin URI: https://github.com/wp-api-libraries/wp-opensrs-api
* Description: Perform API requests to OpenSRS in WordPress.
* Author: imFORZA
* Version: 1.0.0
* Author URI: https://www.imforza.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-opensrs-api
* GitHub Branch: master
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'OpenSrsAPI' ) ) {

	/**
	 * OpenSrsAPI API Class.
	 */
	class OpenSrsAPI {

		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = '';


		/**
		 * __construct function.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {
		}

		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {

			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );

			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'wp-opensrs-api' ), $code ) );
			}

			$body = wp_remote_retrieve_body( $response );

			return json_decode( $body );

		}

		/* LOOKUP COMMANDS. */

		public function belongs_to_rsp() {

		}

		public function get_domain() {

		}

		public function get_domain_all_info() {

		}

		public function get_domain_affiliate_id() {

		}

		public function get_balance() {

		}

		public function get_deleted_domains() {

		}

		/* SSL SERVICES. */


		/* PROVISIONING COMMANDS. */


		/* ICANN TRADE. */

		/* SUB-RESELLER COMMANDS. */


		/* PERSONAL NAMES SERVICE. */

		/* TRANSFER COMMANDS. */


		/* BULK CHANGE COMMANDS. */

		/* NAMESERVER COMMANDS. */
		/* DNSSEC COMMANDS. */
		/* DNS ZONE COMMANDS. */
		/* DOMAIN FORWARDING COMMANDS. */

		/* USER COMMANDS. */
		/* AUTHENTICATION COMMANDS. */
		/* PUBLISHING SERVICE COMMANDS. */
		/* EVENT NOTIFICATIONS. */

	}
}
