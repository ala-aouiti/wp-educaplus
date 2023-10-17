<?php

/*----------------------------
Typography 
----------------------------*/
Kirki::add_section( 'edubin_typography', array(
    'title'    =>  esc_html__( 'Typography', 'edubin' ),
    'description'    =>  esc_html__( 'Site wide typography settings', 'edubin' ),
    'panel' =>  'edubin_general_panel'
) );

// Body Typography
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Body typography', 'edubin' ),
    'type'  =>  'typography',
    'settings'  => 'edubin_body_text_font',
    'section'   =>  'edubin_typography',
    'default'   =>  [
        'font-family'   =>  'Roboto',
        'variant'       =>  'regular',
        'font-size'     =>  '16px',
        'line-height'   =>  '26px',
        'letter-spacing'    =>  '0',
        // 'color'         =>  '#505050',
        'text-transform'    =>  'none',
    ],
    // 'choices'       => [
    //     'fonts' =>  [
    //         'google'    =>  [ 'popularity', 1000 ],
    //         'standard'  =>  [ 'sans-serif' ],
    //     ]
    // ],
    'transport'     =>  'auto',
    'output'        =>  [
        [
            'element'   =>  'body'
        ],
    ],
) );

// Content color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'content_color',
    'section' =>  'edubin_typography',
    'default'   => '#505050',
    'transport' =>  'auto',
    'js_vars'   =>  [
        [
            'element'   =>  ':root',
            'function'  =>  'css',
            'property'  =>  '--edubin-content-color',
        ]
    ]
) );

// Section divider one
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'section__divider_one_typo',
    'section'     => 'edubin_typography',
    'default'     => '<hr>',
] );

// Heading Typography
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Heading typography', 'edubin' ),
    'type'  =>  'typography',
    'settings'  => 'edubin_heading_font',
    'section'   =>  'edubin_typography',
    'default'   =>  [
        'font-family'   =>  'Roboto',
        'variant'       =>  '700',
        // 'line-height'   =>  'inherit',
        'letter-spacing'    =>  'inherit',
        'text-transform'    =>  'none',
        'subsets'       => array( 'latin' ),
        // 'color'         =>  '#07294d',
    ],
    'choices'       => [
        'variant' => array(
            'regular',
            '300',
            '500',
            '600',
            '700',
        ),
        // 'fonts' =>  [
        //     'google'    =>  [ 'popularity', 1000 ],
        //     'standard'  =>  [ 'sans-serif' ],
        // ]
    ],
    'transport'     =>  'auto',
    'output'        =>  [
        [
            'element'   =>  'h1, h2, h3, h4, h5, h6, .widget .widget-title, .learnpress .lp-single-course .widget-title, .tribe-common--breakpoint-medium.tribe-common .tribe-common-h6--min-medium'
        ],
    ],
) );

// Title Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'tertiary_color',
    'section' =>  'edubin_typography',
    'default'   => '',
    'output'      => array(
        array(
            'element'  => 'h1, h2, h3, h4, h5, h6',
            'property' => 'color',
        )
    )
) );
