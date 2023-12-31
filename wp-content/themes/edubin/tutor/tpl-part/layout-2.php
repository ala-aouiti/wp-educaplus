<?php

    $tutor_course_archive_style = Edubin::setting( 'tutor_course_archive_style' );
    $tutor_instructor_img_on_off = Edubin::setting( 'tutor_instructor_img_on_off' );
    $tutor_instructor_name_on_off = Edubin::setting( 'tutor_instructor_name_on_off' );
    $tutor_archive_title_show = Edubin::setting( 'tutor_archive_title_show' );
    $tutor_excerpt_show = Edubin::setting( 'tutor_excerpt_show' );
    $tutor_cat_show = Edubin::setting( 'tutor_cat_show' );
    $tutor_archive_media_show = Edubin::setting( 'tutor_archive_media_show' );
    $tutor_lesson_show = Edubin::setting( 'tutor_lesson_show' );
    $tutor_duration_show = Edubin::setting( 'tutor_duration_show' );
    $tutor_price_show = Edubin::setting( 'tutor_price_show' );
    $tutor_enroll_show = Edubin::setting( 'tutor_enroll_show' );
    $tutor_review_show = Edubin::setting( 'tutor_review_show' );
    $tutor_review_text_show = Edubin::setting( 'tutor_review_text_show' );
    $tutor_quiz_show = Edubin::setting( 'tutor_quiz_show' );
    
    // Get option for tutor LMS plugin
    $tutor_course_archive_clm = tutor_utils()->get_option( 'courses_col_per_row', 3 );

?>

   <div class="edubin-course layout__<?php echo esc_attr($tutor_course_archive_style); ?> <?php if ( $tutor_review_show ) { echo esc_attr('review__show'); } ?> col__<?php echo esc_attr($tutor_course_archive_clm); ?>">
      <div class="course__container">
         <div class="course__media intro-video-sidebar tpc_mb_0">

              <?php 
                if ( $tutor_archive_media_show ) {
                    get_template_part( 'tutor/tpl-part/media'); 
                }
                if ( $tutor_cat_show ) {
                    get_template_part( 'tutor/tpl-part/category'); 
                }
                if ( $tutor_price_show ) { ?>
                    <div class="price__2">
                       <?php get_template_part( 'tutor/tpl-part/price'); ?>
                    </div>
               <?php } 
            ?>
         </div>
         <div class="course__content">
            <div class="course__content--info">

                <?php
                if ( $tutor_archive_title_show ) {
                    get_template_part( 'tutor/tpl-part/title'); 
                }
                if ( $tutor_excerpt_show ) {
                    get_template_part( 'tutor/tpl-part/excerpt_text'); 
                }
            ?>
                <?php        
                     if ( $tutor_review_show ): ?>
                        <div class="edubin-course-rate">
                            <?php   
                                if ( $tutor_review_show ) {
                                    get_template_part( 'tutor/tpl-part/review'); 
                                } 
                                if ( $tutor_review_text_show) {
                                    get_template_part( 'tutor/tpl-part/review_text'); 
                                } 
                            ?>
                        </div>
                <?php endif; ?><!--  End review -->
            </div>

            <div class="course__border"></div>

            <div class="course__content--meta">

                <?php if ( $tutor_instructor_img_on_off || $tutor_instructor_name_on_off): ?>
                    <div class="author__name <?php echo $tutor_course_archive_style == '1' ? ' tpc_mt_15' : ''; ?>">
                        <?php          
                            if ( $tutor_instructor_img_on_off ) {
                                get_template_part( 'tutor/tpl-part/author_avator'); 
                            } 
                            if ( $tutor_instructor_name_on_off ) {
                                get_template_part( 'tutor/tpl-part/author_name'); 
                            }  
                        ?>
                    </div>  
                <?php endif ?> 

                <div class="course__meta-right">
                <?php                 
                    if ( $tutor_enroll_show ) {
                        get_template_part( 'tutor/tpl-part/students'); 
                    }                 
                    if ( $tutor_lesson_show ) {
                        get_template_part( 'tutor/tpl-part/lessons'); 
                    }                 
                    if ( $tutor_quiz_show ) {
                        get_template_part( 'tutor/tpl-part/quiz'); 
                    } 
                ?>
                </div>
            </div>
         </div>
      </div>
   </div>

