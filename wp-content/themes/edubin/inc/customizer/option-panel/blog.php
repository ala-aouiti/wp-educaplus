<?php

/*----------------------------
Blog page
----------------------------*/
 Kirki::add_section( 'edubin_blog_page_section', array(
    'title'    =>  esc_html__( 'Blog Page', 'edubin' ),
    'panel'          => 'header_blog_panel',
) );

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_sidebar',
    'label'       => esc_html__( 'Sidebar', 'edubin' ),
    'description' => esc_html__( 'Select your sidebar position', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => 'alignright',
    'choices'     => [
        'sidebarleft'   => esc_html__( 'Left', 'edubin' ),
        'sidebarnone'   => esc_html__( 'No Sidebar', 'edubin' ),
        'alignright'   => esc_html__( 'Right', 'edubin' ),
    ],
 ] );
    
// Sidebar Width
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'blog_sidebar_width',
    'label'       => esc_html__( 'Sidebar Width', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '3',
    'choices'     => [
        '3' => esc_html__('25%', 'edubin'),
        '4' => esc_html__('33%', 'edubin'),
    ],

] );

// Sidebar Side Gap
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'blog_sidebar_gap',
    'label'       => esc_html__( 'Sidebar Side Gap', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '40',
    'choices'     => [
        '0' => esc_html__('00px', 'edubin'),
        '5' => esc_html__('05px', 'edubin'),
        '10' => esc_html__('10px', 'edubin'),
        '15' => esc_html__('15px', 'edubin'),
        '20' => esc_html__('20px', 'edubin'),
        '25' => esc_html__('25px', 'edubin'),
        '30' => esc_html__('30px', 'edubin'),
        '35' => esc_html__('35px', 'edubin'),
        '40' => esc_html__('40px', 'edubin'),
        '45' => esc_html__('45px', 'edubin'),
        '50' => esc_html__('50px', 'edubin'),
    ],
] );

// divider before edubin_theme_config
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_blog_sidebar_sticky',
    'section'     => 'edubin_blog_page_section',
    'default'     => '<hr>',
] );

// Sidebar Sticky
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_sidebar_sticky',
    'label'       => esc_html__( 'Sidebar Sticky', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '1',
] );

// Author
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_author_show',
    'label'       => esc_html__( 'Author', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '1',
] );

// Date
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_date_show',
    'label'       => esc_html__( 'Date', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '1',
] );

// Category
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_category_show',
    'label'       => esc_html__( 'Category', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '0',
] );

// Comment
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_comment_show',
    'label'       => esc_html__( 'Comment', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '1',
] );

// Post View
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_view_show',
    'label'       => esc_html__( 'Post View', 'edubin' ),
    'section'     => 'edubin_blog_page_section',
    'default'     => '0',
] );

/*----------------------------
Single Page
----------------------------*/
 Kirki::add_section( 'edubin_blog_single_section', array(
    'title'    =>  esc_html__( 'Single Page', 'edubin' ),
    'panel'          => 'header_blog_panel',
) );

// Sidebar

Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_single_sidebar',
    'label'       => esc_html__( 'Sidebar', 'edubin' ),
    'description' => esc_html__( 'Select your sidebar position', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => 'alignright',
    'choices'     => [
        'sidebarleft'   => esc_html__( 'Left', 'edubin' ),
        'sidebarnone'   => esc_html__( 'No Sidebar', 'edubin' ),
        'alignright'   => esc_html__( 'Right', 'edubin' ),
    ],
 ] );
    
// Sidebar Width
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'blog_single_sidebar_width',
    'label'       => esc_html__( 'Sidebar Width', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '3',
    'choices'     => [
        '3' => esc_html__('25%', 'edubin'),
        '4' => esc_html__('33%', 'edubin'),
    ],

] );

