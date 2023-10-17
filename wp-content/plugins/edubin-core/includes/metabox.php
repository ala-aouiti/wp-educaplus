<?php

// === Page Meta Box ===
add_filter( 'rwmb_meta_boxes', 'edubin_page_metabox__2' );

function edubin_page_metabox__2( $meta_boxes ) {
    $prefix = '_edubin_';

    // Page Options

    $meta_boxes[] = [
        'title'      => esc_html__( 'Page Options', 'edubin-core' ),
        'id'         => 'page_header_options',
        'post_types' => get_post_types(),
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'divider',
            ],
            [
                'type' => 'color',
                'name' => esc_html__( 'Page Background Color', 'edubin-core' ),
                'id'   => $prefix . 'page_background_color',
            ],
            [
                'type' => 'divider',
            ],
            // [
            //     'type' => 'heading',
            //     'name' => esc_html__( 'Page Title', 'edubin-core' ),
            // ],
            [
                'type'     => 'button_group',
                'name'          => 'Page Title',
                'id'      => $prefix . 'page_header_enable',
                'options'  => [
                    'enable' => 'Enable',
                    'disable' => 'Disable',
                ],
                'std' => 'enable',
            ],
            [
                'type' => 'background',
                'name' => 'Page Title background',
                'id'      => $prefix . 'mb_header_img',
                'attributes' => [
                    'data-conditional-logic' => [[
                        [$prefix . 'page_header_enable', '=', 'enable']
                    ]],
                ],
            ],
            [
                'type' => 'divider',
            ],
            [
                'type'     => 'button_group',
                'name'          => 'Select Header Type',
                'id'      => $prefix . 'mb_customize_header_layout',
                'options'  => [
                    'mb_theme_header' => 'Default Theme Header',
                    'mb_elementor_header' => 'Elementor Header',
                ],
                'std' => 'mb_theme_header',
            ],
            [
                'type'            => 'select',
                'name'            => 'Select A Custom Elementor Header',
                'id'         => $prefix . 'mb_elementor_header',
                'options'         => edubin_get_elementor_header(),
                'attributes' => [
                    'data-conditional-logic' => [[
                        [$prefix . 'mb_customize_header_layout', '=', 'mb_elementor_header']
                    ]],
                ],
            ],
        ],
    ];

    // Sidebar Options

    $meta_boxes[] = [
        'title'      => esc_html__( 'Sidebar Options', 'edubin-core' ),
        'id'         => 'page_sidebar_options',
        'post_types' => 'page',
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'divider',
            ],

            [
                'type'     => 'button_group',
                'name'          => 'Sidebar Align',
                'id'      => $prefix . 'sidebar_align',
                'options'  => [
                    'none' => 'None',
                    'left' => 'Left Sidebar',
                    'right' => 'Right Sidebar',
                ],
                'std' => 'none',
            ],

            [
                'type'     => 'button_group',
                'name'          => 'Sidebar Sticky',
                'id'      => $prefix . 'sidebar_sticky',
                'options'  => [
                    'enable' => 'Enable',
                    'disable' => 'Disable',
                ],
                'std' => 'disable',
                'attributes' => [
                    'data-conditional-logic' => [[
                        [$prefix . 'sidebar_align', '!=', 'none']
                    ]],
                ],
            ],

            [
                'type'     => 'select',
                'name'          => 'Sidebar Width',
                'id'      => $prefix . 'sidebar_width',
                'options'  => [
                    '3' => __('25%', 'edubin-core'),
                    '4' => __('33%', 'edubin-core'),
                ],
                'std' => '3',
                'attributes' => [
                    'data-conditional-logic' => [[
                        [$prefix . 'sidebar_align', '!=', 'none']
                    ]],
                ],
            ],
           
            [
                'type'     => 'select',
                'name'          => 'Sidebar Side Gap',
                'id'      => $prefix . 'sidebar_side_gap',
                'options'  => [
                    '5' => __('05px', 'edubin-core'),
                    '10' => __('10px', 'edubin-core'),
                    '15' => __('15px', 'edubin-core'),
                    '20' => __('20px', 'edubin-core'),
                    '25' => __('25px', 'edubin-core'),
                    '30' => __('30px', 'edubin-core'),
                    '35' => __('35px', 'edubin-core'),
                    '40' => __('40px', 'edubin-core'),
                    '45' => __('45px', 'edubin-core'),
                    '50' => __('50px', 'edubin-core'),
                ],
                'std' => '30',
                'attributes' => [
                    'data-conditional-logic' => [[
                        [$prefix . 'sidebar_align', '!=', 'none']
                    ]],
                ],
            ],
           

        ],
    ];


    // Footer Options
    
    $meta_boxes[] = [
        'title'      => esc_html__( 'Footer Options', 'edubin-core' ),
        'id'         => 'page_footer_options',
        'post_types' => get_post_types(),
        'context'    => 'normal',
        'fields'     => [

            [
                'type'     => 'button_group',
                'name'          => 'Select Header Type',
                'id'      => $prefix . 'mb_customize_footer_layout',
                'options'  => [
                    'mb_theme_footer'     => __('Default Theme Footer', 'edubin-core'),
                    'mb_elementor_footer' => __('Elementor Footer', 'edubin-core'),
                ],
                'std' => 'mb_theme_footer',
            ],
            [
                'type'            => 'select',
                'name'            => 'Select A Custom Elementor Footer',
                'id'         => $prefix . 'mb_elementor_footer',
                'options'         => edubin_get_elementor_footer(),
                'attributes' => [
                    'data-conditional-logic' => [[
                        [$prefix . 'mb_customize_footer_layout', '=', 'mb_elementor_footer']
                    ]],
                ],
            ],
        ],
    ];

    return $meta_boxes;
}

