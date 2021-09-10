<?php
//  Mortgage Calculator
acf_register_block_type(array(
    'name' => 'mortgage-calculator',
    'title' => __('Mortgage Calculator'),
    'description' => __('Mortgage Calculator block.'),
    'render_template' => 'template-parts/blocks/mortgage-calculator/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'calculator'
    ),
    'keywords' => array( 'mortgage-calculator' ),
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