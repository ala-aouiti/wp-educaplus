<?php

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    $course              = get_post( get_the_ID() );
    $lesson_count        = Sensei()->course->course_lesson_count( get_the_ID() );

    $sensei_price_show = Edubin::setting( 'sensei_price_show' );
    $sensei_lesson_show = Edubin::setting( 'sensei_lesson_show' );
    $sensei_lesson_text_show = Edubin::setting( 'sensei_lesson_text_show' );
    $sensei_see_more_btn_text = Edubin::setting( 'sensei_see_more_btn_text' );
    $sensei_cat_show = Edubin::setting( 'sensei_cat_show' );
    $sensei_instructor_img_on_off = Edubin::setting( 'sensei_instructor_img_on_off' );
    $sensei_instructor_name_on_off = Edubin::setting( 'sensei_instructor_name_on_off' );
    $sensei_excerpt_show = Edubin::setting( 'sensei_excerpt_show' );
    $see_more_btn_or_icon = Edubin::setting( 'see_more_btn_or_icon' );
    $sensei_intor_video_image = Edubin::setting( 'sensei_intor_video_image' );
    $sensei_custom_placeholder_image = Edubin::setting( 'sensei_custom_placeholder_image' );
    $sensei_archive_media_show = Edubin::setting( 'sensei_archive_media_show' );
    $sensei_archive_title_show = Edubin::setting( 'sensei_archive_title_show' );

    $sensei_course_archive_style = Edubin::setting( 'sensei_course_archive_style' );
    $sensei_course_archive_clm = Edubin::setting( 'sensei_course_archive_clm' );
    $sensei_course_archive_clm_modify = Edubin::setting( 'sensei_course_archive_clm' );

    if ($sensei_course_archive_clm_modify == '12') : 
        $sensei_course_archive_clm_final = '1';
    elseif ($sensei_course_archive_clm_modify == '6') : 
        $sensei_course_archive_clm_final = '2';
    elseif ($sensei_course_archive_clm_modify == '4') : 
        $sensei_course_archive_clm_final = '3';
    elseif ($sensei_course_archive_clm_modify == '3') :
        $sensei_course_archive_clm_final = '4';
    elseif ($sensei_course_archive_clm_modify == '2') :
        $sensei_course_archive_clm_final = '6';
    endif; 

    // Sensei course archive image size
    $sensei_course_archive_clm = Edubin::setting( 'sensei_course_archive_clm' );


?>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-<?php echo esc_attr($sensei_course_archive_clm); ?>">
    
  <div class="edubin-course layout__<?php echo esc_attr($sensei_course_archive_style); ?> col__<?php echo esc_attr( $sensei_course_archive_clm ); ?>">
      <div class="course__container">
         <div class="course__media">
            <?php 
              if ( $sensei_archive_media_show ) {
                    get_template_part( 'sensei/tpl-part/media'); 
               }
                if ( $sensei_cat_show ) {
                   get_template_part( 'sensei/tpl-part/category'); 
                }
            ?>
         </div>
         <div class="course__content">

            <div class="course__content--info">
                
                <?php
                    if ( $sensei_archive_title_show ) {
                        get_template_part( 'sensei/tpl-part/title'); 
                    }
                    if ( $sensei_excerpt_show ) {
                        get_template_part( 'sensei/tpl-part/excerpt_text'); 
                    }
                    if ( $sensei_instructor_img_on_off || $sensei_instructor_name_on_off ): ?>
                    <div class="author__name <?php echo $sensei_course_archive_style == '1' ? ' tpc_mt_15' : ''; ?>">
                        <?php          
                            if ( $sensei_instructor_img_on_off ) {
                                get_template_part( 'sensei/tpl-part/author_avator'); 
                            } 
                            if ( $sensei_instructor_name_on_off ) {
                                get_template_part( 'sensei/tpl-part/author_name'); 
                            }  
                        ?>
                    </div>  
                <?php endif; ?> 

            </div>
            
            <div class="course__border"></div>

            <div class="course__content--meta">
                <div class="course__meta-left">

                <?php if ( $sensei_lesson_show ) { ?>
                     <span class="course-lessons">
                        <?php                                
                         if ( $sensei_lesson_show ) {
                              get_template_part( 'sensei/tpl-part/lessons'); 
                         }                              
                        if ( $sensei_lesson_text_show ) {
                            get_template_part( 'sensei/tpl-part/lessons_text'); 
                         }   
                        ?>
                    </span>
                <?php } ?> 

                </div>
                <div class="course__meta-right">
                    <?php 
                        if ( $sensei_price_show ) { ?>
                            <div class="price__1">
                               <?php get_template_part( 'sensei/tpl-part/price'); ?>
                            </div>
                       <?php } 
                    ?>
                </div> 
            </div><!-- End course__content--meta -->

         </div>
      </div>
   </div>

</div>
