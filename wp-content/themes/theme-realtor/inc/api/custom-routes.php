<?php

// function get_quote_icon() {
//     register_rest_route( 'realtor/v1', 'get-quote-icon/',array(
//         'methods'  => 'GET',
//         'callback' => 'get_quote_icon_for_testimonials'
//     ));
// }
// add_action('rest_api_init', 'get_quote_icon');

// function get_quote_icon_for_testimonials($request) {
//     if(!function_exists('get_field')) {
// 		return new WP_Error( 'acf_not_available', 'ACF Not Available', array('status' => 404) );
// 	}

// 	if(get_field('testimonials_block_settings_show_quote_icon')) {
//         $testimonials_block_settings_show_quote_icon = get_field('testimonials_block_settings_show_quote_icon');
//         $response = new WP_REST_Response($testimonials_block_settings_show_quote_icon);
//         $response->set_status(200);
// 		return $response;
// 	}

//     return false;
// }


// function acf_to_rest_api($response, $post, $request) {
//     if (!function_exists('get_fields')) return $response;

//     if (isset($post)) {
//         $acf = get_fields($post->id);
//         $response->data['acf'] = $acf;
//     }
//     return $response;
// }
// add_filter('rest_prepare_post', 'acf_to_rest_api', 10, 3);

// function registerBlockRest()
// {

// 	if (!function_exists('use_block_editor_for_post_type')) {
// 		require ABSPATH . 'wp-admin/includes/post.php';
// 	}

// 	// Surface all Gutenberg blocks in the WordPress REST API
// 	$post_types = get_post_types_by_support(['editor']);
// 	foreach ($post_types as $post_type) {

// 		if (use_block_editor_for_post_type($post_type)) {
// 			// echo "post types is: " . use_block_editor_for_post_type($post_types);
// 			register_rest_field(

// 				$post_type,
// 				'blocks',
// 				[
// 					'get_callback' => function (array $post) {
// 						return parse_blocks($post['content']['raw']);
// 					},
// 				],
// 			);
// 		}
// 	}
// }

// if (function_exists('registerBlockRest')) {
// 	add_action('acf/init', 'registerBlockRest');
// }