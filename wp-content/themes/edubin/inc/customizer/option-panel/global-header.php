<?php
/*----------------------------
Global Header
----------------------------*/
 Kirki::add_section( 'edubin_global_header_section', array(
    'title'    =>  esc_html__( 'Global Header', 'edubin' ),
    'panel'          => 'header_naviation_panel',
) );

// Header Type
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'edubin_header_type',
    'label'       => esc_html__( 'Header Type', 'edubin' ),
    'section'     => 'edubin_global_header_section',
    'default'     => 'edubin_theme_header',
    'choices'     => [
        'edubin_theme_header' => esc_html__( 'Theme Header', 'edubin' ),
        'edubin_elementor_header'   => esc_html__( 'Elementor Builder', 'edubin' ),
    ],
] );


Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'edubin_get_elementor_header',
    'label'       => esc_html__( 'Select Elementor Header', 'edubin' ),
    'section'     => 'edubin_global_header_section',
    'default'     => '',
    'placeholder' => esc_html__( 'Select a Header...', 'edubin' ),
    'multiple'    => false,
    'choices'     => Kirki_Helper::get_posts(
        array(
            'posts_per_page' => -1,
            'post_type'      => 'eb_header'
        ) ,
    ),
    'active_callback'   =>  [
        [
            'setting'   =>  'edubin_header_type',
            'operator'  =>  '===',
            'value'     =>  'edubin_elementor_header',
        ],
    ],
] );

