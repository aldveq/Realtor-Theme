<?php
//  About Us Profile
acf_register_block_type(array(
    'name' => 'about-us-profile',
    'title' => __('About Us Profile'),
    'description' => __('About Us Profile block.'),
    'render_template' => 'template-parts/blocks/about-us-profile/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'money'
    ),
    'keywords' => array( 'about-us', 'profile' ),
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