// Sidebar Side Gap
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'select',
    'settings'    => 'blog_single_sidebar_gap',
    'label'       => esc_html__( 'Sidebar Side Gap', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '40',
    'choices'     => [
        '0' => esc_html__('00px', 'edubin'),
        '5' => esc_html__('05px', 'edubin'),
        '10' => esc_html__('10px', 'edubin'),
        '15' => esc_html__('15px', 'edubin'),
        '20' => esc_html__('20px', 'edubin'),
        '25' => esc_html__('25px', 'edubin'),
        '30' => esc_html__('30px', 'edubin'),
        '35' => esc_html__('35px', 'edubin'),
        '40' => esc_html__('40px', 'edubin'),
        '45' => esc_html__('45px', 'edubin'),
        '50' => esc_html__('50px', 'edubin'),
    ],
] );

// divider before edubin_theme_config
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_blog_single_sidebar_sticky',
    'section'     => 'edubin_blog_single_section',
    'default'     => '<hr>',
] );

// Sidebar Sticky
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_sidebar_sticky',
    'label'       => esc_html__( 'Sidebar Sticky', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '1',
] );

// Author
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_author_show',
    'label'       => esc_html__( 'Author', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '1',
] );

// Date
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_date_show',
    'label'       => esc_html__( 'Date', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '1',
] );

// Category
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_category_show',
    'label'       => esc_html__( 'Category', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '0',
] );

// Comment
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_comment_show',
    'label'       => esc_html__( 'Comment', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '1',
] );

// Post View
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_view_show',
    'label'       => esc_html__( 'Post View', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '0',
] );

// Tags
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_tags_show',
    'label'       => esc_html__( 'Tags', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '1',
] );

// Social Share
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_single_social_share',
    'label'       => esc_html__( 'Social Share', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '1',
] );

// Post Navigation
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_nav_show',
    'label'       => esc_html__( 'Post Navigation', 'edubin' ),
    'section'     => 'edubin_blog_single_section',
    'default'     => '1',
] );

/*----------------------------
Related Post
----------------------------*/
 Kirki::add_section( 'edubin_blog_related_section', array(
    'title'    =>  esc_html__( 'Related Post', 'edubin' ),
    'panel'          => 'header_blog_panel',
) );

 // Related Post
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'blog_related_show',
    'label'       => esc_html__( 'Related Post', 'edubin' ),
    'section'     => 'edubin_blog_related_section',
    'default'     => '1',
] );

// Related Posts
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'text',
    'label'       => esc_html__('Related Posts', 'edubin'),
    'settings'    => 'blog_related_title',
    'section'     => 'edubin_blog_related_section',
    'default'     => esc_html('Related Posts'),
    'active_callback'   =>  [
        [
            'setting'   =>  'blog_related_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// divider before related_post_columns
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_related_total_posts',
    'section'     => 'edubin_blog_related_section',
    'default'     => '<hr>',
] );

// posts show count
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'number',
    'settings'    => 'related_total_posts',
    'label'       => esc_html__( 'Number of Related Post', 'edubin' ),
    'section'     => 'edubin_blog_related_section',
    'default'     => 3,
    'choices'     => [
        'min'  => 0,
        'min'  => 10,
        'step' => 1,
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'blog_related_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// divider before related_post_columns
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_related_post_columns',
    'section'     => 'edubin_blog_related_section',
    'default'     => '<hr>',
] );

// Related Posts Columns
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'related_post_columns',
    'label'       => esc_html__( 'Related Posts Columns', 'edubin' ),
    'section'     => 'edubin_blog_related_section',
    'default'     => '4',
    'choices'     => [
        '12' => esc_html__('1', 'edubin'),
        '6' => esc_html__('2', 'edubin'),
        '4' => esc_html__('3', 'edubin'),
        '3' => esc_html__('4', 'edubin'),
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'blog_related_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// divider before related_posts_by
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'custom',
    'settings'    => 'divider_before_related_posts_by',
    'section'     => 'edubin_blog_related_section',
    'default'     => '<hr>',
] );

// Related Posts By
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'radio-buttonset',
    'settings'    => 'related_posts_by',
    'label'       => esc_html__( 'Related Posts By', 'edubin' ),
    'section'     => 'edubin_blog_related_section',
    'default'     => 'tags',
    'choices'     => [
        'category' => esc_html__('Category', 'edubin'),
        'tags' => esc_html__('Tags', 'edubin'),
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'blog_related_show',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );
