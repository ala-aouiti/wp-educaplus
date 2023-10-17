<?php

    $ld_course_archive_style = Edubin::setting( 'ld_course_archive_style' );
    $ld_course_archive_clm = Edubin::setting( 'ld_course_archive_clm' );
    $ld_instructor_img_on_off = Edubin::setting( 'ld_instructor_img_on_off' );
    $ld_instructor_name_on_off = Edubin::setting( 'ld_instructor_name_on_off' );
    $ld_archive_title_show = Edubin::setting( 'ld_archive_title_show' );
    $ld_excerpt_show = Edubin::setting( 'ld_excerpt_show' );
    $ld_cat_show = Edubin::setting( 'ld_cat_show' );
    $ld_archive_media_show = Edubin::setting( 'ld_archive_media_show' );
    $ld_topic_show = Edubin::setting( 'ld_topic_show' );
    $ld_topic_text_show = Edubin::setting( 'ld_topic_text_show' );
    $ld_lesson_show = Edubin::setting( 'ld_lesson_show' );
    $ld_lesson_text_show = Edubin::setting( 'ld_lesson_text_show' );
    $ld_price_show = Edubin::setting( 'ld_price_show' );
    $ld_review_show = Edubin::setting( 'ld_review_show' );
    $ld_review_text_show = Edubin::setting( 'ld_review_text_show' );
    

?>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-<?php echo esc_attr($ld_course_archive_clm); ?>">
   
<div class="edubin-course layout__<?php echo esc_attr($ld_course_archive_style); ?> col__<?php echo esc_attr($ld_course_archive_clm); ?>">
      <div class="course__container">
         <div class="course__media">
            <?php 
                if ( $ld_archive_media_show ) {
                    get_template_part( 'learndash/tpl-part/media'); 
                }
               // if ( $ld_level_show ) {
               //     get_template_part( 'learndash/tpl-part/level'); 
               // }
               // if ( $ld_wishlist_show ) {
               //     get_template_part( 'learndash/tpl-part/wishlist'); 
               // }
            ?>
         </div>
         <div class="course__content">

            <div class="course__content--info">
                
                <?php
                    if ( $ld_archive_title_show ) {
                        get_template_part( 'learndash/tpl-part/title'); 
                    }
                    if ( $ld_excerpt_show ) {
                        get_template_part( 'learndash/tpl-part/excerpt_text'); 
                    }
                    ?>

            </div>
            
            <div class="course__border"></div>

            <div class="course__content--meta">

                <?php if ( function_exists( 'ldcr_course_rating_stars' ) && $ld_review_show ): ?>
                <div class="course__meta-left">

                        <div class="edubin-course-rate tpc_pt_0">
                            <?php   
                                if (function_exists( 'ldcr_course_rating_stars' ) && $ld_review_show ) {
                                    get_template_part( 'learndash/tpl-part/review'); 
                                } 
                                // if ( $ld_show_review_text) {
                                //     get_template_part( 'learndash/tpl-part/review_text'); 
                                // } 
                            ?>
                        </div>

                </div>
                <?php endif; ?><!--  End review -->

                <?php if (  $ld_lesson_show ||  $ld_lesson_text_show ): ?>
                    <div class="course__meta-center">

                    <?php if ( $ld_lesson_show ) { ?>
                         <span class="course-lessons">
                            <?php                                
                                if ( $ld_lesson_show ) {
                                   get_template_part( 'learndash/tpl-part/lessons'); 
                                }                              
                                if ( $ld_lesson_text_show ) {
                                   get_template_part( 'learndash/tpl-part/lessons_text'); 
                                }   
                            ?>
                        </span>
                    <?php } ?> 

                    <?php if ( $ld_topic_show ) { ?>     
                        <span class="course-topic">
                            <?php 
                                if ( $ld_topic_show ) {
                                    get_template_part( 'learndash/tpl-part/topic'); 
                                }                                      
                                if ( $ld_topic_text_show ) {
                                    get_template_part( 'learndash/tpl-part/topic_text'); 
                                }                                      
                            ?>
                        </span>
                    <?php } ?> 
                    </div>
                <?php endif; ?>

                <?php if (  $ld_price_show ): ?>
                <div class="course__meta-right">
                  <?php 
                        if ( $ld_price_show ) { ?>
                            <div class="price__1">
                               <?php get_template_part( 'learndash/tpl-part/price'); ?>
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