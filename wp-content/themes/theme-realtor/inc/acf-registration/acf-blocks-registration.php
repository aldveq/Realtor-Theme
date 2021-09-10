<?php

/**
 * Register Custom Category for ACF Blocks & global constants
 */

function _s_add_block_categories( $categories, $post ) {

	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'olly-olly-realtor-theme-blocks',
				'title' => esc_html__( 'Olly Olly Realtor Theme Custom Blocks', '_s' ),
			),
		)
	);
}
add_filter( 'block_categories', '_s_add_block_categories', 10, 2 );


function register_acf_block_types() {

    $supports = array(
        'align'  => array( 'wide', 'full' ),
        'anchor' => true,
    );
    $color_icon = "#210B2C";
    $background_icon = "#ffffff";


    // Check if function exists and hook into setup.
    if( function_exists('acf_register_block_type') ) {

        foreach( glob( get_template_directory() . '/inc/acf-blocks/*.php' ) as $acf_settings ) {
            @include_once $acf_settings;
        }

    }

}
add_action('acf/init', 'register_acf_block_types');