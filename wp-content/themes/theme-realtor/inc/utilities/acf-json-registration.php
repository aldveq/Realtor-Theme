<?php

// ACF Json Registration

define( 'ACF_JSON_DIR_PATH', get_template_directory() . '/inc' );
add_filter('acf/settings/save_json', 'acf_json_save_point');
 
function acf_json_save_point( $path ) {
    
    // Update path
    $path = ACF_JSON_DIR_PATH. '/acf-json';
    // Return path
    return $path;
    
}

add_filter('acf/settings/load_json', 'acf_json_load_point');

/**
 * Register the path to load the ACF json files so that they are version controlled.
 * @param $paths The default relative path to the folder where ACF saves the files.
 * @return string The new relative path to the folder where we are saving the files.
 */
function acf_json_load_point( $paths ) {
   // Remove original path
   unset( $paths[0] );// Append our new path
   $paths[] = ACF_JSON_DIR_PATH. '/acf-json';   return $paths;
}