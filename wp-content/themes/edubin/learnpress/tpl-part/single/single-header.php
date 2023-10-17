
<?php while ( have_posts() ) : the_post(); 

    global $post; $post_id = $post->ID;
    $course_id = $post_id;
    $user_id   = get_current_user_id();
    $current_id = $post->ID;
    $course    = learn_press_get_course();
    $prefix = '_edubin_';

    $lp_single_excerpt = Edubin::setting( 'lp_single_excerpt' );
    $lp_course_feature_duration_show = Edubin::setting( 'lp_course_feature_duration_show' );
    $lp_course_feature_quizzes_show = Edubin::setting( 'lp_course_feature_quizzes_show' );
    $lp_course_feature_lessons_show = Edubin::setting( 'lp_course_feature_lessons_show' );
    $lp_course_feature_enroll_show = Edubin::setting( 'lp_course_feature_enroll_show' );
    $lp_single_header_meta = Edubin::setting( 'lp_single_header_meta' );
    $lp_instructor_single = Edubin::setting( 'lp_instructor_single' );
    $lp_single_review = Edubin::setting( 'lp_single_review' );
    $lp_single_last_update = Edubin::setting( 'lp_single_last_update' );

    $lp_single_page_layout = Edubin::setting( 'lp_single_page_layout' );

    $top_header_type = ($lp_single_page_layout == '4') ? 'light' : 'dark';
    $header_content_col = ($lp_single_page_layout == '3') ? '12' : '8';
    $header_top_meta_center = ($lp_single_page_layout == '3') ? 'text-center' : '';
    $header_meta_center = ($lp_single_page_layout == '3') ? 'justify-content-center' : '';
    $header_bg_class = ($lp_single_page_layout == '3') ? 'course-page-header' : '';

    $breadcrumb_show = Edubin::setting( 'breadcrumb_show' );
    $shortcode_breadcrumb = Edubin::setting( 'shortcode_breadcrumb' );
    $lp_single_breadcrumb = Edubin::setting( 'lp_single_breadcrumb' );

    $page_header_img = get_post_meta($post_id, $prefix . 'header_img', true);

?>

<?php if ($lp_single_page_layout == '3'): ?>
<div class="edubin-course-top-info <?php echo esc_attr($top_header_type); ?> <?php echo esc_attr($header_bg_class); ?>" style="background-image: url('<?php if ( $page_header_img ): ?><?php echo esc_url( $page_header_img ); ?><?php else : ?><?php echo esc_url( get_header_image() ); ?><?php endif ?>');">

<?php else: ?>
<div class="edubin-course-top-info <?php echo esc_attr($top_header_type); ?>">
<?php endif ?>

  <div class="container">
    <div class="row <?php echo esc_attr($header_top_meta_center); ?>">
      <div class="col-lg-<?php echo esc_attr($header_content_col); ?>">

        <div class="edubin-single-course-lead-info lp">

          <?php if( $breadcrumb_show && $lp_single_breadcrumb ): ?>
              <div class="header-breadcrumb">
                  <?php if($shortcode_breadcrumb) : ?>
                      <?php echo do_shortcode( $shortcode_breadcrumb ); ?>
                  <?php else : ?>
                      <?php edubin_breadcrumb_trail(); ?>
                  <?php endif; ?>
              </div>
          <?php endif; ?>

          <h1 class="course-title"><?php the_title(); ?></h1>

          <?php if ( $lp_single_excerpt) : ?> 
            <?php if ( ! has_excerpt()) : ?> 
            <?php else : ?>
                <div class="course-short-text"> <p><?php the_excerpt(); ?></p></div>
            <?php endif; ?>
          <?php endif; ?>

        <?php if ( $lp_single_page_layout == '2' || $lp_single_page_layout == '4' ) : ?>
          <div class="edubin-single-course-lead-meta <?php echo esc_attr($header_meta_center); ?>">

            <?php if ( class_exists('LP_Addon_Course_Review_Preload') && $lp_single_review ): ?>
              <div class="lead-meta-item meta-last-update">

                <span class="lead-meta-value">

                  <div class="lead-meta-item meta-last-review">
                      <?php  

                          $course_id       = get_the_ID();
                          $course_rate_res = learn_press_get_course_rate( $course_id, false );
                          $course_rate     = $course_rate_res['rated'];
                          $total           = $course_rate_res['total'];

                          learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $course_rate ) ); 

                      ?>
                  </div>

                </span>
              </div>
            <?php endif; ?>

            <?php if ($lp_single_last_update) { ?>

              <div class="lead-meta-item meta-last-update">
                <span class="lead-meta-value"><?php echo esc_html__('Last Updated :', 'edubin'); ?> <?php echo get_the_modified_date('d-m-Y'); ?></span>
              </div>         
                  
            <?php } ?>

          </div>
        <?php endif; ?>

        <?php if ( $lp_single_header_meta ) : ?>
          <div class="edubin-single-course-lead-meta <?php echo esc_attr($header_meta_center); ?>">
            <div class="page-title-bar-meta">

              <?php if ($lp_instructor_single) { ?> 
              <div class="course-instructor post-author">
                <span class="meta-icon meta-image">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                </span>
                <span class="meta-value">
                  <?php the_author() ?>
                </span>
              </div>
              <?php } ?>

              <?php
                $lessons = $course->get_items('lp_lesson', false) ? count($course->get_items('lp_lesson', false)) : 0;
                $lessons_text = ('1' == $lessons) ? esc_html__(' Lesson', 'edubin') : esc_html__(' Lessons', 'edubin');
              ?>  
              <?php if ( $lessons  && $lp_course_feature_lessons_show ): ?>
              <div class="course-lesson">
                <span class="meta-icon far fa-file-alt"></span>
                <span class="meta-value"><?php echo esc_attr( $lessons ) . $lessons_text; ?></span>
              </div>
              <?php endif; ?>

              <?php  $lp_students     = get_post_meta(get_the_ID(), '_lp_students');

              if ( $lp_students && $lp_course_feature_enroll_show ): ?>

              <?php $students = (int)learn_press_get_course()->count_students(); ?>
              <div class="course-students">
                <span class="meta-icon far fa-user"></span>
                <span class="meta-value"><?php echo $students; ?> <?php echo esc_html__('Enrolled', 'edubin'); ?></span>
              </div>
              <?php endif; ?>

              <?php 
                $lp_quizzes      = $course->get_curriculum_items('lp_quiz');

                $quiz = $course->get_items('lp_quiz', false) ? count($course->get_items('lp_quiz', false)) : 0;
                $quiz_text = ('1' == $quiz) ? esc_html__(' Quiz', 'edubin') : esc_html__(' Quizzes', 'edubin'); ?>

              <?php if ( $quiz && $lp_course_feature_quizzes_show ): ?>
                <div class="course-duration">
                  <span class="meta-icon far fa-question-circle"></span>
                  <span class="meta-value">
                      <?php echo esc_attr( $quiz ) . $quiz_text; ?>
                  </span>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

        </div>

      </div>
    </div>
  </div>
</div>
<?php endwhile; // End of the loop. ?>