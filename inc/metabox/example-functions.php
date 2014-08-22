<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';



	$meta_boxes[] = array(
		'id'         => 'about_page_metabox',
		'title'      => 'Second Content Area',
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		//'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 34, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
				'name'    => '',
				'desc'    => '',
				'id'      => $prefix . 'test_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array(	'textarea_rows' => 5, ),
			),
		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}