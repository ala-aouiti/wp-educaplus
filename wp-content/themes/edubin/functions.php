<?php
/**
 *
 * Edubin functions and definitions
 * @package Edubin
 *
 */

define('EDUBIN_DIR', trailingslashit(get_template_directory()));
define('EDUBIN_URI', trailingslashit(get_template_directory_uri()));

define('EDUBIN_THEME_VERSION', '8.14.15');

/**
 * Edubin only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require EDUBIN_DIR . '/inc/back-compat.php';
    return;
}

/**
 * Load Theme Dependencies
 */
require_once get_theme_file_path('/inc/theme-dependencies.php');


/**
 * Sanitize the colorscheme.
 *
 * @param string $input Color scheme.
 */
function edubin_sanitize_colorscheme($input)
{
    $valid = array('light', 'dark', 'custom');

    if (in_array($input, $valid, true)) {
        return $input;
    }
    return 'light';
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Edubin 1.0
 * @see edubin_customize_register()
 *
 * @return void
 */
function edubin_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Edubin 1.0
 * @see edubin_customize_register()
 *
 * @return void
 */
function edubin_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function edubin_is_static_front_page()
{
    return (is_front_page() && !is_home());
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function edubin_is_view_with_layout_option()
{
    // This option is available on all pages. It's also available on archives when there isn't a sidebar.
    return (is_page() || (is_archive() && !is_active_sidebar('sidebar-1')));
}

if (!function_exists('edubin_sanitize_checkbox')):

    /**
     * Sanitize checkbox.
     *
     * @since 1.0.0
     *
     * @param bool $checked Whether the checkbox is checked.
     * @return bool Whether the checkbox is checked.
     */
    function edubin_sanitize_checkbox($checked)
{

        return ((isset($checked) && true === $checked) ? true : false);

    }

endif;

if (!function_exists('edubin_sanitize_select')):

    /**
     * Sanitize select.
     *
     * @since 1.0.0
     *
     * @param mixed                $input The value to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return mixed Sanitized value.
     */
    function edubin_sanitize_select($input, $setting)
{

        // Ensure input is clean.
        $input = sanitize_text_field($input);

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control($setting->id)->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return (array_key_exists($input, $choices) ? $input : $setting->default);

    }

endif;

// If custom color active
if (!function_exists('edubin_custom_color_active')):

    function edubin_custom_color_active($control)
{

        if (true == $control->manager->get_setting('show_custom_color')->value()) {
            return true;
        } else {
            return false;
        }

    }
endif;

if (!function_exists('edubin_header_style')):
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see edubin_custom_header_setup().
 */
    function edubin_header_style()
{

        $header_text_color = get_header_textcolor();?>
          <?php if (!empty($header_text_color && $header_text_color !== 'blank')): ?>
            <style type="text/css">
              .site-description{
               color: #<?php echo esc_attr($header_text_color); ?>;
             }
           </style>
         <?php endif;?>
<?php }

endif;

/**
 * Customize video play/pause button in the custom header.
 *
 * @param array $settings Video settings.
 * @return array The filtered video settings.
 */
function edubin_video_controls($settings)
{
    $settings['l10n']['play']  = '<span class="screen-reader-text">' . esc_html__('Play background video', 'edubin') . '</span>' . edubin_get_svg(array('icon' => 'play'));
    $settings['l10n']['pause'] = '<span class="screen-reader-text">' . esc_html__('Pause background video', 'edubin') . '</span>' . edubin_get_svg(array('icon' => 'pause'));
    return $settings;
}
add_filter('header_video_settings', 'edubin_video_controls');

/**
 * Load dynamic logic for the customizer controls area.
 */
function edubin_panels_js()
{
    wp_enqueue_script('edubin-customize-controls', EDUBIN_URI . '/assets/js/customize-controls.js', array(), 1.0, true);
}
add_action('customize_controls_enqueue_scripts', 'edubin_panels_js');



