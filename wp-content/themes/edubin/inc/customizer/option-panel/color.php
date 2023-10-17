<?php

/*----------------------------
Colors
----------------------------*/
 Kirki::add_section( 'colors', array(
    'title'    =>  esc_html__( 'Colors', 'edubin' ),
    'description'    =>  esc_html__( 'Customize theme colors here', 'edubin' ),
    'panel' =>  'edubin_general_panel',
    // 'priority' => 40,
) );

 // Kirki::add_section( 'colors', array(
 //           'title'    => esc_html__('Colors', 'edubin'),
 //            'priority' => 40,
 //            'panel'    => 'edubin_general_panel',
 // ) );

// divider primary_color
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_primary_color',
    'section'     => 'colors',
    'priority' => 8,
    'default'     => '<h3 style="padding:10px 20px; background:#ffffff; color:#000000; margin:0; border-radius: 3px;">' . esc_html__( 'Theme Colors', 'edubin' ) . '</h3>',
] );

// Primary Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Primary Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'primary_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    'transport' =>  'auto',
    // 'js_vars'   =>  [
    //     [
    //         'element'   =>  ':root',
    //         'function'  =>  'css',
    //         'property'  =>  '--edubin-primary-color',
    //     ]
    // ]
) );

// Secondary Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Secondary Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'secondary_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    'transport' =>  'auto',
    // 'js_vars'   =>  [
    //     [
    //         'element'   =>  ':root',
    //         'function'  =>  'css',
    //         'property'  =>  '--edubin-secondary-color',
    //     ]
    // ]
) );

// divider Buttons
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_button_color',
    'section'     => 'colors',
    'priority' => 8,
    'default'     => '<h3 style="padding:10px 20px; background:#ffffff; color:#000000; margin:0; border-radius: 3px;">' . esc_html__( 'Buttons', 'edubin' ) . '</h3>',
] );

// Link Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Button Text', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'btn_text_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    'output'      => array(
        array(
            'element'  => 'button, input[type="button"], input[type="submit"]',
            'property' => 'color',
        ),
        array(
            'element'  => 'button, input[type="button"], input[type="submit"]',
            'property' => 'color',
        ),
        array(
            'element'  => '.edubin-main-btn a',
            'property' => 'color',
        ),
    )
) );

// Button Hover Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Button Text Hover Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'btn_text_hover_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    'output'      => array(
        array(
            'element'  => 'button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="submit"]:hover, input[type="submit"]:focus',
            'property' => 'color',
        ),
        array(
            'element'  => '.edubin-main-btn:hover',
            'property' => 'border-color',
        ),
        array(
            'element'  => '.edubin-main-btn:hover a',
            'property' => 'color',
        ),
    )
) );

// Button Background
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Button Background', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'btn_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    'output'      => array(
        array(
            'element'  => 'button, input[type="button"], input[type="submit"]',
            'property' => 'border-color',
        ),
        array(
            'element'  => 'button, input[type="button"], input[type="submit"]',
            'property' => 'background',
        ),
        array(
            'element'  => '.edubin-main-btn',
            'property' => 'background',
        ),
    )
) );

// Button Background Hover
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Button Background Hover', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'btn_hover_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    'output'      => array(
        array(
            'element'  => 'button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="submit"]:hover, input[type="submit"]:focus',
            'property' => 'background-color',
        ),
        array(
            'element'  => '.edubin-main-btn:hover',
            'property' => 'background-color',
        ),
    )
) );
// divider link_color
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_link_color',
    'section'     => 'colors',
    'priority' => 8,
    'default'     => '<h3 style="padding:10px 20px; background:#ffffff; color:#000000; margin:0; border-radius: 3px;">' . esc_html__( 'Links/Anchor', 'edubin' ) . '</h3>',
] );

// Link Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Link Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'link_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    // 'output'      => array(
    //         array(
    //             'element'  => '.site-footer .footer-bottom',
    //             'property' => 'background-color',
    //         )
    // )
) );

// Link Hover Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Link Hover Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'link_hover_color',
    'section' =>  'colors',
    'priority' => 8,
    'default'   => '',
    // 'output'      => array(
    //         array(
    //             'element'  => '.site-footer .footer-bottom',
    //             'property' => 'background-color',
    //         )
    // )
) );

// divider primary_color
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_placeholder_color',
    'section'     => 'colors',
    'priority' => 8,
    'default'     => '<h3 style="padding:10px 20px; background:#ffffff; color:#000000; margin:0; border-radius: 3px;">' . esc_html__( 'Placeholder', 'edubin' ) . '</h3>',
] );


// Placeholder
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Placeholder', 'edubin' ),
    'type' =>  'color',
    'priority' => 8,
    'settings' =>  'placeholder_color',
    'section' =>  'colors',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '::-webkit-input-placeholder',
                'property' => 'color',
            ),
            array(
                'element'  => ':-moz-placeholder',
                'property' => 'color',
            ),
            array(
                'element'  => '::-moz-placeholder',
                'property' => 'color',
            ),
            array(
                'element'  => ':-ms-input-placeholder',
                'property' => 'color',
            ),
    )
) );


// divider Other
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_others_colors',
    'section'     => 'colors',
    'priority' => 8,
    'default'     => '<h3 style="padding:10px 20px; background:#ffffff; color:#000000; margin:0; border-radius: 3px;">' . esc_html__( 'Default WordPress Colors', 'edubin' ) . '</h3>',
] );

