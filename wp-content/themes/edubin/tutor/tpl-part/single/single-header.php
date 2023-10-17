<?php 
// Prepare the nav items
$course_nav_item = apply_filters( 'tutor_course/single/nav_items', tutor_utils()->course_nav_items(), get_the_ID() );

tutor_utils()->tutor_custom_header();
do_action('tutor_course/single/before/wrap');

$post_id = $post->ID;
$prefix = '_edubin_';

$tutor_related_course_position = Edubin::setting( 'tutor_related_course_position' );

$tutor_single_last_update = Edubin::setting( 'tutor_single_last_update' );
$tutor_single_review = Edubin::setting( 'tutor_single_review' );
$tutor_instructor_single = Edubin::setting( 'tutor_instructor_single' );
$tutor_lesson_single = Edubin::setting( 'tutor_lesson_single' );
$tutor_single_enroll_btn = Edubin::setting( 'tutor_single_enroll_btn' );
$tutor_duration_single = Edubin::setting( 'tutor_duration_single' );
$tutor_single_header_meta = Edubin::setting( 'tutor_single_header_meta' );
$tutor_single_excerpt = Edubin::setting( 'tutor_single_excerpt' );

$tutor_single_sidebar_sticky = Edubin::setting( 'tutor_single_sidebar_sticky' );
$sidebar_sticky_on_off = ( $tutor_single_sidebar_sticky ? 'do_sticky' : '');

global $post, $authordata;

$profile_url        = tutor_utils()->profile_url( $authordata->ID, true );
$show_author        = tutor_utils()->get_option( 'enable_course_author' );
$course_categories  = get_tutor_course_categories();
$disable_reviews    = ! get_tutor_option( 'enable_course_review' );
$is_wish_listed     = tutor_utils()->is_wishlisted( $post->ID, get_current_user_id() );

$course_duration = get_tutor_course_duration_context();

$lesson = tutor_utils()->get_lesson_count_by_course(get_the_ID());
$lesson_text = ('1' == $lesson) ? esc_html__('Lesson', 'edubin') : esc_html__('Lessons', 'edubin');

$students = (int) tutor_utils()->count_enrolled_users_by_course(); 

$rating  = tutor_utils()->get_course_rating( get_the_ID() );


    $tutor_single_page_layout = Edubin::setting( 'tutor_single_page_layout' );

    $top_header_type = ($tutor_single_page_layout == '4') ? 'light' : 'dark';
    $header_content_col = ($tutor_single_page_layout == '3') ? '12' : '8';
    $header_top_meta_center = ($tutor_single_page_layout == '3') ? 'text-center' : '';
    $header_meta_center = ($tutor_single_page_layout == '3') ? 'justify-content-center' : '';
    $header_bg_class = ($tutor_single_page_layout == '3') ? 'course-page-header' : '';

    $breadcrumb_show = Edubin::setting( 'breadcrumb_show' );
    $shortcode_breadcrumb = Edubin::setting( 'shortcode_breadcrumb' );
    $tutor_single_breadcrumb = Edubin::setting( 'tutor_single_breadcrumb' ); 

    $page_header_img = get_post_meta($post_id, $prefix . 'header_img', true);


 ?>

<?php if ($tutor_single_page_layout == '3'): ?>
<div class="edubin-course-top-info <?php echo esc_attr($top_header_type); ?> <?php echo esc_attr($header_bg_class); ?>" style="background-image: url('<?php if ( $page_header_img ): ?><?php echo esc_url( $page_header_img ); ?><?php else : ?><?php echo esc_url( get_header_image() ); ?><?php endif ?>');">

<?php else: ?>
<div class="edubin-course-top-info <?php echo esc_attr($top_header_type); ?>">
<?php endif ?>

  <div class="container">
    <div class="row <?php echo esc_attr($header_top_meta_center); ?>">
      <div class="col-lg-<?php echo esc_attr($header_content_col); ?>">
        <div class="edubin-single-course-lead-info tutor">

          <?php if( $breadcrumb_show && $tutor_single_breadcrumb ): ?>
              <div class="header-breadcrumb">
                  <?php if($shortcode_breadcrumb) : ?>
                      <?php echo do_shortcode( $shortcode_breadcrumb ); ?>
                  <?php else : ?>
                      <?php edubin_breadcrumb_trail(); ?>
                  <?php endif; ?>
              </div>
          <?php endif; ?>

          <h1 class="course-title"><?php the_title(); ?></h1>

          <?php if ( $tutor_single_excerpt) : ?> 
            <?php if ( ! has_excerpt()) : ?> 
            <?php else : ?>
                <div class="course-short-text"> <p><?php the_excerpt(); ?></p></div>
            <?php endif; ?>
          <?php endif; ?>

       <?php if ( $tutor_single_page_layout == '2' || $tutor_single_page_layout == '4' ) : ?>
          <?php if ($tutor_single_review || $tutor_single_last_update) { ?>
            <div class="edubin-single-course-lead-meta <?php echo esc_attr($header_meta_center); ?>">

              <?php if ($tutor_single_review) { ?>

                  <div class="lead-meta-item meta-last-update">
                    <span class="lead-meta-value"> <?php tutor_utils()->star_rating_generator_v2( $rating->rating_avg, null, false, '', 'lg' ); ?></span>
                  </div>

              <?php } ?>

              <?php if ($tutor_single_last_update) { ?>

              <div class="lead-meta-item meta-last-update">
                <span class="lead-meta-value"><?php echo esc_html__('Last Updated :', 'edubin'); ?> <?php echo get_the_modified_date(); ?></span>
              </div>         
                  
              <?php } ?>

            </div>
          <?php } ?>
        <?php endif; ?>

        <?php if ( $tutor_single_header_meta ) : ?>
          <div class="edubin-single-course-lead-meta <?php echo esc_attr($header_meta_center); ?>">

            <div class="page-title-bar-meta">

            <?php if ($tutor_instructor_single) : ?>
              <div class="course-instructor post-author">
                <span class="meta-icon meta-image">
                    <a href="<?php echo esc_url( $profile_url ); ?>">
                       <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                    </a>
                </span>
                <span class="meta-value"><a href="<?php echo esc_url( $profile_url ); ?>"><?php echo get_the_author_meta('display_name'); ?></a></span>
              </div>
            <?php endif; ?>

            <?php if ($tutor_lesson_single) : ?>
              <div class="course-lesson">
                <span class="meta-icon far fa-file-alt"></span>
                <span class="meta-value"> <?php echo $lesson; ?> <?php echo $lesson_text; ?> </span>
              </div>
            <?php endif; ?>

            <?php if ($tutor_single_enroll_btn) : ?>
              <div class="course-students">
                <span class="meta-icon far fa-user"></span>
                <span class="meta-value"><?php echo $students; ?> <?php echo esc_html__('Enrolled', 'edubin'); ?></span>
              </div>
            <?php endif; ?>

            <?php if ($tutor_duration_single) : ?>
              <div class="course-duration">
                <span class="meta-icon far fa-clock"></span>
                <span class="meta-value"><?php echo $course_duration; ?></span>
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