// === LearnPress Meta Box ===
add_filter( 'rwmb_meta_boxes', 'edubin_lp_course_features_metabox' );

function edubin_lp_course_features_metabox( $meta_boxes ) {
    $prefix = '_edubin_';

    // Course Options

    $meta_boxes[] = [
        'title'      => esc_html__( 'Course Options', 'edubin-core' ),
        'id'           => $prefix . 'edubin_lp_course_metabox',
        'post_types' => 'lp_course',
        'context'    => 'normal',
        'fields'     => [
            
            [
                'id'    => 'edubin_lp_video',
                'name'  => 'Add Intro Video URL',
                'type'  => 'oembed',
            ],

[
    'id'      => 'field_id',
    'name'    => 'Fieldset Text',
    'type'    => 'fieldset_text',
    'options' => [
        'name'    => 'Name',
        'lp_custom_feature_group_value' => 'Address',
        'lp_custom_feature_group_label'   => 'Email',
    ],
],

        ],
    ];


    return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'meta_ape_test_2' );

function meta_ape_test_2( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = array (
        'title' => esc_html__( 'APE test 2', 'text-domain' ),
        'id' => 'edubin_lp_course_feature_repeater',
        'post_types' => 'lp_course',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(

            array (
                'id' => 'lp_custom_feature_group',
                'type' => 'group',
                'name' => esc_html__( 'Test Questions', 'text-domain' ),
                'fields' => array(
                    array (
                        'id' => 'lp_custom_feature_group_label',
                        'type' => 'text',
                        'name' => esc_html__( 'Question text', 'text-domain' ),
                        // 'required' => 1,
                    ),
  
                    array (
                        'id' => 'lp_custom_feature_group_label',
                        'type' => 'text',
                        'name' => esc_html__( 'Question text', 'text-domain' ),
                        // 'required' => 1,
                    ),
  
                    array (
                        'id' => 'lp_custom_feature_group_value',
                        'type' => 'text',
                        'name' => esc_html__( 'Question text', 'text-domain' ),
                        // 'required' => 1,
                    ),
  
                ),
                'clone' => 1,
                'sort_clone' => 1,
                'default_state' => 'expanded',
            ),
        ),

    );

    return $meta_boxes;
}

