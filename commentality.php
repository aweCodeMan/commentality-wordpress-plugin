<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://danesjenovdan.si/en/
 * @since             1.0.0
 * @package           Commentality
 *
 * @wordpress-plugin
 * Plugin Name:       Commentality
 * Plugin URI:        https://commentality.djnd.si/
 * Description:       Commentality is not a commenting system, but it does keep your audience engaged and it does measure public opinion.
 * Version:           1.0.0
 * Author:            Today is a new day
 * Author URI:        https://danesjenovdan.si/en/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       commentality
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
define( 'COMMENTALITY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-commentality-activator.php
 */
function activate_commentality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-commentality-activator.php';
	Commentality_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-commentality-deactivator.php
 */
function deactivate_commentality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-commentality-deactivator.php';
	Commentality_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_commentality' );
register_deactivation_hook( __FILE__, 'deactivate_commentality' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-commentality.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_commentality() {

	$plugin = new Commentality();
	$plugin->run();

}
run_commentality();
