<?php
//  Contact
acf_register_block_type(array(
    'name' => 'contact',
    'title' => __('Contact'),
    'description' => __('Contact block.'),
    'render_template' => 'template-parts/blocks/contact/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'align-right'
    ),
    'keywords' => array( 'contact' ),
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