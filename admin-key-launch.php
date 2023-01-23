<?php

/**
 *
 * @link              https://ntwebdesign.co.uk
 * @since             1.0.0
 * @package           Admin_Key_Launch
 *
 * @wordpress-plugin
 * Plugin Name:       Admin Key Launch
 * Plugin URI:        https://ntwebdesign.co.uk
 * Description:       Launch the wordpress dashboard with the simple press of the escape key.
 * Version:           1.0.0
 * Author:            Neil Thompson
 * Author URI:        https://ntwebdesign.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       admin-key-launch
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'ADMIN_KEY_LAUNCH_VERSION', '1.0.0' );


/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_admin_key_launch() {

	wp_enqueue_script('admin-key-launch-public',
					  plugins_url('public/js/admin-key-launch-public.js',__FILE__),
					  array('jquery'),
					  true);

	wp_localize_script('admin-key-launch-public',
					   'adminkey', 
					   array( 'adminUrl' => get_admin_url()));


}
run_admin_key_launch();

