<?php

/*----------------------------
Back to Top 
----------------------------*/

 // section for Back To Top
 Kirki::add_section( 'edubin_back_to_top_section', array(
    'title'    =>  esc_html__( 'Back To Top', 'edubin' ),
    'panel' =>  'edubin_general_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'back_to_top_show',
    'label'       => esc_html__( 'Back To Top?', 'edubin' ),
    'section'     => 'edubin_back_to_top_section',
    'default'     => '1',
] );
// divider Back to Top
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'header_divider_bakc_to_top_icon_color',
    'section'     => 'edubin_back_to_top_section',
    'default'     => '<hr>',
] );

// Back to Top Icon
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Icon Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'bakc_to_top_icon_color',
    'section' =>  'edubin_back_to_top_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.back-to-top',
                'property' => 'color',
            ),
            array(
                'element'  => '.back-to-top > i',
                'property' => 'color',
            )
    )
) );

// Back to Top Background
Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Background Color', 'edubin' ),
    'type' =>  'color',
    'settings' =>  'bakc_to_top_bg_color',
    'section' =>  'edubin_back_to_top_section',
    'default'   => '',
        'output'      => array(
            array(
                'element'  => '.back-to-top',
                'property' => 'background',
            )
    )
) );