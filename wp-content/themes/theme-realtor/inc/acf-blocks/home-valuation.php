<?php
//  Home Valuation
acf_register_block_type(array(
    'name' => 'home-valuation',
    'title' => __('Home Valuation'),
    'description' => __('Home Valuation block.'),
    'render_template' => 'template-parts/blocks/home-valuation/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'admin-home'
    ),
    'keywords' => array( 'home-valuation' ),
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