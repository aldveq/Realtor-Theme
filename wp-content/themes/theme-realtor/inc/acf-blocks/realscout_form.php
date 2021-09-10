<?php
//  realscout_form
acf_register_block_type(array(
    'name' => 'realscout_form',
    'title' => __('Realscout Form'),
    'description' => __('Realscout form block.'),
    'render_template' => 'template-parts/blocks/realscout_form/index.php',
    'category' => 'olly-olly-realtor-theme-blocks',
    'icon' => array(
        'background' => $color_icon,
        'foreground' => $background_icon,
        'src' => 'feedback'
    ),
    'keywords' => array( 'realscout_form' ),
    'mode' => 'edit',
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