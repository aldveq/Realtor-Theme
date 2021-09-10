<?php
    add_action('after_setup_theme', 'check_and_register_assets',10, 0);

    function check_and_register_assets()
    {
        $wordpress_upload_dir = wp_upload_dir();

        $directory = get_template_directory() . '/inc/assets_to_include';
        if(file_exists($directory))
        {
            $file_list = scandir( $directory );
            $list = array_filter($file_list, function($v){
                if ($v != '.' && $v != '..'){
                    return $v;
                };
            });
            if(gettype($list) == 'array')
            {
                foreach($list as $file)
                {   
                    $current_file_path = $directory . '/' . $file;
                    $new_file_path = $wordpress_upload_dir['path'] . '/' . $file;
                    if (file_exists($current_file_path))
                    {
                        $new_file_mime = mime_content_type($current_file_path);
                        if( in_array( $new_file_mime, get_allowed_mime_types() ) )
                        {
                            if ( 0 == ( does_file_exists( $file ) ) ) {
                                if( rename($current_file_path, $new_file_path) )
                                {
                                    $upload_id = wp_insert_attachment( array(
                                        'guid'           => $new_file_path, 
                                        'post_mime_type' => $new_file_mime,
                                        'post_title'     => preg_replace( '/\.[^.]+$/', '', $file ),
                                        'post_content'   => '',
                                        'post_status'    => 'inherit'
                                    ), $new_file_path );
                                    require_once( ABSPATH . 'wp-admin/includes/image.php' );
                                    wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
                                }
                            }
                        }
                    }   
                }
            }
        }
    }
    function does_file_exists(string $filename)
    {
        global $wpdb;
        $result = intval( $wpdb->get_var( "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_value LIKE '%/$filename'" ) );
        return $result;
    }