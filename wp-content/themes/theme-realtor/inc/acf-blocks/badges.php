<?php
//  Badges
acf_register_block_type(array(
    'name' => 'badges',
    'title' => __('Badges'),
    'description' => __('Badges block.'),
    'render_template' => 'template-parts/blocks/badges/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'awards'
    ),
    'keywords' => array( 'badges' ),
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