<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://husani.criativi.me
 * @since             1.0.0
 * @package           Foo_Events_Checkoud_Fields_Remover
 *
 * @wordpress-plugin
 * Plugin Name:       FooEvents Checkout Fields Remover
 * Plugin URI:        https://plugins.criativi.me/fooevents-checkout-fields-remover
 * Description:       Esconde os campos do FooEvents Custom Attendee Fields passando a utilizar os dados do campo do checkout original do woocommerce
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Husani Santos
 * Author URI:        https://husani.criativi.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fooevents-checkout-fields-remover
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FOOEVENTS_CHECKOUT_FIELDS_REMOVER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fooevents-checkout-fields-remover-activator.php
 */
function activate_fooevents_checkout_fields_remover() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fooevents-checkout-fields-remover-activator.php';
	Fooevents_Checkout_Fields_Remover_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fooevents-checkout-fields-remover-deactivator.php
 */
function deactivate_fooevents_checkout_fields_remover() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fooevents-checkout-fields-remover-deactivator.php';
	Fooevents_Checkout_Fields_Remover_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fooevents_checkout_fields_remover' );
register_deactivation_hook( __FILE__, 'deactivate_fooevents_checkout_fields_remover' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fooevents-checkout-fields-remover.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fooevents_checkout_fields_remover() {

	$plugin = new Fooevents_Checkout_Fields_Remover();
	$plugin->run();

}
run_fooevents_checkout_fields_remover();
