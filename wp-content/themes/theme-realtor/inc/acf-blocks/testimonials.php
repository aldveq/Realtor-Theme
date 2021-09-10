<?php
//  Testimonials
acf_register_block_type(array(
    'name' => 'testimonials',
    'title' => __('Testimonials'),
    'description' => __('Testimonials block.'),
    'render_template' => 'template-parts/blocks/testimonials/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'testimonial'
    ),
    'keywords' => array( 'testimonials' ),
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