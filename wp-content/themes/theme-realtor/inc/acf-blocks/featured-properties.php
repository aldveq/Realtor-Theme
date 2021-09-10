<?php
//  Featured Properties
acf_register_block_type(array(
    'name' => 'featured-properties',
    'title' => __('Featured Properties'),
    'description' => __('Featured Properties block.'),
    'render_template' => 'template-parts/blocks/featured-properties/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'admin-multisite'
    ),
    'keywords' => array( 'featured', 'properties' ),
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