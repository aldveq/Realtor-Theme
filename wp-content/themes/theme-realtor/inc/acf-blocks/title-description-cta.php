<?php
//  Title, Description & CTA
acf_register_block_type(array(
    'name' => 'title-description-cta',
    'title' => __('Title, Description & CTA'),
    'description' => __('Title, Description & CTA block.'),
    'render_template' => 'template-parts/blocks/title-description-cta/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'text'
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