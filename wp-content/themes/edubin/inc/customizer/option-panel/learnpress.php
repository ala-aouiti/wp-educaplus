<?php
/*----------------------------
LearnPress Archive Page
----------------------------*/
 Kirki::add_section( 'edubin_lp_archive_page_section', array(
    'title'    =>  esc_html__( 'Course Archive Page', 'edubin' ),
    'panel' =>  'edubin_lp_panel'
) );

// Custom Page archive title
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'text',
    'settings'    => 'lp_archive_page_title',
    'label'       => esc_html__( 'Custom Archive Page Title', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => esc_html__('Courses', 'edubin'),
    'transport'   => 'auto',
] );

// Section divider before No tribe_events_archive_page_title
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_archive_style',
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '<hr>',
] );

// Enable pagination
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'lp_course_archive_style',
    'label'       => esc_html__( 'Course Style', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
    'multiple'    => false,
    'choices'     => [
        '1' => esc_html__('Style 01', 'edubin'),
        '2' => esc_html__('Style 02', 'edubin'),
        '3' => esc_html__('Style 03', 'edubin'),
        '4' => esc_html__('Style 04', 'edubin'),
        '5' => esc_html__('Style 05', 'edubin'),
        '6' => esc_html__('Style 06', 'edubin'),
    ],
] );

// event show count
// Kirki::add_field( 'edubin_theme_config', [
//     'type'        => 'number',
//     'settings'    => 'archive_course_limit',
//     'label'       => esc_html__( 'Course Count', 'edubin' ),
//     'section'     => 'edubin_lp_archive_page_section',
//     'default'     => 8,
//     'choices'     => [
//         'min'  => 1,
//         'step' => 1,
//     ],
// ] );

// Enable pagination
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'lp_course_archive_clm',
    'label'       => esc_html__( 'Courses Columns', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '4',
    'choices'     => [
        '6' => esc_html__('2', 'edubin'),
        '4' => esc_html__('3', 'edubin'),
        '3' => esc_html__('4', 'edubin'),
    ],
] );

// Section divider before event_intor_video_image
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_intor_video_image',
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '<hr>',
] );
// Media?
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_archive_media_show',
    'label'       => esc_html__( 'Media?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

// Section divider before event_custom_placeholder_image
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_custom_placeholder_image',
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '<hr>',
] );

// Custom Placeholder Image
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'image',
    'settings'    => 'lp_custom_placeholder_image',
    'label'       => esc_html__( 'Custom Placeholder Image', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '',
] );

// Section divider before lp_archive_image_height
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_archive_image_height',
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '<hr>',
] );

