<?php
/**
 * Template part for displaying posts
 * @package Edubin
 * Version: 1.0.0
 */

    // Customizer option
    $ld_course_archive_style = Edubin::setting( 'ld_course_archive_style' ); 
    $ld_course_archive_clm = Edubin::setting( 'ld_course_archive_clm' ); 
    $ld_custom_placeholder_image = Edubin::setting( 'ld_custom_placeholder_image' ); 
    $ld_price_show = Edubin::setting( 'ld_price_show' );
    $ld_lesson_show = Edubin::setting( 'ld_lesson_show' );
    $ld_lesson_text_show = Edubin::setting( 'ld_lesson_text_show' );
    $ld_topic_show = Edubin::setting( 'ld_topic_show' );
    $ld_topic_text_show = Edubin::setting( 'ld_topic_text_show' );
    $see_more_btn = Edubin::setting( 'see_more_btn' ); 
    $ld_see_more_btn_text = Edubin::setting( 'ld_see_more_btn_text' );
    $free_custom_text = Edubin::setting( 'free_custom_text' );
    $enrolled_custom_text = Edubin::setting( 'enrolled_custom_text' );
    $completed_custom_text = Edubin::setting( 'completed_custom_text' );
    $custom_closed_btn_url = Edubin::setting( 'custom_closed_btn_url' );

    global $post; 
    $prefix = '_edubin_';
    $post_id = $post->ID;
    $course_id = $post_id;
    $user_id   = get_current_user_id();
    $current_id = $post->ID;

    $custom_views_number = get_post_meta( $post->ID, 'custom_views_number', true );

    $enable_video = get_post_meta( $post->ID, '_learndash_course_grid_enable_video_preview', true );
    $embed_code   = get_post_meta( $post->ID, '_learndash_course_grid_video_embed_code', true );
    $button_text  = $ld_see_more_btn_text;

        // Retrive oembed HTML if URL provided
    if ( preg_match( '/^http/', $embed_code ) ) {
        $embed_code = wp_oembed_get( $embed_code, array( 'height' => 600, 'width' => 400 ) );
    }

    $button_text = isset( $button_text ) && ! empty( $button_text ) ? $button_text : esc_html__( 'See more', 'edubin' );

    $button_text = apply_filters( 'learndash_course_grid_custom_button_text', $button_text, $post_id );

    $options = get_option('sfwd_cpt_options');
    $currency = null;

    if ( ! is_null( $options ) ) {
        if ( isset($options['modules'] ) && isset( $options['modules']['sfwd-courses_options'] ) && isset( $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'] ) )
            $currency = $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'];
    }

    if( is_null( $currency ) )
        $currency = 'USD';

    $course_options = get_post_meta($post_id, "_groups", true);

    if ($free_custom_text) {
    $price = $course_options && isset($course_options['groups_group_price']) ? $course_options['groups_group_price'] : $free_custom_text;
    } else {
    $price = $course_options && isset($course_options['groups_group_price']) ? $course_options['groups_group_price'] : esc_html__( 'Free', 'edubin' );
    }
    


    $has_access   = sfwd_lms_has_access( $course_id, $user_id );
    $is_completed = learndash_course_completed( $user_id, $course_id );

    if( $price == '' )

        if ($free_custom_text) {
            $price .= $free_custom_text;
        } else {
            $price .= esc_html__( 'Free', 'edubin' );
        }
        

    if ( is_numeric( $price ) ) {
        if ( $currency == "USD" )
            $price = '$' . $price;
        else
            $price .= ' ' . $currency;
    }

    $class       = '';
    $ribbon_text = '';

    if ( $has_access && ! $is_completed ) {
        $class = 'ld_course_grid_price ribbon-enrolled';

        if ($enrolled_custom_text) {
            $ribbon_text = $enrolled_custom_text;
        } else {
            $ribbon_text = esc_html__( 'Enrolled', 'edubin' );
        }


    } elseif ( $has_access && $is_completed ) {
        $class = 'ld_course_grid_price';

        if ($completed_custom_text) {
            $ribbon_text = $completed_custom_text;
        } else {
            $ribbon_text = esc_html__( 'Completed', 'edubin' );
        }
        
    } else {
        $class = ! empty( $course_options['groups_group_price'] ) ? 'ld_course_grid_price price_' . $currency : 'ld_course_grid_price free';
        $ribbon_text = $price;
    }
?>
                 

<?php if ( $ld_price_show && $ribbon_text ) : ?>
    <div class="price">
        <span><?php echo wp_kses_post($price); ?></span>
    </div>
<?php endif; ?>