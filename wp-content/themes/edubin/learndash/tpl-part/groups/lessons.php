<?php 

    $ld_lesson_show = Edubin::setting( 'ld_lesson_show' );

    $lesson  = learndash_get_course_steps( get_the_ID(), array('sfwd-lessons') );
    $lesson = $lesson ? count($lesson) : 0;
?>

<?php if( $ld_lesson_show ) : ?>  
    <i class="flaticon-book-1"></i>
    <?php echo esc_html( $lesson ); ?>
<?php endif; ?>