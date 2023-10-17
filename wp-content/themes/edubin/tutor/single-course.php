<?php
/**
 * Template for displaying single course
 */

    $course_id       = get_the_ID();
    $course_rating   = tutor_utils()->get_course_rating( $course_id );
    $is_enrolled     = tutor_utils()->is_enrolled( $course_id, get_current_user_id() );

    // Prepare the nav items.
    $course_nav_item = apply_filters( 'tutor_course/single/nav_items', tutor_utils()->course_nav_items(), $course_id );
    $is_public       = \TUTOR\Course_List::is_public( $course_id );
    $is_mobile       = wp_is_mobile();

    $enrollment_box_position = tutor_utils()->get_option( 'enrollment_box_position_in_mobile', 'bottom' );
    if ( '-1' === $enrollment_box_position ) {
        $enrollment_box_position = 'bottom';
    }
    $student_must_login_to_view_course = tutor_utils()->get_option( 'student_must_login_to_view_course' );

    tutor_utils()->tutor_custom_header();

    if ( ! is_user_logged_in() && ! $is_public && $student_must_login_to_view_course ) {
        tutor_load_template( 'login' );
        tutor_utils()->tutor_custom_footer();
        return;
    }

    $post_id = edubin_get_id();

    $tutor_single_page_layout = Edubin::setting( 'tutor_single_page_layout' );

    if ( $tutor_single_page_layout == '4' ) :

        get_template_part( 'tutor/tpl-part/single/single-layout', '4');  

    elseif ( $tutor_single_page_layout == '3' ) :

        get_template_part( 'tutor/tpl-part/single/single-layout', '3');  

    elseif ( $tutor_single_page_layout == '2' ) :

        get_template_part( 'tutor/tpl-part/single/single-layout', '2');  

    elseif ( $tutor_single_page_layout == '1' ) :

        get_template_part( 'tutor/tpl-part/single/single-layout', '1');  

    endif; //End single page layout



tutor_utils()->tutor_custom_footer();