// Fixed Image Height
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'slider',
    'settings'    => 'lp_archive_image_height',
    'label'       => esc_html__( 'Fixed Image Height', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
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

// Section divider before lp_archive_image_size
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_archive_image_size',
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'lp_archive_image_size',
    'label'       => esc_html__( 'Select Image Size', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => 'medium_large',
    'multiple'    => false,
    'placeholder' => esc_html__( 'Select a image size', 'edubin' ),
    'choices'     => edubin_get_thumbnail_sizes(),
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_header_top',
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_archive_title_show',
    'label'       => esc_html__( 'Course Title?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => true,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_intor_video_image',
    'label'       => esc_html__( 'Intro Video?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_excerpt_show',
    'label'       => esc_html__( 'Excerpt?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_price_show',
    'label'       => esc_html__( 'Price?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_lesson_show',
    'label'       => esc_html__( 'Lesson?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_quiz_show',
    'label'       => esc_html__( 'Quiz?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_enroll_show',
    'label'       => esc_html__( 'Enrolled Students?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_cat_show',
    'label'       => esc_html__( 'Categories?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_review_show',
    'label'       => esc_html__( 'Review?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_review_text_show',
    'label'       => esc_html__( 'Review Text?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_level_show',
    'label'       => esc_html__( 'Level?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => false,
] );

// Kirki::add_field( 'edubin_theme_config', [
//     'type'        => 'toggle',
//     'settings'    => 'lp_wishlist_show',
//     'label'       => esc_html__( 'Wishlist?', 'edubin' ),
//     'section'     => 'edubin_lp_archive_page_section',
//     'default'     => false,
// ] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_instructor_img_on_off',
    'label'       => esc_html__( 'Instructor Avatar?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_instructor_name_on_off',
    'label'       => esc_html__( 'Instructor Name?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_title_height',
    'label'       => esc_html__( 'Fixed Title Height?', 'edubin' ),
    'section'     => 'edubin_lp_archive_page_section',
    'default'     => false,
] );

/*----------------------------
LearnPress Single Page
----------------------------*/
 Kirki::add_section( 'edubin_lp_single_page_section', array(
    'title'    =>  esc_html__( 'Course Single Page', 'edubin' ),
    'panel' =>  'edubin_lp_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'lp_single_page_layout',
    'label'       => esc_html__( 'Page Style', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
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
    'settings'    => 'divider_lp_intro_video_position',
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'lp_intro_video_position',
    'label'       => esc_html__( 'Preview Media', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => 'intro_video_sidebar',
    'multiple'    => false,
    'choices'     => [
        'none' => esc_html__('None', 'edubin'),
        'intro_video_content' => esc_html__('Content Section', 'edubin'),
        'intro_video_sidebar' => esc_html__('Sidebar Section', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_single_header_meta',
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_header_meta',
    'label'       => esc_html__( 'Header Meta?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_breadcrumb',
    'label'       => esc_html__( 'Breadcrumb?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_sidebar_sticky',
    'label'       => esc_html__( 'Sidebar Sticky?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_course_graduation',
    'label'       => esc_html__( 'Course Graduation?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_course_time',
    'label'       => esc_html__( 'Course Time?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_progress',
    'label'       => esc_html__( 'Progress?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_course_info',
    'label'       => esc_html__( 'Course Info?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_course_cat',
    'label'       => esc_html__( 'Category?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_social_shear',
    'label'       => esc_html__( 'Social Shear?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_instructor_single',
    'label'       => esc_html__( 'Instructor?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_cat',
    'label'       => esc_html__( 'Category List?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_review',
    'label'       => esc_html__( 'Reviews?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => true,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_last_update',
    'label'       => esc_html__( 'Last Updated?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_excerpt',
    'label'       => esc_html__( 'Excerpt?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_course_price',
    'label'       => esc_html__( 'Price?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_single_enroll_btn',
    'label'       => esc_html__( 'Enroll Button?', 'edubin' ),
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Price - Custom Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_price_text',
    'section' =>  'edubin_lp_single_page_section',
    'default'   => '',
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Buy Now - Custom Button Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_buy_now_btn',
    'section' =>  'edubin_lp_single_page_section',
    'default'   => '',
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Enroll - Custom Button Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_enroll_btn',
    'section' =>  'edubin_lp_single_page_section',
    'default'   => '',
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_enroll_btn',
    'section'     => 'edubin_lp_single_page_section',
    'default'     => '<hr>',
] );

/*----------------------------
LearnPress Course Features
----------------------------*/
 Kirki::add_section( 'edubin_lp_single_features_section', array(
    'title'    =>  esc_html__( 'Course Features', 'edubin' ),
    'panel' =>  'edubin_lp_panel'
) );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Course Features Title', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_single_info_heading',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'lp_custom_features_position',
    'label'       => esc_html__( 'Custom Features List Position', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => 'bottom',
    'choices'     => [
        'top'    => esc_html__('Top', 'edubin'),
        'bottom' => esc_html__('Buttom', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_enroll_show',
    'label'       => esc_html__( 'Enrolled?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Enrolled Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_enroll',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_enroll_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_duration_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_duration_show',
    'label'       => esc_html__( 'Duration?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Duration Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_duration',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_duration_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_lessons_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_lessons_show',
    'label'       => esc_html__( 'Lessons?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Lessons Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_lessons',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_lessons_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_max_students_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_max_students_show',
    'label'       => esc_html__( 'Max Students?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Max Students Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_max_tudents',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_max_students_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_quizzes_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_quizzes_show',
    'label'       => esc_html__( 'Quizzes?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Quizzes Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_quizzes',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_quizzes_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_retake_count_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_retake_count_show',
    'label'       => esc_html__( 'Re-take?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Re-take Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_retake_count',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_retake_count_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_assessments_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_assessments_show',
    'label'       => esc_html__( 'Assessments?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => false,
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Assessments Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_assessments',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_assessments_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_skill_level_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_skill_level_show',
    'label'       => esc_html__( 'Skill Level?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Skill Level Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_skill_level',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_skill_level_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_cat_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_cat_show',
    'label'       => esc_html__( 'Category?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Category Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_cat',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_cat_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_course_feature_language_show',
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_course_feature_language_show',
    'label'       => esc_html__( 'Language?', 'edubin' ),
    'section'     => 'edubin_lp_single_features_section',
    'default'     => '1',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Language Text', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_course_feature_language',
    'section' =>  'edubin_lp_single_features_section',
    'default'   => '',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_cat_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

/*----------------------------
LearnPress Related Courses
----------------------------*/
 Kirki::add_section( 'edubin_lp_related_course_section', array(
    'title'    =>  esc_html__( 'Related Courses', 'edubin' ),
    'panel' =>  'edubin_lp_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'lp_related_course_position',
    'label'       => esc_html__( 'Custom Features List Position', 'edubin' ),
    'section'     => 'edubin_lp_related_course_section',
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
    'settings'    => 'divider_lp_related_course_style',
    'section'     => 'edubin_lp_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'lp_related_course_style',
    'label'       => esc_html__( 'Related Course Style', 'edubin' ),
    'section'     => 'edubin_lp_related_course_section',
    'default'     => 'square',
    'choices'     => [
        'round' => esc_html__('Round', 'edubin'),
        'square' => esc_html__('Square', 'edubin'),
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_related_course_title',
    'section'     => 'edubin_lp_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', array(
    'label' =>  esc_html__( 'Custom Heading', 'edubin' ),
    'type' =>  'text',
    'settings' =>  'lp_related_course_title',
    'section' =>  'edubin_lp_related_course_section',
    'default'   => 'Related Courses',
    'transport' =>  'postMessage',
    'active_callback'   =>  [
        [
            'setting'   =>  'lp_course_feature_cat_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_related_course_items',
    'section'     => 'edubin_lp_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'number',
    'settings'    => 'lp_related_course_items',
    'label'       => esc_html__( 'Number of Courses', 'edubin' ),
    'section'     => 'edubin_lp_related_course_section',
    'default'     => 3,
    'choices'     => [
        'min'  => 1,
        'step' => 1,
    ],
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_lp_related_course_by',
    'section'     => 'edubin_lp_related_course_section',
    'default'     => '<hr>',
] );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'lp_related_course_by',
    'label'       => esc_html__( 'Related Course By', 'edubin' ),
    'section'     => 'edubin_lp_related_course_section',
    'default'     => 'tags',
    'choices'     => [
        'category' => esc_html__('Category', 'edubin'),
        'tags' => esc_html__('Tags', 'edubin'),
    ],
] );

/*----------------------------
LearnPress Utilities 
----------------------------*/
 Kirki::add_section( 'edubin_lp_utilities_section', array(
    'title'    =>  esc_html__( 'Utilities', 'edubin' ),
    'panel' =>  'edubin_lp_panel'
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'lp_use_plugin_color',
    'label'       => esc_html__( 'Override LearnPress Settings Color?', 'edubin' ),
    'section'     => 'edubin_lp_utilities_section',
    'default'     => '1',
] );

