<?php
//  Other Neighborhoods
acf_register_block_type(array(
    'name' => 'other-neighborhoods',
    'title' => __('Other Neighborhoods'),
    'description' => __('Other Neighborhoods block.'),
    'render_template' => 'template-parts/blocks/other-neighborhoods/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'admin-multisite'
    ),
    'keywords' => array( 'neighborhoods', 'other' ),
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