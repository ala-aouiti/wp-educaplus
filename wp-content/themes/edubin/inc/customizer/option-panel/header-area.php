<?php

/*----------------------------
Header Area
----------------------------*/
 Kirki::add_section( 'edubin_main_header_section', array(
    'title'    =>  esc_html__( 'Header Area', 'edubin' ),
    'panel'          => 'header_naviation_panel',
) );

// Header Variations
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'header_variations',
    'label'       => esc_html__( 'Header Variations', 'edubin' ),
    'section'     => 'edubin_main_header_section',
    'default'     => 'header_v2',
    'multiple'    => false,
    'choices'     => [
        'header_v1' => esc_html__('Style 1', 'edubin'),
        'header_v2' => esc_html__('Style 2', 'edubin'),
        'header_v3' => esc_html__('Max Mega Menu', 'edubin'),
    ],
] );

// divider before top_cart_enable
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_sticky_header_enable',
    'section'     => 'edubin_main_header_section',
    'default'     => '<hr>',
] );

// Sticky Header
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'sticky_header_enable',
    'label'       => esc_html__( 'Sticky Header', 'edubin' ),
    'section'     => 'edubin_main_header_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_top_search_enable',
    'section'     => 'edubin_main_header_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'top_search_enable',
    'label'       => esc_html__( 'Search', 'edubin' ),
    'section'     => 'edubin_main_header_section',
    'default'     => '1',
] );

// Search Popup Overlay
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Search Popup Overlay', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'search_popup_bg_color',
    'section' =>  'edubin_main_header_section',
    'default'   => '',
    'active_callback'   =>  [
        [
            'setting'   =>  'top_search_enable',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
    'output'      => array(
        array(
            'element'  => '.edubin-search-box',
            'property' => 'background-color',
        ),
        array(
            'element'  => '.edubin-search-box',
            'property' => 'background-color',
        ),
        array(
            'element'  => '.edubin-search-box .edubin-search-form input',
            'property' => 'border-color',
        ),
        array(
            'element'  => '.edubin-search-box .edubin-search-form input',
            'property' => 'color',
        ),
        array(
            'element'  => '.edubin-search-box .edubin-search-form input[type="text"]:focus',
            'property' => 'border-color',
        ),
        array(
            'element'  => '.edubin-search-box .edubin-search-form button',
            'property' => 'color',
        ),
    )
) );

// divider before cart_serach_top_space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_top_cart_enable',
    'section'     => 'edubin_main_header_section',
    'default'     => '<hr>',
] );

// Shop Cart
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'top_cart_enable',
    'label'       => esc_html__( 'Shop Cart', 'edubin' ),
    'section'     => 'edubin_main_header_section',
    'default'     => '1',
] );

// Cart/Search Top Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'cart_serach_top_space',
    'label'       => esc_html__( 'Cart/Search Top Space', 'edubin' ),
    'section'     => 'edubin_main_header_section',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'top_cart_enable',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Cart/Search Bottom Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'cart_serach_bottom_space',
    'label'       => esc_html__( 'Cart/Search Bottom Space', 'edubin' ),
    'section'     => 'edubin_main_header_section',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'top_cart_enable',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );


