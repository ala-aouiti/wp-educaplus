<?php

/*----------------------------
Sidebar
----------------------------*/
 Kirki::add_section( 'edubin_wc_section', array(
    'title'    =>  esc_html__( 'Sidebar', 'edubin' ),
    'panel'          => 'woocommerce',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'edubin_wc_sidebar',
    'label'       => esc_html__( 'Sidebar', 'edubin' ),
    'description' => esc_html__( 'Select your sidebar position', 'edubin' ),
    'section'     => 'edubin_wc_section',
    'default'     => 'alignright',
    'choices'     => [
        'sidebarleft'   => esc_html__( 'Left', 'edubin' ),
        'sidebarnone'   => esc_html__( 'No Sidebar', 'edubin' ),
        'alignright'   => esc_html__( 'Right', 'edubin' ),
    ],
 ] );

// divider before page_header_height
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_blog_sidebar_width',
    'section'     => 'edubin_wc_section',
    'default'     => '<hr>',
] );

// Sidebar Width
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'woo_sidebar_width',
    'label'       => esc_html__( 'Sidebar Width', 'edubin' ),
    'section'     => 'edubin_wc_section',
    'default'     => 'sidebar_big',
    'choices'     => [
        'sidebar_small'  => esc_html__('25%', 'edubin'),
        'sidebar_big' => esc_html__('33%', 'edubin'),
    ],

] );


/*----------------------------
Reviews
----------------------------*/
 Kirki::add_section( 'edubin_wc_review_section', array(
    'title'    =>  esc_html__( 'Reviews', 'edubin' ),
    'panel'          => 'woocommerce',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'woo_review_tab_show',
    'label'       => esc_html__( 'Reviews?', 'edubin' ),
    'section'     => 'edubin_wc_review_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'woo_review_tab_login_user_show',
    'label'       => esc_html__( 'Publicly/Login User only', 'edubin' ),
    'section'     => 'edubin_wc_review_section',
    'default'     => '1',
] );


