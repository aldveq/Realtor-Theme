<?php
//  Accordion
acf_register_block_type(array(
    'name' => 'accordion',
    'title' => __('Accordion'),
    'description' => __('Accordion block.'),
    'render_template' => 'template-parts/blocks/accordion/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'align-wide'
    ),
    'keywords' => array( 'accordion' ),
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