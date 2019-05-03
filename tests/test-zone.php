<?php
/**
 * WP Adserve Zone Tests.
 *
 * @since   0.0.0
 * @package WP_Adserve
 */
class WPA_Zone_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.0.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'WPA_Zone') );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  0.0.0
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'WPA_Zone', wp_adserve()->zone );
	}

	/**
	 * Test that our taxonomy now exists.
	 *
	 * @since  0.0.0
	 */
	function test_taxonomy_exists() {
		$this->assertTrue( taxonomy_exists( 'wpa-zone' ) );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  0.0.0
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
