<?php
//  Featured Services
acf_register_block_type(array(
    'name' => 'featured-services',
    'title' => __('Featured Services'),
    'description' => __('Featured Services block.'),
    'render_template' => 'template-parts/blocks/featured-services/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'admin-multisite'
    ),
    'keywords' => array( 'featured', 'services' ),
    'mode' => 'preview',
    'align' => 'full',
    'supports' => $supports,
    'example'  => array(
        'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview'    => true
                )
        )
    )
));