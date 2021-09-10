<?php
//  Brand
acf_register_block_type(array(
    'name' => 'brand',
    'title' => __('Brand'),
    'description' => __('Brand block.'),
    'render_template' => 'template-parts/blocks/brand/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'superhero-alt'
    ),
    'keywords' => array( 'brand' ),
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