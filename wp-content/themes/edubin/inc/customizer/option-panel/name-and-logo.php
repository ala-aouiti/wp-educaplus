<?php

/*----------------------------
Name & Logo
----------------------------*/

 // section for Header customization
 Kirki::add_section( 'title_tagline', array(
    'title'    =>  esc_html__( 'Site Name & Logo', 'edubin' ),
    'description'    =>  esc_html__( 'Customize all the settings related to Header', 'edubin' ),
    'panel' =>  'header_naviation_panel'
) );

// Secondary Logo (Optional)
// Kirki::add_field( 'edubin_theme_config', [
//     'type'        => 'image',
//     'settings'    => 'sticky_logo',
//     'label'       => esc_html__( 'Secondary Logo (Optional)', 'edubin' ),
//     'section'     => 'title_tagline',
//     'default'     => '',
// ] );

// divider before logo_size
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_logo_size',
    'section'     => 'title_tagline',
    'default'     => '<hr>',
] );

// Secondary Logo (Optional)
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'logo_size',
    'label'       => esc_html__( 'Logo Size', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => 180,
    'choices'     => [
        'min'  => 10,
        'max'  => 400,
        'step' => 1,
    ],
    'output'      => array(
            array(
                'element'  => 'body.home.title-tagline-hidden.has-header-image .custom-logo-link img, body.home.title-tagline-hidden.has-header-video .custom-logo-link img, .header-wrapper .header-menu .site-branding img, .site-branding img.custom-logo',
                'property' => 'max-width',
                'units' => 'px',
            )
    )
] );

// Logo Top Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'logo_top_space',
    'label'       => esc_html__( 'Logo Top Space', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
    // 'output'      => array(
    //         array(
    //             'element'  => '.header-sections .edubin-mobile-logo img',
    //             'property' => 'max-width',
    //             'units' => 'px',
    //         )
    // )
] );

// Logo Bottom Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'logo_bottom_space',
    'label'       => esc_html__( 'Logo Bottom Space', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
    // 'output'      => array(
    //         array(
    //             'element'  => '.header-sections .edubin-mobile-logo img',
    //             'property' => 'max-width',
    //             'units' => 'px',
    //         )
    // )
] );

// divider mobile logo
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_mobile_logo',
    'section'     => 'title_tagline',
    'default'     => '<hr>',
] );

// Mobile Logo
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'enable_mobile_logo',
    'label'       => esc_html__( 'Mobile Logo?', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => '0',
] );

// Mobile Logo (Optional)
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'image',
    'settings'    => 'mobile_logo',
    'label'       => esc_html__( 'Mobile Logo', 'edubin' ),
    'description' => esc_html__('Mobile logo only for small device.', 'edubin'),
    'section'     => 'title_tagline',
    'default'     => '',
    'active_callback'   =>  [
        [
            'setting'   =>  'enable_mobile_logo',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Mobile Logo Size
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'mobile_logo_size',
    'label'       => esc_html__( 'Mobile Logo Size', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => 50,
    'choices'     => [
        'min'  => 50,
        'max'  => 300,
        'step' => 1,
    ],
    'output'      => array(
            array(
                'element'  => '.header-sections .edubin-mobile-logo img',
                'property' => 'max-width',
                'units' => 'px',
            )
    ),
    'active_callback'   =>  [
        [
            'setting'   =>  'enable_mobile_logo',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ]
] );

// Mobile Logo Screen Width
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'mobile_logo_screen_width',
    'label'       => esc_html__( 'Mobile Logo Screen Width', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => 480,
    'choices'     => [
        'min'  => 480,
        'max'  => 992,
        'step' => 1,
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'enable_mobile_logo',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Mobile Logo Top Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'logo_top_space_mobile',
    'label'       => esc_html__( 'Mobile Logo Top Space', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'enable_mobile_logo',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Mobile Logo bottom Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'logo_bottom_space_mobile',
    'label'       => esc_html__( 'Mobile Logo bottom Space', 'edubin' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'enable_mobile_logo',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// divider before favicon
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_favicon',
    'section'     => 'title_tagline',
    'default'     => '<hr>',
] );
