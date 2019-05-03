<?php
/**
 * WP Adserve Zone.
 *
 * @since   0.0.0
 * @package WP_Adserve
 */

require_once dirname( __FILE__ ) . '/../vendor/taxonomy-core/Taxonomy_Core.php';

/**
 * WP Adserve Zone.
 *
 * @since 0.0.0
 *
 * @see   https://github.com/WebDevStudios/Taxonomy_Core
 */
class WPA_Zone extends Taxonomy_Core {
	/**
	 * Parent plugin class.
	 *
	 * @var    WP_Adserve
	 * @since  0.0.0
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * Register Taxonomy.
	 *
	 * See documentation in Taxonomy_Core, and in wp-includes/taxonomy.php.
	 *
	 * @since  0.0.0
	 *
	 * @param  WP_Adserve $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();

		parent::__construct(
			// Should be an array with Singular, Plural, and Registered name.
			array(
				__( 'WP Adserve Zone', 'wp-adserve' ),
				__( 'WP Adserve Zones', 'wp-adserve' ),
				'wpa-zone',
			),
			// Register taxonomy arguments.
			array(
				'hierarchical' => false,
			),
			// Post types to attach to.
			array(
				'post',
			)
		);
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since 0.0.0
	 */
	public function hooks() {

	}
}
