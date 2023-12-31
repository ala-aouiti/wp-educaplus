
<?php while ( have_posts() ) : the_post(); 

    global $post; $post_id = $post->ID;
    $course_id = $post_id;
    $user_id   = get_current_user_id();
    $current_id = $post->ID;
    $prefix = '_edubin_';

    $sensei_single_page_layout = Edubin::setting( 'sensei_single_page_layout' );
    $sensei_single_header_meta = Edubin::setting( 'sensei_single_header_meta' );
    $sensei_instructor_single = Edubin::setting( 'sensei_instructor_single' );
    $sensei_single_lesson = Edubin::setting( 'sensei_single_lesson' );

    $sensei_single_page_layout = Edubin::setting( 'sensei_single_page_layout' );

    $sensei_single_last_update = Edubin::setting( 'sensei_single_last_update' ); 
    $sensei_single_short_text = Edubin::setting( 'sensei_single_short_text' ); 

    $top_header_type = ($sensei_single_page_layout == '4') ? 'light' : 'dark';
    $header_content_col = ($sensei_single_page_layout == '3') ? '12' : '8';
    $header_top_meta_center = ($sensei_single_page_layout == '3') ? 'text-center' : '';
    $header_meta_center = ($sensei_single_page_layout == '3') ? 'justify-content-center' : '';
    $header_bg_class = ($sensei_single_page_layout == '3') ? 'course-page-header' : '';

    $breadcrumb_show = Edubin::setting( 'breadcrumb_show' );
    $shortcode_breadcrumb = Edubin::setting( 'shortcode_breadcrumb' );
    $sensei_single_breadcrumb = Edubin::setting( 'sensei_single_breadcrumb' ); 

    $page_header_img = get_post_meta($post_id, $prefix . 'header_img', true);

?>
<?php if ($sensei_single_page_layout == '3'): ?>
<div class="edubin-course-top-info <?php echo esc_attr($top_header_type); ?> <?php echo esc_attr($header_bg_class); ?>" style="background-image: url('<?php if ( $page_header_img ): ?><?php echo esc_url( $page_header_img ); ?><?php else : ?><?php echo esc_url( get_header_image() ); ?><?php endif ?>');">

<?php else: ?>
<div class="edubin-course-top-info <?php echo esc_attr($top_header_type); ?>">
<?php endif ?>

  <div class="container">
    <div class="row <?php echo esc_attr($header_top_meta_center); ?>">
      <div class="col-lg-<?php echo esc_attr($header_content_col); ?>">
        <div class="edubin-single-course-lead-info sensei">

          <?php if( $breadcrumb_show && $sensei_single_breadcrumb ): ?>
              <div class="header-breadcrumb">
                  <?php if($shortcode_breadcrumb) : ?>
                      <?php echo do_shortcode( $shortcode_breadcrumb ); ?>
                  <?php else : ?>
                      <?php edubin_breadcrumb_trail(); ?>
                  <?php endif; ?>
              </div>
          <?php endif; ?>

          <h1 class="course-title"><?php the_title(); ?></h1>

        <?php if ( $sensei_single_short_text ) { ?> 
          <div class="course-short-text"> <p><?php the_excerpt(); ?></p></div>
        <?php } ?>
          
          <?php if ( $sensei_single_header_meta ) : ?>

          <div class="edubin-single-course-lead-meta <?php echo esc_attr($header_meta_center); ?>">
            <div class="page-title-bar-meta">

              <?php if ($sensei_instructor_single) { ?> 
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
                $course              = get_post( get_the_ID() );
                $lesson_count        = Sensei()->course->course_lesson_count( get_the_ID() );
                $lesson_text = ('1' == $lesson_count) ? esc_html__(' Lesson', 'edubin') : esc_html__(' Lessons', 'edubin');
              ?>  
              <?php if ( $sensei_single_lesson ): ?>
              <div class="course-lesson">
                <span class="meta-icon far fa-file-alt"></span>
                <span class="meta-value"><?php echo esc_html( $lesson_count ) . $lesson_text; ?></span>
              </div>
              <?php endif; ?>
        
              <?php if ( $sensei_single_last_update ): ?>
              <div class="course-update">
                <span class="meta-icon far fa-regular fa-clock"></span>
                <span class="meta-value"><?php echo get_the_modified_date(); ?></span>
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