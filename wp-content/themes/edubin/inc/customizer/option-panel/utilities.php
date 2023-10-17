<?php

/*----------------------------
Utilities
----------------------------*/
 Kirki::add_section( 'edubin_utilities_section', array(
    'title'    =>  esc_html__( 'Utilities', 'edubin' ),
    'panel' =>  'edubin_general_panel'
) );

// Menu Right Align
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'pages_featured_image',
    'label'       => esc_html__( 'Pages Featured Image?', 'edubin' ),
    'section'     => 'edubin_utilities_section',
    'default'     => '1',
] );

// Multiple LMS Activate Notice?
Kirki::add_field( 'edubin_theme_config', [
    'type'        => 'toggle',
    'settings'    => 'multiple_lms_error_massage',
    'label'       => esc_html__( 'Multiple LMS Activate Notice?', 'edubin' ),
    'section'     => 'edubin_utilities_section',
    'default'     => '1',
] );

