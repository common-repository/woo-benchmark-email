<?php
/**
 * Plugin Name: Woo Benchmark Email
 * Plugin URI: https://codedcommerce.com/product/woo-benchmark-email
 * Description: Connects WooCommerce with Benchmark Email for syncing customers and abandoned carts.
 * Version: 1.6.2
 * Author: Coded Commerce, LLC
 * Author URI: https://codedcommerce.com
 * Developer: Sean Conklin
 * Developer URI: https://seanconklin.wordpress.com
 * Text Domain: woo-benchmark-email
 * Domain Path: /languages
 *
 * WC requires at least: 5.9
 * WC tested up to: 9.3.3
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Exit If Accessed Directly
if( ! defined( 'ABSPATH' ) ) { exit; }

// Make Sure WooCommerce Is Activated
if(
	in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )
) {

	// Declare Support For HPOS
	add_action( 'before_woocommerce_init', function() {
		if( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
				'custom_order_tables', __FILE__, true
			);
		}
	} );

	// Include Object Files
	require_once( 'class.admin.php' );
	require_once( 'class.api.php' );
	require_once( 'class.frontend.php' );

}