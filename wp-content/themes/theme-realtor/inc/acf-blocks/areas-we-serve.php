<?php
//  Areas we serve
acf_register_block_type(array(
    'name' => 'areas-we-serve',
    'title' => __('Areas we serve'),
    'description' => __('Areas we serve block.'),
    'render_template' => 'template-parts/blocks/areas-we-serve/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'location-alt'
    ),
    'keywords' => array( 'areas', 'map' ),
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