<?php

/*----------------------------
Header Menu
----------------------------*/
 Kirki::add_section( 'edubin_header_menu_section', array(
    'title'    =>  esc_html__( 'Header Menu', 'edubin' ),
    'panel'          => 'header_naviation_panel',
) );

// Sub Menu Right Align
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'sub_menu_right_align',
    'label'       => esc_html__( 'Sub Menu Right Align', 'edubin' ),
    'section'     => 'edubin_header_menu_section',
    'default'     => '1',
] );

// Home Menu Active Color
// Kirki::add_field( 'edubin_theme_config', [
//     'type'        => 'toggle',
//     'settings'    => 'home_menu_acive_color',
//     'label'       => esc_html__( 'Home Menu Active Color', 'edubin' ),
//     'section'     => 'edubin_header_menu_section',
//     'default'     => '0',
// ] );

// divider before top_cart_enable
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_edubin_menu_top_space',
    'section'     => 'edubin_header_menu_section',
    'default'     => '<hr>',
] );

// Menu Top Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'edubin_menu_top_space',
    'label'       => esc_html__( 'Menu Top Space', 'edubin' ),
    'section'     => 'edubin_header_menu_section',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
] );

// Menu Top Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'edubin_menu_button_space',
    'label'       => esc_html__( 'Menu Button Space', 'edubin' ),
    'section'     => 'edubin_header_menu_section',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ],
] );

// Menu Left Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'edubin_menu_left_space',
    'label'       => esc_html__( 'Menu Left Space', 'edubin' ),
    'section'     => 'edubin_header_menu_section',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 30,
        'step' => 1,
    ],
] );

// Menu Right Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'edubin_menu_right_space',
    'label'       => esc_html__( 'Menu Right Space', 'edubin' ),
    'section'     => 'edubin_header_menu_section',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 30,
        'step' => 1,
    ],
] );

// divider before edubin_header_menu_section
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_edubin_header_menu_section',
    'section'     => 'edubin_header_menu_section',
    'default'     => '<hr>',
] );

// Submenu Wrap Width
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'sub_menu_width',
    'label'       => esc_html__( 'Submenu Wrap Width', 'edubin' ),
    'section'     => 'edubin_header_menu_section',
    'default'     => 232,
    'choices'     => [
        'min'  => 0,
        'max'  => 400,
        'step' => 1,
    ],
] );

// Sub Menu Space
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'edubin_submenu_space',
    'label'       => esc_html__( 'Sub Menu Space', 'edubin' ),
    'section'     => 'edubin_header_menu_section',
    'default'     => '',
    'choices'     => [
        'min'  => 0,
        'max'  => 20,
        'step' => 1,
    ],
] );

// divider menu
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_menu_text_color',
    'section'     => 'edubin_header_menu_section',
    'default'     => '<h3 style="padding:10px 20px; background:#ffffff; color:#000000; margin:0; border-radius: 3px;">' . esc_html__( 'Menu Colors', 'edubin' ) . '</h3>',
] );

// Link Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Menu Text Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'menu_text_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.main-navigation a',
                'property' => 'color',
            ),
            array(
                'element'  => '.mobile-menu > ul li a',
                'property' => 'color',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation .current-menu-item.menu-item-home > a',
                'property' => 'color',
            )
    )
) );

// Menu Hover Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Menu Hover Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'menu_hover_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.mobile-menu > ul li a:hover',
                'property' => 'color',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation li.current-menu-item > a',
                'property' => 'color',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation a:hover',
                'property' => 'color',
            ),
            array(
                'element'  => '.main-navigation li.current-menu-ancestor > a',
                'property' => 'color',
            ),
            array(
                'element'  => '.main-navigation ul ul a:hover',
                'property' => 'color',
            )
    )
) );

// Menu Active
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Menu Active', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'menu_active_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.main-navigation .current-menu-item.menu-item-home > a',
                'property' => 'color',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation .current-menu-item.menu-item-home > a',
                'property' => 'color',
            ),
            array(
                'element'  => '.main-navigation li.current-menu-ancestor > a',
                'property' => 'color',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation ul > li.current-menu-ancestor > a',
                'property' => 'color',
            ),
            array(
                'element'  => '.main-navigation li > ul >.current-menu-item > a',
                'property' => 'color',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation ul > li > ul .current-menu-item > a',
                'property' => 'color',
            ),
    )
) );

// Sub Menu Text Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Sub Menu Text Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'sub_menu_text_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.menu-effect-2 .main-navigation ul ul a',
                'property' => 'color',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation ul ul a:hover',
                'property' => 'color',
            ),
    )
) );

// Sub Menu Arrow Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Sub Menu Arrow Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'sub_menu_arrow_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.main-navigation ul ul a::before',
                'property' => 'background',
            )
    )
) );

// Sub Menu Background Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Sub Menu Background Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'sub_menu_bg_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.main-navigation ul ul',
                'property' => 'background',
            ),
            array(
                'element'  => '.menu-effect-2 .main-navigation ul ul',
                'property' => 'background',
            )
    )
) );

// Sub menu border color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Sub Menu Border Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'sub_menu_border_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.menu-effect-2 .main-navigation ul ul',
                'property' => 'border-top-color',
            )
    )
) );

// Header Menu Background
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Menu Background', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'header_menu_bg_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.is-header-sticky',
                'property' => 'background',
            )
    )
) );

// Header Sticky Menu Background
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Sticky Menu Background', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'header_menu_sticky_bg_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.is-header-sticky.sticky-active',
                'property' => 'background',
            )
    )
) );

// Mobile Menu Icon Color
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Mobile Menu Icon Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'mobile_menu_icon_color',
    'section' =>  'edubin_header_menu_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.header-menu .mobile-menu-icon i',
                'property' => 'color',
            ),
            array(
                'element'  => '.header-menu span.zmm-dropdown-toggle',
                'property' => 'color',
            ),
    )
) );

