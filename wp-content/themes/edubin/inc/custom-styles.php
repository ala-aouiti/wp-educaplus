<?php

if (!function_exists('edubin_customizer_theme_style')){
    function edubin_customizer_theme_style() {

    require_once EDUBIN_DIR . "/inc/custom-styles/global.php";

    if (class_exists('LearnPress')) {
        require_once EDUBIN_DIR . "/inc/custom-styles/learnpress.php";
    } 
    if (class_exists('SFWD_LMS')) {
        require_once EDUBIN_DIR . "/inc/custom-styles/learndash.php";
    }
    if (function_exists('tutor')) {
        require_once EDUBIN_DIR . "/inc/custom-styles/tutor.php";
    }
    if (class_exists('Sensei_Main')){
        require_once EDUBIN_DIR . "/inc/custom-styles/sensei.php";
    }
    if (class_exists('WooCommerce')) {
        require_once EDUBIN_DIR . "/inc/custom-styles/wc.php";
    }
    if (class_exists('WPForms')) {
        require_once EDUBIN_DIR . "/inc/custom-styles/wpforms.php";
    }
    if (class_exists('Tribe__Events__Main')) {
        require_once EDUBIN_DIR . "/inc/custom-styles/events.php";
    }
    if (class_exists('Video_Conferencing_With_Zoom')){
        require_once EDUBIN_DIR . "/inc/custom-styles/zoom.php";
    }
    if (class_exists('BuddyPress')){
        require_once EDUBIN_DIR . "/inc/custom-styles/bbpress.php";
    }

} // End edubin_customizer_theme_style()

add_action('wp_head', 'edubin_customizer_theme_style');

}