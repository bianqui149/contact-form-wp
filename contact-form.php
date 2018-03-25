<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.dmanqn.com.ar
 * @since             0.0.1
 * @package           Contact-Form
 *
 * @wordpress-plugin
 * Plugin Name:       Contact Form
 * Plugin URI:        www.dmanqn.com.ar
 * Description:       This is a simple contact plugin
 * Version:           0.0.1
 * Author:            Bianqui Julián
 * Author URI:        www.dmanqn.com.ar
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       contact-form
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.0.1 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '0.0.1' );

require_once plugin_dir_path( __FILE__ ) . '/admin/class-contact-form.php';

// echo do_shortcode('[contact_form]'); 




