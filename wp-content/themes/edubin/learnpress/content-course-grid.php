<?php
/**
 * Template for displaying course content within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-course.php
 *
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$user = LP_Global::user();
$course    = learn_press_get_course();
$course_id = get_the_ID();
$count = $course->get_users_enrolled();

// Customizer option
$lp_course_archive_style = Edubin::setting( 'lp_course_archive_style' );
$lp_course_archive_clm = Edubin::setting( 'lp_course_archive_clm' );

$lp_price_show = Edubin::setting( 'lp_price_show' );
$lp_review_show = Edubin::setting( 'lp_review_show' );
$lp_review_text_show = Edubin::setting( 'lp_review_text_show' );
$lp_instructor_img_on_off = Edubin::setting( 'lp_instructor_img_on_off' );
$lp_instructor_name_on_off = Edubin::setting( 'lp_instructor_name_on_off' );
$lp_cat_show = Edubin::setting( 'lp_cat_show' ); 
$lp_quiz_show = Edubin::setting( 'lp_quiz_show' ); 
$lp_lesson_show = Edubin::setting( 'lp_lesson_show' ); 

?>
<?php 
   if ($lp_course_archive_style == '6') :     

      get_template_part( 'learnpress/tpl-part/layout', '6'); 

   elseif ($lp_course_archive_style == '5') :      

      get_template_part( 'learnpress/tpl-part/layout', '5'); 

   elseif ($lp_course_archive_style == '4') :   

      get_template_part( 'learnpress/tpl-part/layout', '4'); 

   elseif ($lp_course_archive_style == '3') :

      get_template_part( 'learnpress/tpl-part/layout', '3'); 

   elseif ($lp_course_archive_style == '2') :
      
      get_template_part( 'learnpress/tpl-part/layout', '2');

   else :       
      get_template_part( 'learnpress/tpl-part/layout', '1');   

   endif; //End course style

 ?>