<?php
/**
 * Plugin Name: Test Cart Item Action
 * Description: Example of registering a cart item action using the registry pattern
 * Version: 1.0.0
 * Author: helgatheviking
 * Requires Plugins: woocommerce
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the block integration.
 */
add_action( 'woocommerce_blocks_loaded', function() {
	require_once __DIR__ . '/includes/class-test-cart-action-integration.php';
	
	add_action(
		'woocommerce_blocks_cart_block_registration',
		function( $integration_registry ) {
			$integration_registry->register( new Test_Cart_Action_Integration() );
		}
	);
} );
