<?php
/**
 * Template for displaying single course page layout 3
 *
 */

// Prepare the nav items
$course_nav_item = apply_filters( 'tutor_course/single/nav_items', tutor_utils()->course_nav_items(), get_the_ID() );

tutor_utils()->tutor_custom_header();
do_action('tutor_course/single/before/wrap');

$tutor_single_page_layout = Edubin::setting( 'tutor_single_page_layout' );
$tutor_related_course_position = Edubin::setting( 'tutor_related_course_position' );

$tutor_single_sidebar_sticky = Edubin::setting( 'tutor_single_sidebar_sticky' );
$sidebar_sticky_on_off = ( $tutor_single_sidebar_sticky ? 'do_sticky' : '');

?>

<?php get_template_part( 'tutor/tpl-part/single/single', 'header');  ?>

<div <?php tutor_post_class('tutor-full-width-course-top tutor-course-top-info tutor-page-wrap'); ?>>
    <div class="tutor-course-details-page tutor-container single_layout__<?php echo esc_attr( $tutor_single_page_layout ); ?>">
        <?php //(isset($is_enrolled) && $is_enrolled) ? tutor_course_enrolled_lead_info() : tutor_course_lead_info(); ?>
        <div class="tutor-course-details-page-main-desible">
            <div class="tutor-course-details-page-main-left">
              
                <?php do_action('tutor_course/single/before/inner-wrap'); ?>
                <div class="tutor-course-details-tab tutor-mt-32">
                    <div class="tutor-is-sticky">
                        <?php tutor_load_template( 'single.course.enrolled.nav', array('course_nav_item' => $course_nav_item ) ); ?>
                    </div>
                    <div class="tutor-tab tutor-pt-24">
                        <?php foreach( $course_nav_item as $key => $subpage ) : ?>
                            <div id="tutor-course-details-tab-<?php echo $key; ?>" class="tutor-tab-item<?php echo $key == 'info' ? ' is-active' : ''; ?>">
                                <?php
                                    do_action( 'tutor_course/single/tab/'.$key.'/before' );
                                    
                                    $method = $subpage['method'];
                                    if ( is_string($method) ) {
                                        $method();
                                    } else {
                                        $_object = $method[0];
                                        $_method = $method[1];
                                        $_object->$_method(get_the_ID());
                                    }

                                    do_action( 'tutor_course/single/tab/'.$key.'/after' );
                                ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php do_action('tutor_course/single/after/inner-wrap'); ?>

 <!--                        <div class="course-bottom-border"></div> -->

                        <div class="course-bottom-wrap tpc_mt_15 tpc_mp_30">
                        <?php
                       // if ($lp_single_enroll_btn) {
                            get_template_part( 'tutor/tpl-part/single/enrolled', 'btn');     
                      //  }
                        ?>

   
                        <?php if (10>11) { ?>
                            
                            <div class="entry-post-share">
                                <div class="post-share style-01">
                                    <div class="share-label">
                                        <?php esc_html_e( 'Share this course', 'edubin' ); ?>
                                    </div>
                                    <div class="share-media">
                                        <span class="share-icon fas fa-share-alt"></span>

                                        <div class="share-list">
                                            <?php edubin_get_sharing_list(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                         <?php } ?>

                        </div>


            </div>
            <!-- end of /.tutor-course-details-page-main-left -->


        </div>
        <!-- end of /.tutor-course-details-page-main -->

        <?php if ($tutor_related_course_position == 'content') { ?>

        <div class="related-post-wrap related_course">
            <?php edubin_tutor_related_course_content(); ?>
        </div>

        <?php } ?>
    </div>
</div>

<?php do_action('tutor_course/single/after/wrap'); ?>

<?php
tutor_utils()->tutor_custom_footer();
