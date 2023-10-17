<?php

/*----------------------------
Footer Copyright
----------------------------*/

 // section for Edubin home template
 Kirki::add_section( 'edubin_footer_copyright_section', array(
    'title'    =>  esc_html__( 'Copyright', 'edubin' ),
    'description'    =>  esc_html__( 'Customize footer copyright texts', 'edubin' ),
    'panel' =>  'edubin_footer_panel'
) );

// edit footer copyright?
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'copyright_show',
    'label'       => esc_html__( 'Change Copyright Text?', 'edubin' ),
    'section'     => 'edubin_footer_copyright_section',
    'default'     => '1',
] );

// copyright text
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'text',
    'settings'    => 'copyright_text',
    'label'       => esc_html__( 'Copyright Text', 'edubin' ),
    'section'     => 'edubin_footer_copyright_section',
    'default'     => esc_html__('&copy; 2023 Pixelcurve. All rights reserved.', 'edubin'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.site-info p',
            'function'  =>  'html',
        ],
    ],
    // 'active_callback'   =>  [
    //     [
    //         'setting'   =>  'copyright_show',
    //         'operator'  =>  '===',
    //         'value'     =>  true,
    //     ],
    // ],
] );
// Section divider before No Copyright mobile menu
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_copyright_mobile_menu',
    'section'     => 'edubin_footer_copyright_section',
    'default'     => '<hr>',
    // 'active_callback'   =>  [
    //     [
    //         'setting'   =>  'copyright_show',
    //         'operator'  =>  '===',
    //         'value'     =>  true,
    //     ],
    // ],
] );

// edit footer copyright?
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'show_copyright_menu',
    'label'       => esc_html__( 'Show Copyright Menu On Small Device?', 'edubin' ),
    'section'     => 'edubin_footer_copyright_section',
    'default'     => '0',
    // 'active_callback'   =>  [
    //     [
    //         'setting'   =>  'copyright_show',
    //         'operator'  =>  '===',
    //         'value'     =>  true,
    //     ],
    // ],
] );

// divider Copyright
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_copyright_text_color',
    'section'     => 'edubin_footer_copyright_section',
    'default'     => '<hr>',
    // 'active_callback'   =>  [
    //     [
    //         'setting'   =>  'copyright_show',
    //         'operator'  =>  '===',
    //         'value'     =>  true,
    //     ],
    // ],
] );

// Footer Copyright Text
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Copyright Text Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'copyright_text_color',
    'section' =>  'edubin_footer_copyright_section',
    'default'   => '',
    // 'active_callback'   =>  [
    //     [
    //         'setting'   =>  'copyright_show',
    //         'operator'  =>  '===',
    //         'value'     =>  true,
    //     ],
    // ],
    'output'      => array(
            array(
                'element'  => '.site-footer .site-info a',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .site-info p',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget ul li a',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .comment-author-link',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget ul li:before',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget a',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget p',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .social-navigation a',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget ul li',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget .widget-title',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget_rss .rss-date, .site-footer .footer-cyperight-wrap .widget_rss li cite',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget #wp-calendar caption',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap table#wp-calendar th',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap table#wp-calendar th',
                'property' => 'border-color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget table#wp-calendar th',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap table#wp-calendar td#today',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap table#wp-calendar td#today',
                'property' => 'background-color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget table#wp-calendar td',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget table#wp-calendar td',
                'property' => 'border-color',
            ),
    )
) );

// Footer Copyright Link
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Copyright Link Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'copyright_link_color',
    'section' =>  'edubin_footer_copyright_section',
    'default'   => '',
    'transport' =>  'auto',
    // 'active_callback'   =>  [
    //     [
    //         'setting'   =>  'copyright_show',
    //         'operator'  =>  '===',
    //         'value'     =>  true,
    //     ],
    // ],
    'output'      => array(
            array(
                'element'  => '.site-footer .site-info a:hover',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget ul li a:hover',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .widget a:hover',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .social-navigation a:hover',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap .social-navigation a:focus',
                'property' => 'color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wrap table#wp-calendar td#today',
                'property' => 'background-color',
            ),
            array(
                'element'  => '.site-footer .footer-cyperight-wra table#wp-calendar td#today',
                'property' => 'background-color',
            )
    )
) );

// Footer Copyright Background
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Copyright Background Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'copyright_bg_color',
    'section' =>  'edubin_footer_copyright_section',
    'default'   => '',
    // 'active_callback'   =>  [
    //     [
    //         'setting'   =>  'copyright_show',
    //         'operator'  =>  '===',
    //         'value'     =>  true,
    //     ],
    // ],
    'output'      => array(
            array(
                'element'  => '.site-footer .footer-bottom',
                'property' => 'background-color',
            )
    )
) );
