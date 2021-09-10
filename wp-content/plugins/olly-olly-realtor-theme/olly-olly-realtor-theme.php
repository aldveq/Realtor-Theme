<?php

 /*
    Plugin Name: Olly Olly Realtor Theme
    Plugin URI: 
    Description: Intallation of CPT & ACF Json Registration
    Version: 1.0
    Author: Olly Olly
    Author URI: https://www.ollyolly.com/
    License: GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: olly-olly-realtor-theme
*/

if(!defined('ABSPATH')) exit;

// Testimonial Custom Post Type Definition
function custom_post_testimonial() {

	$labels = array(
		'name'               => __( 'Testimonials' ),
		'singular_name'      => __( 'testimonial' ),
		'add_new'            => __( 'Add New Testimonial' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonial' ),
		'search_items'       => __( 'Search Testimonial' )
	);

	$args = array(
		'labels'            => $labels,
		'description'       => 'Testimonials custom post type',
		'public'            => true,
		'menu_position'     => 5,
		'show_in_rest'      => true,
		'supports'          => array( 'title', 'excerpt' ),
		'menu_icon'         => 'dashicons-testimonial',
		'has_archive'       => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true, 
        'show_in_rest'      => true,
        'rest_base'         => 'testimonials'
	);

	register_post_type( 'testimonial', $args);

}
add_action( 'init', 'custom_post_testimonial' );

// Adding ACF to the testimonials endpoint

function add_acf_to_testimonials_endpoint() {

	register_rest_field( 
		'testimonial', 
		'rating',
		array(
			'get_callback' => 'get_testimonial_rating',
			'update_callback' => null,
			'schema' => null
		) 
	);

	register_rest_field( 
		'testimonial', 
		'is_source_available',
		array(
			'get_callback' => 'get_testimonial_source_availability',
			'update_callback' => null,
			'schema' => null
		) 
	);

	register_rest_field( 
		'testimonial', 
		'source',
		array(
			'get_callback' => 'get_testimonial_source',
			'update_callback' => null,
			'schema' => null
		) 
	);

	register_rest_field( 
		'testimonial', 
		'testimonial_content',
		array(
			'get_callback' => 'get_testimonial_content',
			'update_callback' => null,
			'schema' => null
		) 
	);

}
add_action('rest_api_init', 'add_acf_to_testimonials_endpoint');

function get_testimonial_rating() {
	if(!function_exists('get_field')) {
		return;
	}

	if(get_field('testimonials_rating')) {
		return get_field('testimonials_rating');
	}

	return false;
}

function get_testimonial_source_availability() {
	if(!function_exists('get_field')) {
		return;
	}

	if(get_field('testimonial_is_source_available')) {
		return get_field('testimonial_is_source_available');
	}

	return false;
}

function get_testimonial_source() {
	if(!function_exists('get_field')) {
		return;
	}

	if(get_field('testimonials_source')) {
		return get_field('testimonials_source');
	}

	return 'N/A';
}

function get_testimonial_content() {
	if(!function_exists('get_field')) {
		return;
	}

	if(get_field('testimonial_content')) {
		return get_field('testimonial_content');
	}

	return 'N/A';
}