<?php

defined('ABSPATH') || exit;

/**
 * Enqueue scripts and styles.
 */
function edubin_scripts()
{

    global $wp_styles;

    $rtl_enable             = Edubin::setting( 'rtl_enable' );
    $header_variations      = Edubin::setting( 'header_variations' );
    $tutor_settings_color   = Edubin::setting( 'tutor_settings_color' );
    $load_bootstrap_css     = Edubin::setting( 'load_bootstrap_css' );
    $load_bootstrap_rtl_css = Edubin::setting( 'load_bootstrap_rtl_css' );
    $load_fontawesome_css   = Edubin::setting( 'load_fontawesome_css' );
    $load_owl_carousel_css  = Edubin::setting( 'load_owl_carousel_css' );
    $load_aos_css  = Edubin::setting( 'load_aos_css' );
    $load_animate_css       = Edubin::setting( 'load_animate_css' );

    $load_bootstrap_js      = Edubin::setting( 'load_bootstrap_js' );
    $load_owl_carousel_js   = Edubin::setting( 'load_owl_carousel_js' );
    $load_aos_js   = Edubin::setting( 'load_aos_js' );
    $preloader_show   = Edubin::setting( 'preloader_show' );
    $lp_use_plugin_color   = Edubin::setting( 'lp_use_plugin_color' );

    // Theme stylesheet.
    wp_enqueue_style('edubin-style', get_stylesheet_uri());
    // Theme block stylesheet.
    wp_enqueue_style('edubin-block-style', EDUBIN_URI . '/assets/css/blocks.css', array('edubin-style'), EDUBIN_THEME_VERSION);
    if (is_rtl() && $rtl_enable == true && $load_bootstrap_rtl_css) {
        wp_enqueue_style('bootstrap-rtl', EDUBIN_URI . '/assets/css/bootstrap-rtl.min.css');
    }
    if ( $load_bootstrap_css) {
        wp_enqueue_style('bootstrap', EDUBIN_URI . '/assets/css/bootstrap.min.css', array(), '5.2.1');
    }
    if ( $load_fontawesome_css) {
        wp_enqueue_style('fontawesome', EDUBIN_URI . '/assets/css/fontawesome.min.css', '5.9.0');
    }
    wp_enqueue_style('edubin-flaticon', EDUBIN_URI . '/assets/fonts/flaticon.css', EDUBIN_THEME_VERSION);

    if ( $load_owl_carousel_css) {
        wp_enqueue_style('owl-carousel', EDUBIN_URI . '/assets/css/owl.carousel.min.css', '2.3.4');
    }

    if ( $load_aos_css) {
        wp_enqueue_style('AOS_animate', EDUBIN_URI . '/assets/css/aos.css', array(), EDUBIN_THEME_VERSION);
    }
    
    if ( $load_animate_css) {
        wp_enqueue_style('animate', EDUBIN_URI . '/assets/css/animate.css', '3.7.0');
    }
    
    if (class_exists('SFWD_LMS') || class_exists('LearnPress') || class_exists('Sensei_Main') || function_exists('tutor') ):
    wp_enqueue_style('edubin-global-course', EDUBIN_URI . '/assets/css/global-course.css', array(), EDUBIN_THEME_VERSION);
    endif;

    if (class_exists('LearnPress')):
        $get_lp_plugin_dir        = WP_PLUGIN_DIR . '/learnpress/learnpress.php';
        $lp_plugin_version_number = get_plugin_data($get_lp_plugin_dir);

        if ( $lp_plugin_version_number['Version'] < '4.0.0'):
            wp_enqueue_style('edubin-learnpress', EDUBIN_URI . '/assets/css/learnpress.css', array(), EDUBIN_THEME_VERSION);
        endif;

        if ( $lp_plugin_version_number['Version'] > '4.0.0'):
            wp_enqueue_style('edubin-learnpress-v4', EDUBIN_URI . '/assets/css/learnpress-v4.css', array(), EDUBIN_THEME_VERSION);

            if ( $lp_use_plugin_color ):
                wp_enqueue_style('edubin-learnpress-color', EDUBIN_URI . '/assets/css/learnpress-color.css', array(), EDUBIN_THEME_VERSION);
            endif;

        endif;

    endif;
    if (class_exists('SFWD_LMS')):
        wp_enqueue_style('edubin-learndash', EDUBIN_URI . '/assets/css/learndash.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (function_exists('tutor')):
        wp_enqueue_style('edubin-tutor', EDUBIN_URI . '/assets/css/tutor.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (function_exists('tutor') && !$tutor_settings_color):
        wp_enqueue_style('edubin-tutor-color', EDUBIN_URI . '/assets/css/tutor-color.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('Sensei_Main')):
        wp_enqueue_style('edubin-sensei', EDUBIN_URI . '/assets/css/sensei.css', array(), EDUBIN_THEME_VERSION);
    endif;

    if (class_exists('Tribe__Events__Main')):
        wp_enqueue_style('edubin-events', EDUBIN_URI . '/assets/css/events.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('Tribe__Events__Filterbar__PUE')):
        wp_enqueue_style('edubin-events-filterbar', EDUBIN_URI . '/assets/css/filterbar.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('WPForms')):
        wp_enqueue_style('edubin-wpforms', EDUBIN_URI . '/assets/css/wpforms.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists( 'WPCF7_ContactForm' )):
        wp_enqueue_style('edubin-wpcf7', EDUBIN_URI . '/assets/css/wpcf7.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('UM')):
        wp_enqueue_style('edubin-ultimate-member', EDUBIN_URI . '/assets/css/ulm.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('Mega_Menu') && $header_variations == 'header_v3'):
        wp_enqueue_style('edubin-max-mega-menu', EDUBIN_URI . '/assets/css/max-menu.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('Video_Conferencing_With_Zoom')):
        wp_enqueue_style('edubin-zoom-conferencing', EDUBIN_URI . '/assets/css/zoom.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('WooCommerce')):
        wp_enqueue_style('edubin-woocommerce', EDUBIN_URI . '/assets/css/wc.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('BuddyPress')):
        wp_enqueue_style('edubin-buddypress', EDUBIN_URI . '/assets/css/buddypress.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists('bbPress')):
        wp_enqueue_style('edubin-bbpress', EDUBIN_URI . '/assets/css/bbpress.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists( 'PMPro_Membership_Level' )) :
        wp_enqueue_style('edubin-paid-membership', EDUBIN_URI . '/assets/css/pmp.css', array(), EDUBIN_THEME_VERSION);
    endif;
    if (class_exists( 'Edubin_Shortcode_Social' )) :
        wp_enqueue_style('edubin-core', EDUBIN_URI . '/assets/css/edubin-core.css', array(), EDUBIN_THEME_VERSION);
    endif;
    
    if ( $preloader_show ) :
        wp_enqueue_style('edubin-preloader', EDUBIN_URI . '/assets/css/preloader.css', array(), EDUBIN_THEME_VERSION);
    endif;
       
    if ( is_404() || is_search() ) :
        wp_enqueue_style('edubin-page-404', EDUBIN_URI . '/assets/css/page-404.css', array(), EDUBIN_THEME_VERSION);
    endif;
    
    wp_enqueue_style('edubin-global-theme', EDUBIN_URI . '/assets/css/global-theme.css', array(), EDUBIN_THEME_VERSION);

    wp_enqueue_style('edubin-theme', EDUBIN_URI . '/assets/css/style.css', array(), EDUBIN_THEME_VERSION);

    wp_enqueue_script('edubin-skip-link-focus-fix', EDUBIN_URI . '/assets/js/skip-link-focus-fix.js', array(), EDUBIN_THEME_VERSION, true);

    if ( $rtl_enable == true) {
        wp_enqueue_style('edubin-theme-rtl', EDUBIN_URI . '/rtl.css', array(), EDUBIN_THEME_VERSION);
    }

    // $font_url = edubin_get_font_url();
    // if (!empty($font_url)) {
    //     wp_enqueue_style('edubin-fonts', esc_url_raw($font_url), array(), null);
    // }

    $edubin_l10n = array(
        'quote' => edubin_get_svg(array('icon' => 'quote-right')),
    );

    if (has_nav_menu('top')) {
        wp_enqueue_script('edubin-navigation', EDUBIN_URI . '/assets/js/navigation.js', array('jquery'), EDUBIN_THEME_VERSION, true);
        $edubin_l10n['expand']   = esc_html__('Expand child menu', 'edubin');
        $edubin_l10n['collapse'] = esc_html__('Collapse child menu', 'edubin');
        $edubin_l10n['icon']     = edubin_get_svg(array('icon' => 'angle-down', 'fallback' => true));
    }

    wp_enqueue_script('edubin-global', EDUBIN_URI . '/assets/js/global.js', array('jquery'), EDUBIN_THEME_VERSION, true);
    wp_enqueue_script('jquery-scrollto', EDUBIN_URI . '/assets/js/jquery.scrollTo.js', array('jquery'), '2.1.2', true);

    if ( $load_owl_carousel_js) {
        wp_enqueue_script('owl-carousel', EDUBIN_URI . '/assets/js/owl.js', array('jquery'), '2.3.4', true);
    }     
    if ( $load_aos_js) {
        wp_enqueue_script('AOS', EDUBIN_URI . '/assets/js/aos.js', array(), EDUBIN_THEME_VERSION, true);
    }
    wp_enqueue_script('youtube-popup', EDUBIN_URI . '/assets/js/youtube-popup.js', array('jquery'), EDUBIN_THEME_VERSION, true);
    if ( $load_bootstrap_js) {
        wp_enqueue_script('bootstrap', EDUBIN_URI . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
    }
    wp_enqueue_script('edubin-theme-script', EDUBIN_URI . '/assets/js/edubin-theme.js', array('jquery'), EDUBIN_THEME_VERSION, true);

    wp_localize_script('edubin-skip-link-focus-fix', 'edubinScreenReaderText', $edubin_l10n);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'edubin_scripts');

/**
 * Register/Enqueue JS/CSS In Admin Panel
 */
function edubin_register_admin_styles()
{
    wp_enqueue_style('edubin-admin-css', EDUBIN_URI . '/assets/css/admin.css', array(), EDUBIN_THEME_VERSION);
    wp_enqueue_style('edubin-customizer', EDUBIN_URI . '/admin/assets/css/customizer.css', array(), EDUBIN_THEME_VERSION);

    if (class_exists('RWMB_Loader')) {
        wp_enqueue_script('edubin-metaboxes', EDUBIN_URI . '/admin/assets/js/metaboxes.js', array('jquery'), '1.0.0');
    }
}
add_action('admin_enqueue_scripts', 'edubin_register_admin_styles');

/**
 * Enqueues styles for the block-based editor.
 */
function edubin_block_editor_styles()
{
    // Block styles.
    wp_enqueue_style('edubin-block-editor-style', EDUBIN_URI . '/assets/css/editor-blocks.css', array(), EDUBIN_THEME_VERSION);
    // Add custom fonts.
   // wp_enqueue_style('edubin-fonts', edubin_get_font_url(), array(), null);
}
add_action('enqueue_block_editor_assets', 'edubin_block_editor_styles');


// ** Upload image **

function edubin_admin_scripts($hook)
{

    wp_enqueue_media();

    wp_enqueue_script('upload-image', EDUBIN_URI . '/assets/js/image-upload.js', array('jquery'), '1.0.0');

}

add_action('admin_enqueue_scripts', 'edubin_admin_scripts');
