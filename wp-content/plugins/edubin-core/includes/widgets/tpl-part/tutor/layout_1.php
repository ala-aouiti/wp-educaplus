<?php

    $settings   = $this->get_settings_for_display();

    $tutor_course_archive_style = $settings['course_style'];
    $tutor_archive_media_show = $settings['media_show'];
    $tutor_cat_show = $settings['show_cat'];
    $tutor_price_show = $settings['show_price'];
    $tutor_review_show = $settings['show_review'];
    $tutor_review_text_show =  $settings['show_review_text'];
    $tutor_instructor_img_on_off = $settings['show_author_avator'];
    $tutor_instructor_name_on_off = $settings['show_author_name'];
    $tutor_archive_title_show = $settings['show_title'];
    $tutor_excerpt_show =  $settings['show_excerpt'];
    $tutor_enroll_show =  $settings['show_enroll'];
    $tutor_lesson_show =  $settings['show_lesson'];
    $tutor_quiz_show =  $settings['show_quiz'];
    $tutor_level_show =  $settings['show_level'];
    $tutor_wishlist_show =  $settings['show_wishlist'];
    // $tutor_show_btn =  $settings['show_btn'];
    $tutor_permalink_type =  $settings['permalink_type'];
    $tutor_see_more_text =  $settings['see_more_text'];

    if ($settings['posts_column'] == '12') : 
        $tutor_course_archive_clm = '1';
    elseif ($settings['posts_column'] == '6') : 
        $tutor_course_archive_clm = '2';
    elseif ($settings['posts_column'] == '4') : 
        $tutor_course_archive_clm = '3';
    elseif ($settings['posts_column'] == '3') :
        $tutor_course_archive_clm = '4';
    elseif ($settings['course_style'] == '2') :
        $tutor_course_archive_clm = '6';
    endif; 
    
?> 

   <div class="edubin-course layout__<?php echo esc_attr($tutor_course_archive_style); ?> <?php if ( $tutor_review_show ) { echo esc_attr('review__show'); } ?> col__<?php echo esc_attr($tutor_course_archive_clm); ?>">
      <div class="course__container">
         <div class="course__media">
            <?php 
                if ( $tutor_archive_media_show ) {
                    require EDUBIN_ADDONS_PL_PATH . 'includes/widgets/tpl-part/tutor/media.php';
                }
                if ( $tutor_cat_show ) {
                    get_template_part( 'tutor/tpl-part/category'); 
                }
            ?>
         </div>
         <div class="course__content">

            <div class="course__content--info">
                <?php 
                     if (  $tutor_review_show ): ?>
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
                
                <?php
                    if ( $tutor_archive_title_show ) {
                        get_template_part( 'tutor/tpl-part/title'); 
                    }
                    if ( $tutor_excerpt_show ) {
                        get_template_part( 'tutor/tpl-part/excerpt_text'); 
                    }
                    if ( $tutor_instructor_img_on_off || $tutor_instructor_name_on_off): ?>
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

            </div>
            
            <div class="course__border"></div>

            <div class="course__content--meta">
                <div class="course__meta-left">
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
                <?php if (  $tutor_price_show || $tutor_permalink_type == 'tutor_archive_dynamic_url' || $tutor_permalink_type == 'tutor_archive_permalink' ): ?>
                <div class="course__meta-right">
                    <?php 
                        if ( $tutor_permalink_type == 'tutor_archive_dynamic_url') : ?>
                            <?php get_template_part( 'tutor/tpl-part/see_more'); 

                        elseif ( $tutor_permalink_type == 'tutor_archive_permalink' ) : ?>
                            <a href="<?php the_permalink(); ?>">
                               <?php echo $tutor_see_more_text; ?>                           
                            </a>  
                       <?php else: ?>
                            <div class="price__1">
                               <?php get_template_part( 'tutor/tpl-part/price'); ?>
                            </div>
                      <?php endif;
                    ?>
                </div> 
                <?php endif; ?>
            </div><!-- End course__content--meta -->

         </div>
      </div>
   </div>