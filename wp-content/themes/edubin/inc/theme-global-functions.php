<?php

defined('ABSPATH') || exit;

//Sets up theme defaults and registers support for various WordPress features.
function edubin_setup()
{

    //Make theme available for translation.
    load_theme_textdomain('edubin', EDUBIN_DIR . '/languages');
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    //Let WordPress manage the document title.
    add_theme_support('title-tag');

    //Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    add_image_size('edubin-featured-image', 1450, 480, true);
    add_image_size('edubin-blog-image', 1140, 710, true);
    add_image_size('edubin_blog_image_360x210', 360, 210, true);
    add_image_size('course_thumb', 470, 274, true);

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary'     => esc_html__('Primary Menu', 'edubin'),
        'footer_menu' => esc_html__('Footer Menu', 'edubin'),
    ));

    //Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Enable support for Post Formats.
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for Block Styles.
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Enqueue editor styles.
    add_editor_style('style-editor.css');

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, and column width.
     */
    //add_editor_style(array('assets/css/editor-style.css', edubin_get_font_url()));

    // Load regular editor styles into the new block-based editor.
    add_theme_support('editor-styles');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Add theme support for Custom Background.
    $args = array(
        'default-color' => '#ffffff',
        'default-image' => '',
    );

    add_theme_support('custom-background', $args);

    $args = array(
        'width'              => 1450,
        'flex-height'        => true,
        'flex-width'         => true,
        'height'             => 480,
        'default-text-color' => '',
        'default-image'      => EDUBIN_URI . '/assets/images/header.jpg',
        'wp-head-callback'   => 'edubin_header_style',
    );
    register_default_headers(array(
        'default-image' => array(
            'url'           => '%s/assets/images/header.jpg',
            'thumbnail_url' => '%s/assets/images/header.jpg',
            'description'   => esc_html__('Default Header Image', 'edubin'),
        ),
    ));
    add_theme_support('custom-header', $args);
}

add_action('after_setup_theme', 'edubin_setup');


/**
 * Change the excerpt length
 */
function edubin_excerpt_length($length)
{
    $excerpt = get_theme_mod('exc_lenght', '45');
    return $excerpt;
}
add_filter('excerpt_length', 'edubin_excerpt_length', 999);

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 */
function edubin_javascript_detection()
{
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action('wp_head', 'edubin_javascript_detection', 0);

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function edubin_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", get_bloginfo('pingback_url'));
    }
}
add_action('wp_head', 'edubin_pingback_header');

/**
 * Filter the `sizes` value in the header image markup.
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function edubin_header_image_tag($html, $header, $attr)
{
    if (isset($attr['sizes'])) {
        $html = str_replace($attr['sizes'], '100vw', $html);
    }
    return $html;
}
add_filter('get_header_image_tag', 'edubin_header_image_tag', 10, 3);

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function edubin_front_page_template($template)
{
    return is_home() ? '' : $template;
}
add_filter('frontpage_template', 'edubin_front_page_template');

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size and use list format for better accessibility.
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function edubin_widget_tag_cloud_args($args)
{
    $args['largest']  = 1;
    $args['smallest'] = 1;
    $args['unit']     = 'em';
    $args['format']   = 'list';

    return $args;
}
add_filter('widget_tag_cloud_args', 'edubin_widget_tag_cloud_args');


/**
 * Edubin get id
 */

if (!function_exists('edubin_array_get')) {
    function edubin_array_get($array, $key, $default = null)
    {
        if (!is_array($array)) {
            return $default;
        }

        return array_key_exists($key, $array) ? $array[$key] : $default;
    }
}

if (!function_exists('edubin_get_id')) {
    function edubin_get_id()
    {
        global $wp_query;
        return $wp_query->get_queried_object_id();
    }
}

/**
 * Custom function to get all image size
 */

function edubin_get_thumbnail_sizes() {

    global $_wp_additional_image_sizes;
    $sizes = array();
    $rSizes = array();
    foreach (get_intermediate_image_sizes() as $s) {
        $sizes[$s] = array(0, 0);
        if (in_array($s, array('thumbnail', 'medium', 'medium_large', 'large'))) {
            $sizes[$s][0] = get_option($s . '_size_w');
            $sizes[$s][1] = get_option($s . '_size_h');
        }else {
            if (isset($_wp_additional_image_sizes) && isset($_wp_additional_image_sizes[$s]))
                $sizes[$s] = array($_wp_additional_image_sizes[$s]['width'], $_wp_additional_image_sizes[$s]['height'],);
        }
    }
    foreach ($sizes as $size => $atts) {
        $rSizes[$size] = $size . ' ' . implode('x', $atts);
    }
        return $rSizes;
}