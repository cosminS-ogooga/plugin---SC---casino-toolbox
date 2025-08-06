<?php

/**
 *
 * @link              https://www.ogooga.com
 * @since             1.0.0
 * @package           Casino Toolbox
 *
 * @wordpress-plugin
 * Plugin Name:       Casino Toolbox
 * Plugin URI:        https://jocuricazinouri.com
 * Description:       Custom plugin for casino websites
 * Version:           1.0.0
 * Author:            Cosmin Samfira
 * Author URI:        https://www.ogooga.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       casino-toolbox
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Set up and initialize
 */
class Casino_Toolbox {

	private static $instance;

	/**
	 * Actions setup
	 */
	public function __construct() {

		add_action( 'plugins_loaded', array( $this, 'constants' ), 2 );
		add_action( 'plugins_loaded', array( $this, 'includes' ), 3 );
		add_action( 'wp_head', array( $this, 'nofollow_oferte_speciale' ), 4 );
	}

	/**
	 * Constants
	 */
	function constants() {

		define( 'CC_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
		define( 'CC_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );
	}

	/**
	 * Includes
	 */
	function includes() {

		//ACF Blocks
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-more-info.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-casino-custom-offer.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-casino-default-offer.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-text-image.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-steps.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-slot.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-text.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-pros-and-cons.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-clearlines.php' );
		require_once( CC_DIR . 'inc/ACF/acf-blocks/acf-block-card-links.php' );
	}

	/**
	 * Returns the instance.
	 */
	public static function get_instance() {

		if ( !self::$instance )
			self::$instance = new self;

		return self::$instance;
	}

	/**
	 * Nofollow single Oferte Speciale CPT
	 */
	function nofollow_oferte_speciale() {

		if ( is_singular( 'oferte-speciale' ) ) {
			echo '<meta name="robots" content="noindex">';
		}
	}

}

function casino_toolbox_plugin() {
	return Casino_Toolbox::get_instance();
}
add_action('plugins_loaded', 'casino_toolbox_plugin', 1);

function casino_toolbox_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'casino-toolbox',
				'title' => __( 'Casino Toolbox', 'casino-toolbox' ),
			),
		)
	);
}
add_filter( 'block_categories', 'casino_toolbox_category', 10, 2);