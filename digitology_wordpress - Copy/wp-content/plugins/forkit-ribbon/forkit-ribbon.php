<?php
/**
 * Plugin Name: Forkit Ribbon
 * Plugin URI: https://github.com/axisthemes/forkit-ribbon
 * Description: An experimental animated ribbon which reveals a curtain of additional content.
 * Version: 1.0.0
 * Author: AxisThemes
 * Author URI: http://axisthemes.com
 * License: GPLv2 or later
 * Text Domain: forkit-ribbon
 * Domain Path: /languages/
 *
 * Based on forkit.js by Hakim El Hattab.
 * @see https://github.com/hakimel/forkit.js
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'ForkitRibbon' ) ) :

/**
 * Main ForkitRibbon Class.
 */
class ForkitRibbon {

	/**
	 * Plugin version.
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * Instance of this class.
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin.
	 */
	private function __construct() {
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );
		add_action( 'wp_footer', array( $this, 'load_ribbon_view_page' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		// Add settings menu.
		add_action( 'admin_menu', array( $this, 'settings_menu' ) );

		// Show plugin action link.
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( __CLASS__, 'plugin_action_links' ) );
	}

	/**
	 * Return an instance of this class.
	 * @return object A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Load Localisation files.
	 *
	 * Note: the first-loaded translation file overrides any following ones if the same translation is present.
	 *
	 * Locales found in:
	 *      - WP_LANG_DIR/forkit-ribbon/forkit-ribbon-LOCALE.mo
	 *      - WP_LANG_DIR/plugins/forkit-ribbon-LOCALE.mo
	 */
	public function load_plugin_textdomain() {
		$locale = apply_filters( 'plugin_locale', get_locale(), 'forkit-ribbon' );

		load_textdomain( 'forkit-ribbon', WP_LANG_DIR . '/forkit-ribbon/forkit-ribbon-' . $locale . '.mo' );
		load_plugin_textdomain( 'forkit-ribbon', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Get the plugin url.
	 * @return string
	 */
	public function plugin_url() {
		return untrailingslashit( plugins_url( '/', __FILE__ ) );
	}

	/**
	 * Load Ribbon View Page.
	 */
	public function load_ribbon_view_page() {
		include_once( 'includes/html-view-page-ribbon.php' );
	}

	/**
	 * Enqueue frontend scripts.
	 */
	public function enqueue_scripts() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		wp_enqueue_style( 'forkit-ribbon', $this->plugin_url() . '/assets/css/forkit.css', array(), $this->version );
		wp_enqueue_script( 'forkit-ribbon', $this->plugin_url() . '/assets/js/forkit' . $suffix . '.js', array( 'jquery' ), $this->version, true );
	}

	/**
	 * Add settings menu item.
	 */
	public function settings_menu() {
		add_options_page( __( 'Forkit Settings', 'forkit-ribbon' ),  __( 'Forkit Ribbon', 'forkit-ribbon' ) , 'manage_options', 'forkit-ribbon', array( $this, 'settings_page' ) );
		register_setting( 'forkit_ribbon_settings_fields', 'forkit_ribbon_options' );
	}

	/**
	 * Init the settings page.
	 */
	public function settings_page() {
		include_once( 'includes/html-view-page-settings.php' );
	}

	/**
	 * Show action links on the plugin screen.
	 * @param  mixed $links Plugin Action links
	 * @return array
	 */
	public static function plugin_action_links( $links ) {
		$action_links = array(
			'settings' => '<a href="' . admin_url( 'options-general.php?page=forkit-ribbon' ) . '" title="' . esc_attr( __( 'View Settings', 'forkit-ribbon' ) ) . '">' . __( 'Settings', 'forkit-ribbon' ) . '</a>',
		);

		return array_merge( $action_links, $links );
	}
}

add_action( 'plugins_loaded', array( 'ForkitRibbon', 'get_instance' ), 0 );

endif;
