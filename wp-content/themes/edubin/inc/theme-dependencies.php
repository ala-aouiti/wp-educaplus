<?php

defined("ABSPATH") || exit();

if (!class_exists("Edubin_Theme_Dependencies")) {
    /**
     * Require all the theme necessary files.
     */
    class Edubin_Theme_Dependencies
    {
        public function __construct()
        {
            self::include_theme_essential_files();
            self::include_plugins_configurations();
        }

        public static function include_theme_essential_files()
        {
            
            /** Theme Globals Functions */
            require_once get_theme_file_path(
                "/inc/theme-global-functions.php"
            );

            /** Theme helper functions */
            require_once EDUBIN_DIR . "/inc/theme-helper.php";

            /** Multiple LMS error warning  */
            require_once EDUBIN_DIR . "/inc/multiple-lms-error.php";

            /** Custom template tags for this theme. */
            require_once get_parent_theme_file_path(
                "/inc/template-tags.php"
            );

            /** Additional features to allow styling of the templates */
            require_once EDUBIN_DIR .
                "/inc/template-functions.php";

            /** Image Class */
            require_once get_parent_theme_file_path("/inc/class-image.php");

            /** SVG icons functions and filters */
            require_once get_parent_theme_file_path(
                "/inc/icon-functions.php"
            );

            /** Widgets */
            require_once get_parent_theme_file_path(
                "/inc/theme-widgets.php"
            );

            /** Breadcrumb */
            require_once get_parent_theme_file_path(
                "/template-parts/header/breadcrumb.php"
            );            

            /** Kirki & Customizer */
            require_once EDUBIN_DIR . 'inc/customizer/class-static.php';
            require_once EDUBIN_DIR . 'inc/customizer/class-customize.php';
            require_once EDUBIN_DIR . 'inc/customizer/class-kirki.php';

            if ( !class_exists( 'Kirki' ) ) {
               require_once EDUBIN_DIR . 'inc/customizer/kirki/kirki.php';
            }
            /** Custom theme Style */
            require_once EDUBIN_DIR . "/inc/custom-styles.php"; 

            // TGMPA init
            require_once EDUBIN_DIR . '/admin/tgm/tgm-init.php';

            // Admin init
            require_once EDUBIN_DIR . '/admin/admin-pages/admin.php';

           // Envato setup
            if ( !is_customize_preview() && is_admin() ) {
                require EDUBIN_DIR . '/admin/envato_setup/envato_setup.php';
            }
            /** One click demo import */
            require_once get_theme_file_path("admin/edubin-demo-import.php");

            /** Dynamic styles */
            require_once get_theme_file_path("/inc/dynamic-styles.php");

            /** Styles override */
           // require_once get_theme_file_path("/inc/styles-override.php");
        }

        public static function include_plugins_configurations()
        {
            /**
             * WooCommerce.
             */

            if (class_exists("WooCommerce")) {
                require_once get_parent_theme_file_path(
                    "/inc/wc-init.php"
                );
            }
            /**
             * LearnPress.
             */
            if (class_exists("LearnPress")) {
                require_once get_parent_theme_file_path(
                    "/inc/lp-init.php"
                );
            }
            /**
             * LearnDash.
             */
            if (class_exists("SFWD_LMS")) {
                require_once get_parent_theme_file_path(
                    "/inc/ld-init.php"
                );
            }
            /**
             * Tutor.
             */
            if (function_exists("tutor")) {
                require_once get_parent_theme_file_path("/inc/tutor-init.php");
            }
            /**
             * Sensei.
             */
            if (function_exists("Sensei")) {
                require_once get_parent_theme_file_path("/inc/sensei-init.php");
            }
            /**
             * The Events Calendar.
             */
            if (class_exists("Tribe__Events__Main")) {
                require_once get_parent_theme_file_path(
                    "/inc/events-calendar.php"
                );
            }
        }
    }

    new Edubin_Theme_Dependencies();
}
