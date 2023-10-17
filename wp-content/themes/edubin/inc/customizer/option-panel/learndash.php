<?php
/*----------------------------
LearnDash Archive Page
----------------------------*/
 Kirki::add_section( 'edubin_ld_archive_page_section', array(
    'title'    =>  esc_html__( 'Course Archive Page', 'edubin' ),
    'panel' =>  'edubin_ld_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'text',
    'settings'    => 'ld_archive_page_title',
    'label'       => esc_html__( 'Custom Archive Page Title', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => esc_html__('Courses', 'edubin'),
    'transport'   => 'auto',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_course_archive_style',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'ld_course_archive_style',
    'label'       => esc_html__( 'Course Style', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'multiple'    => false,
    'default'     => '1',
    'choices'     => [
        '1' => esc_html__('Style 01', 'edubin'),
        '2' => esc_html__('Style 02', 'edubin'),
        '3' => esc_html__('Style 03', 'edubin'),
        '4' => esc_html__('Style 04', 'edubin'),
        '5' => esc_html__('Style 05', 'edubin'),
        '6' => esc_html__('Style 06', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_course_per_page',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'number',
    'settings'    => 'ld_course_per_page',
    'label'       => esc_html__( 'Course Count', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => 6,
    'choices'     => [
        'min'  => 1,
        'step' => 1,
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'ld_course_archive_clm',
    'label'       => esc_html__( 'Courses Columns', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '4',
    'choices'     => [
        '6' => esc_html__('2', 'edubin'),
        '4' => esc_html__('3', 'edubin'),
        '3' => esc_html__('4', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_intor_video_image',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_archive_media_show',
    'label'       => esc_html__( 'Media?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_custom_placeholder_image',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'image',
    'settings'    => 'ld_custom_placeholder_image',
    'label'       => esc_html__( 'Custom Placeholder Image', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_archive_image_height',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'ld_archive_image_height',
    'label'       => esc_html__( 'Fixed Image Height', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '',
    'choices'     => [
        'min'  => 100,
        'max'  => 450,
        'step' => 1,
    ],
    'output'      => array(
            array(
                'element'  => '.edubin-course .course__media img',
                'property' => 'height',
                'units' => 'px',
            )
    )
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_archive_image_size',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'ld_archive_image_size',
    'label'       => esc_html__( 'Select Image Size', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => 'medium_large',
    'multiple'    => false,
    'placeholder' => esc_html__( 'Select a image size', 'edubin' ),
    'choices'     => edubin_get_thumbnail_sizes(),
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_header_top',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_intor_video_image',
    'label'       => esc_html__( 'Intro Video?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_archive_title_show',
    'label'       => esc_html__( 'Title?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_course_title_height',
    'label'       => esc_html__( 'Fixed Title Height?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => false,
    'active_callback'   =>  [
        [
            'setting'   =>  'ld_archive_title_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_excerpt_show',
    'label'       => esc_html__( 'Excerpt?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_price_show',
    'label'       => esc_html__( 'Price?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_lesson_show',
    'label'       => esc_html__( 'Lesson?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_lesson_text_show',
    'label'       => esc_html__( 'Lesson Text?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'ld_lesson_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_topic_show',
    'label'       => esc_html__( 'Topics?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_topic_text_show',
    'label'       => esc_html__( 'Topics Text?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => false,
    'active_callback'   =>  [
        [
            'setting'   =>  'ld_topic_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_cat_show',
    'label'       => esc_html__( 'Categories?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_instructor_name_on_off',
    'label'       => esc_html__( 'Create by Name?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_review_show',
    'label'       => esc_html__( 'Review?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_review_text_show',
    'label'       => esc_html__( 'Review Text?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'ld_review_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_instructor_img_on_off',
    'label'       => esc_html__( 'Instructor Avatar?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_instructor_name_on_off',
    'label'       => esc_html__( 'Instructor Name?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_custom_closed_btn_url',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'custom_closed_btn_url',
    'label'       => esc_html__( 'Custom Closed Button URL?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_see_more_btn',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'see_more_btn',
    'label'       => esc_html__( 'See More Button?', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'See More - Custom Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'ld_see_more_btn_text',
    'section' =>  'edubin_ld_archive_page_section',
    'default'     => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'see_more_btn',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_hide_archive_text',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Free - Custom Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'free_custom_text',
    'section' =>  'edubin_ld_archive_page_section',
    'default'     => '',
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_free_custom_text',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Enrolled - Custom Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'enrolled_custom_text',
    'section' =>  'edubin_ld_archive_page_section',
    'default'     => '',
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_completed_custom_text',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Completed - Custom Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'completed_custom_text',
    'section' =>  'edubin_ld_archive_page_section',
    'default'     => '',
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_archive_pagi_aligment',
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'ld_archive_pagi_aligment',
    'label'       => esc_html__( 'pagination', 'edubin' ),
    'section'     => 'edubin_ld_archive_page_section',
    'default'     => 'center',
    'choices'     => [
        'flex-start'  => esc_html__('Left', 'edubin'),
        'center' => esc_html__('Center', 'edubin'),
        'flex-end' => esc_html__('Right', 'edubin'),
    ],
] );
/*----------------------------
LearnDash Single Page
----------------------------*/
 Kirki::add_section( 'edubin_ld_single_page_section', array(
    'title'    =>  esc_html__( 'Course Single Page', 'edubin' ),
    'panel' =>  'edubin_ld_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'ld_single_page_layout',
    'label'       => esc_html__( 'Page Style', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
    'multiple'    => false,
    'choices'     => [
        '1' => esc_html__('Style 01', 'edubin'),
        '2' => esc_html__('Style 02', 'edubin'),
        '3' => esc_html__('Style 03', 'edubin'),
        '4' => esc_html__('Style 04', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_intro_video_position',
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'ld_intro_video_position',
    'label'       => esc_html__( 'Preview Media', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => 'intro_video_content',
    'multiple'    => false,
    'choices'     => [
        'none' => esc_html__('None', 'edubin'),
        'intro_video_content' => esc_html__('Content Section', 'edubin'),
        'intro_video_sidebar' => esc_html__('Sidebar Section', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_single_header_meta',
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_header_meta',
    'label'       => esc_html__( 'Header Meta?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_single_breadcrumb',
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_breadcrumb',
    'label'       => esc_html__( 'Breadcrumb?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_single_sidebar_sticky',
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_course_info',
    'label'       => esc_html__( 'Course Info?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_single_course_info',
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_sidebar_sticky',
    'label'       => esc_html__( 'Sidebar Sticky?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_single_course_graduation',
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '<hr>',
] );

// Kirki::add_field( 'edubin_theme_config', [
//     'type'        => 'toggle',
//     'settings'    => 'ld_single_course_graduation',
//     'label'       => esc_html__( 'Course Graduation?', 'edubin' ),
//     'section'     => 'edubin_ld_single_page_section',
//     'default'     => '1',
// ] );

// Kirki::add_field( 'edubin_theme_config', [
//     'type'        => 'toggle',
//     'settings'    => 'ld_single_course_time',
//     'label'       => esc_html__( 'Course Time?', 'edubin' ),
//     'section'     => 'edubin_ld_single_page_section',
//     'default'     => '1',
// ] );

// Kirki::add_field( 'edubin_theme_config', [
//     'type'        => 'toggle',
//     'settings'    => 'ld_single_progress',
//     'label'       => esc_html__( 'Progress?', 'edubin' ),
//     'section'     => 'edubin_ld_single_page_section',
//     'default'     => '1',
// ] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_lesson_single',
    'label'       => esc_html__( 'Lesson?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_topic',
    'label'       => esc_html__( 'Topics?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_duration',
    'label'       => esc_html__( 'Duration?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_cat',
    'label'       => esc_html__( 'Category?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_social_shear',
    'label'       => esc_html__( 'Social Shear?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_instructor_single',
    'label'       => esc_html__( 'Instructor?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_course_cat',
    'label'       => esc_html__( 'Category List?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_review',
    'label'       => esc_html__( 'Reviews?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_short_text',
    'label'       => esc_html__( 'Short Text?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Heading', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'ld_single_info_heading',
    'section' =>  'edubin_ld_single_page_section',
    'default'   => esc_html__( 'Course Info', 'edubin' ),
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_last_update',
    'label'       => esc_html__( 'Last Updated?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_created_by',
    'label'       => esc_html__( 'Created By?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_single_language',
    'label'       => esc_html__( 'Language?', 'edubin' ),
    'section'     => 'edubin_ld_single_page_section',
    'default'     => '1',
] );


/*----------------------------
LearnDash Related Courses
----------------------------*/
 Kirki::add_section( 'edubin_ld_related_course_section', array(
    'title'    =>  esc_html__( 'Related Courses', 'edubin' ),
    'panel' =>  'edubin_ld_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'ld_related_course_position',
    'label'       => esc_html__( 'Custom Features List Position', 'edubin' ),
    'section'     => 'edubin_ld_related_course_section',
    'default'     => 'content',
    'multiple'    => false,
    'choices'     => [
        'none' => esc_html__('None', 'edubin'),
        'sidebar' => esc_html__('Sidebar Area', 'edubin'),
        'content' => esc_html__('Content Area', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_related_course_style',
    'section'     => 'edubin_ld_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'ld_related_course_style',
    'label'       => esc_html__( 'Related Course Style', 'edubin' ),
    'section'     => 'edubin_ld_related_course_section',
    'default'     => 'square',
    'choices'     => [
        'round' => esc_html__('Round', 'edubin'),
        'square' => esc_html__('Square', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_related_course_title',
    'section'     => 'edubin_ld_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Heading', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'ld_related_course_title',
    'section' =>  'edubin_ld_related_course_section',
    'default'   => 'Related Courses',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'ld_course_feature_cat_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_related_course_items',
    'section'     => 'edubin_ld_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'number',
    'settings'    => 'ld_related_course_items',
    'label'       => esc_html__( 'Number of Courses', 'edubin' ),
    'section'     => 'edubin_ld_related_course_section',
    'default'     => 3,
    'choices'     => [
        'min'  => 1,
        'step' => 1,
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_related_course_by',
    'section'     => 'edubin_ld_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'ld_related_course_by',
    'label'       => esc_html__( 'Related Course By', 'edubin' ),
    'section'     => 'edubin_ld_related_course_section',
    'default'     => 'tags',
    'choices'     => [
        'category' => esc_html__('Category', 'edubin'),
        'tags' => esc_html__('Tags', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_related_price',
    'label'       => esc_html__( 'Price?', 'edubin' ),
    'section'     => 'edubin_ld_related_course_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_related_lesson',
    'label'       => esc_html__( 'Lesson?', 'edubin' ),
    'section'     => 'edubin_ld_related_course_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'ld_related_topic',
    'label'       => esc_html__( 'Topics?', 'edubin' ),
    'section'     => 'edubin_ld_related_course_section',
    'default'     => '1',
] );

/*----------------------------
LearnDash Group Page
----------------------------*/
 Kirki::add_section( 'edubin_ld_groups_section', array(
    'title'    =>  esc_html__( 'Groups Archive Page', 'edubin' ),
    'panel' =>  'edubin_ld_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'text',
    'settings'    => 'ld_groups_archive_page_title',
    'label'       => esc_html__( 'Custom Groups Page Title', 'edubin' ),
    'section'     => 'edubin_ld_groups_section',
    'default'     => esc_html__('Groups Courses', 'edubin'),
    'transport'   => 'auto',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_ld_course_archive_style',
    'section'     => 'edubin_ld_groups_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'number',
    'settings'    => 'ld_groups_course_per_page',
    'label'       => esc_html__( 'Number of Courses', 'edubin' ),
    'section'     => 'edubin_ld_groups_section',
    'default'     => 9,
    'choices'     => [
        'min'  => 1,
        'step' => 1,
    ],
] );