<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://husani.criativi.me
 * @since      1.0.0
 *
 * @package    Fooevents_Checkout_Fields_Remover
 * @subpackage Fooevents_Checkout_Fields_Remover/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fooevents_Checkout_Fields_Remover
 * @subpackage Fooevents_Checkout_Fields_Remover/includes
 * @author     Husani Santos <husani@criativi.me>
 */
class Fooevents_Checkout_Fields_Remover_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fooevents-checkout-fields-remover',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
