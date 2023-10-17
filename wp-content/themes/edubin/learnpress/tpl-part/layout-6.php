<?php

    $lp_course_archive_style = Edubin::setting( 'lp_course_archive_style' );
    $lp_instructor_img_on_off = Edubin::setting( 'lp_instructor_img_on_off' );
    $lp_instructor_name_on_off = Edubin::setting( 'lp_instructor_name_on_off' );
    $lp_archive_title_show = Edubin::setting( 'lp_archive_title_show' );
    $lp_excerpt_show = Edubin::setting( 'lp_excerpt_show' );
    $lp_cat_show = Edubin::setting( 'lp_cat_show' );
    $lp_archive_media_show = Edubin::setting( 'lp_archive_media_show' );
    $lp_lesson_show = Edubin::setting( 'lp_lesson_show' );
    $lp_price_show = Edubin::setting( 'lp_price_show' );
    $lp_enroll_show = Edubin::setting( 'lp_enroll_show' );
    $lp_review_show = Edubin::setting( 'lp_review_show' );
    $lp_review_text_show = Edubin::setting( 'lp_review_text_show' );
    $lp_level_show = Edubin::setting( 'lp_level_show' );
    // $lp_wishlist_show = Edubin::setting( 'lp_wishlist_show' );
    $lp_quiz_show = Edubin::setting( 'lp_quiz_show' );
    $lp_course_archive_clm = Edubin::setting( 'lp_course_archive_clm' );
    $lp_course_archive_clm_modify = Edubin::setting( 'lp_course_archive_clm' );

    if ($lp_course_archive_clm_modify == '12') : 
        $lp_course_archive_clm_final = '1';
    elseif ($lp_course_archive_clm_modify == '6') : 
        $lp_course_archive_clm_final = '2';
    elseif ($lp_course_archive_clm_modify == '4') : 
        $lp_course_archive_clm_final = '3';
    elseif ($lp_course_archive_clm_modify == '3') :
        $lp_course_archive_clm_final = '4';
    elseif ($lp_course_archive_clm_modify == '2') :
        $lp_course_archive_clm_final = '6';
    endif; 

?>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-<?php echo esc_attr($lp_course_archive_clm); ?>">

<div class="edubin-course layout__<?php echo esc_attr($lp_course_archive_style); ?> col__<?php echo esc_attr($lp_course_archive_clm_final); ?>">
      <div class="course__container">
         <div class="course__media">
            <?php 
                if ( $lp_archive_media_show ) {
                    get_template_part( 'learnpress/tpl-part/media'); 
                }
              if ( $lp_level_show ) {
                   get_template_part( 'learnpress/tpl-part/level'); 
              }
               // if ( $lp_wishlist_show ) {
               //    get_template_part( 'learnpress/tpl-part/wishlist'); 
               // }
            ?>
         </div>
         <div class="course__content">

            <div class="course__content--info">
                
                <?php
                    if ( $lp_archive_title_show ) {
                        get_template_part( 'learnpress/tpl-part/title'); 
                    }
                    if ( $lp_excerpt_show ) {
                        get_template_part( 'learnpress/tpl-part/excerpt_text'); 
                    }
                    ?>

            </div>
            
            <div class="course__border"></div>

            <div class="course__content--meta">

                <?php if (  class_exists('LP_Addon_Course_Review_Preload') && $lp_review_show  ): ?>
                <div class="course__meta-left">

                        <div class="edubin-course-rate tpc_pt_0">
                            <?php   
                                if ( class_exists('LP_Addon_Course_Review_Preload') && $lp_review_show  ) {
                                    get_template_part( 'learnpress/tpl-part/review'); 
                                } 
                                // if ( $lp_show_review_text) {
                                //     get_template_part( 'learnpress/tpl-part/review_text'); 
                                // } 
                            ?>
                        </div>

                </div>
                <?php endif; ?><!--  End review -->

                <?php if (  $lp_enroll_show ||  $lp_lesson_show || $lp_quiz_show): ?>
                    <div class="course__meta-center">
                        <?php                 
                            if ( $lp_enroll_show ) {
                                get_template_part( 'learnpress/tpl-part/students'); 
                            }                 
                            if ( $lp_lesson_show ) {
                                get_template_part( 'learnpress/tpl-part/lessons'); 
                            }                                        
                            if ( $lp_quiz_show ) {
                                get_template_part( 'learnpress/tpl-part/quiz'); 
                            } 
                        ?>
                    </div>
                <?php endif; ?>

                <?php if (  $lp_price_show ): ?>
                <div class="course__meta-right">
                  <?php 
                        if ( $lp_price_show ) { ?>
                            <div class="price__1">
                               <?php get_template_part( 'learnpress/tpl-part/price'); ?>
                            </div>
                       <?php } 
                    ?>
                </div> 
                <?php endif; ?>

            </div><!-- End course__content--meta -->

         </div>
      </div>
   </div>
</div>
