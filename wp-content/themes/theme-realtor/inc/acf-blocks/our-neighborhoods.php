<?php
//  Our Neighborhoods
acf_register_block_type(array(
    'name' => 'our-neighborhoods',
    'title' => __('Our Neighborhoods'),
    'description' => __('Our Neighborhoods block.'),
    'render_template' => 'template-parts/blocks/our-neighborhoods/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'admin-multisite'
    ),
    'keywords' => array( 'neighborhoods' ),
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