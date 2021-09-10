<?php
//  Hero
acf_register_block_type(array(
    'name' => 'hero',
    'title' => __('Hero'),
    'description' => __('Hero block.'),
    'render_template' => 'template-parts/blocks/hero/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'format-image'
    ),
    'keywords' => array( 'hero' ),
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