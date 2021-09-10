<?php
//  Free Consultation Form
acf_register_block_type(array(
    'name' => 'free-consultation-form',
    'title' => __('Free Consultation Form'),
    'description' => __('Free Consultation Form block.'),
    'render_template' => 'template-parts/blocks/free-consultation-form/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'schedule'
    ),
    'keywords' => array( 'free', 'consultation', 'form' ),
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