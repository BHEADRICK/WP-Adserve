<?php
/**
 * WP Adserve Ad.
 *
 * @since   0.0.0
 * @package WP_Adserve
 */

require_once dirname( __FILE__ ) . '/../vendor/cpt-core/CPT_Core.php';

/**
 * WP Adserve Ad post type class.
 *
 * @since 0.0.0
 *
 * @see   https://github.com/WebDevStudios/CPT_Core
 */
class WPA_Ad extends CPT_Core {
	/**
	 * Parent plugin class.
	 *
	 * @var WP_Adserve
	 * @since  0.0.0
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * Register Custom Post Types.
	 *
	 * See documentation in CPT_Core, and in wp-includes/post.php.
	 *
	 * @since  0.0.0
	 *
	 * @param  WP_Adserve $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();

		// Register this cpt.
		// First parameter should be an array with Singular, Plural, and Registered name.
		parent::__construct(
			array(
				esc_html__( 'WP Adserve Ad', 'wp-adserve' ),
				esc_html__( 'WP Adserve Ads', 'wp-adserve' ),
				'wpa-ad',
			),
			array(
				'supports' => array(
					'title',
					'thumbnail',
				),
				'menu_icon' => 'dashicons-admin-post', // https://developer.wordpress.org/resource/dashicons/
				'public'    => true,
			)
		);
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since  0.0.0
	 */
	public function hooks() {
	}

	/**
	 * Registers admin columns to display. Hooked in via CPT_Core.
	 *
	 * @since  0.0.0
	 *
	 * @param  array $columns Array of registered column names/labels.
	 * @return array          Modified array.
	 */
	public function columns( $columns ) {
		$new_column = array();
		return array_merge( $new_column, $columns );
	}

	/**
	 * Handles admin column display. Hooked in via CPT_Core.
	 *
	 * @since  0.0.0
	 *
	 * @param array   $column   Column currently being rendered.
	 * @param integer $post_id  ID of post to display column for.
	 */
	public function columns_display( $column, $post_id ) {
		switch ( $column ) {
		}
	}
}
