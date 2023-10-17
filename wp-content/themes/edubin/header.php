<?php
/**
 * Theme header 
 * @subpackage Edubin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="//gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

  <?php  

    $post_id = edubin_get_id();
    $prefix = '_edubin_';

    $header_top_show = Edubin::setting( 'header_top_show' );
    $header_variations = Edubin::setting( 'header_variations' );
    $sticky_header_enable = Edubin::setting( 'sticky_header_enable' );
    $page_header_show = Edubin::setting( 'page_header_show' );

    $edubin_header_type = Edubin::setting( 'edubin_header_type' );
    $edubin_get_elementor_header = Edubin::setting( 'edubin_get_elementor_header' );

    // Metabox
    $page_bg_color = get_post_meta($post_id, $prefix . 'page_bg_color', true);
    $page_header_enable = get_post_meta($post_id, $prefix . 'page_header_enable', true);

    $cmb2_header_img = get_post_meta($post_id, $prefix . 'header_img', true);
    $mb_header_img =  get_post_meta($post_id, $prefix . 'mb_header_img', true);
    $page_title_image_url = ( !empty($mb_header_img['image']) ) ? $mb_header_img['image'] : $cmb2_header_img ;

    $mb_customize_header_layout = get_post_meta($post_id, $prefix . 'mb_customize_header_layout', true);
    $mb_elementor_header = get_post_meta($post_id, $prefix . 'mb_elementor_header', true);

    $lp_single_page_layout = Edubin::setting( 'lp_single_page_layout' );

    $ld_single_page_layout = Edubin::setting( 'ld_single_page_layout' );

    $tutor_single_page_layout = Edubin::setting( 'tutor_single_page_layout' );

    $sensei_single_page_layout = Edubin::setting( 'sensei_single_page_layout' );

 ?>
  
</head>

<body <?php body_class(); ?> <?php if(!empty($page_bg_color)): ?>style="background-color: <?php echo esc_attr($page_bg_color); ?>"<?php endif; ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/site', 'preloader' ); ?>

  <div id="page" class="site <?php if($sticky_header_enable == '0'): echo esc_attr( 'is-header-sticky-main'); endif; ?> <?php if($header_top_show == '1'): echo esc_attr( 'is-header-top-main'); endif; ?>">
<?php 


    if ( $mb_customize_header_layout == 'mb_elementor_header' ) { ?>
            <header id="header" class="header-sections <?php if($sticky_header_enable == '1'): echo esc_attr( 'is-header-sticky'); endif; ?> edubin-header-builder">
                <div class='edubin-container-wrap container-fluid'>
                   <?php   
                   if ( $mb_elementor_header ) {
                          $mb_elementor_header_id = intval($mb_elementor_header);

                          if (did_action('elementor/loaded')) {
                              echo \Elementor\Plugin::$instance->frontend->get_builder_content($mb_elementor_header_id);
                          }
                      } ?>
                </div>
            </header> 
          
   <?php } 
   elseif ( $edubin_header_type == 'edubin_elementor_header' ) { ?>
            <header id="header" class="header-sections <?php if($sticky_header_enable == '1'): echo esc_attr( 'is-header-sticky'); endif; ?> edubin-header-builder">
                <div class='edubin-container-wrap container-fluid'>
                   <?php   
                   if ( $edubin_get_elementor_header) {
                          $header_page_select_id = intval($edubin_get_elementor_header);

                          if (did_action('elementor/loaded')) {
                              echo \Elementor\Plugin::$instance->frontend->get_builder_content($header_page_select_id);
                          }
                      } ?>
                </div>
            </header> 

        <?php  } else { // Show theme header ?>

            <header id="header" class="header-sections <?php if($sticky_header_enable == '1'): echo esc_attr( 'is-header-sticky'); endif; ?>">

              <?php if ( $header_top_show == '1' ): ?>
                   <div class="header-top">
                        <div class="container">
                            <?php get_template_part( 'template-parts/header/header', 'top' ); ?>
                       </div>
                   </div>
              <?php endif; ?>

                <div class="container">
                  <?php 
                        if( $header_variations == 'header_v1' ) :
                          get_template_part( 'template-parts/header/header', 'v1' );
                        elseif( $header_variations == 'header_v2' ) :
                          get_template_part( 'template-parts/header/header', 'v2' ); 
                        elseif( $header_variations == 'header_v3' ) :
                          get_template_part( 'template-parts/header/header', 'v3' ); 
                        else : 
                          get_template_part( 'template-parts/header/header', 'v2' );
                       endif; 
                   ?>
               </div>
             </header> 

      <?php } //End elementor header theme ?>

     <?php if( $page_header_show == true ):  ?>
        <?php  

        if( class_exists('LearnPress') && is_singular( 'lp_course' ) && $lp_single_page_layout == '2' ) :
        elseif( class_exists('LearnPress') && is_singular( 'lp_course' ) && $lp_single_page_layout == '3' ) :
        elseif( class_exists('LearnPress') && is_singular( 'lp_course' ) && $lp_single_page_layout == '4' ) :
            // Hide header for LearnPress LMS

        elseif( class_exists('SFWD_LMS') && is_singular( 'sfwd-courses' ) && $ld_single_page_layout == '2') :
        elseif( class_exists('SFWD_LMS') && is_singular( 'sfwd-courses' ) && $ld_single_page_layout == '3') :
        elseif( class_exists('SFWD_LMS') && is_singular( 'sfwd-courses' ) && $ld_single_page_layout == '4') :
            // Hide header for LearnDash LMS
    
        elseif( function_exists('tutor') && is_singular( 'courses' ) && $tutor_single_page_layout == '2' ) :
        elseif( function_exists('tutor') && is_singular( 'courses' ) && $tutor_single_page_layout == '3' ) :
        elseif( function_exists('tutor') && is_singular( 'courses' ) && $tutor_single_page_layout == '4') :
            // Hide header for Tutor LMS

        elseif( class_exists('Sensei_Main') && is_singular( 'course' ) && $sensei_single_page_layout == '2') :
        elseif( class_exists('Sensei_Main') && is_singular( 'course' ) && $sensei_single_page_layout == '3') :
        elseif( class_exists('Sensei_Main') && is_singular( 'course' ) && $sensei_single_page_layout == '4') :
            // Hide header for LearnDash LMS
    
        elseif( !is_front_page() && $page_header_enable == 'enable' ):  ?>
          <section class="page-header" style="background-image: url('<?php if ( $page_title_image_url ): ?><?php echo esc_url( $page_title_image_url ); ?><?php else : ?><?php echo esc_url( get_header_image() ); ?><?php endif ?>');">
            <div class="container">
             <?php get_template_part( 'template-parts/header/page-header' ); ?>
           </div>
         </section>
       <?php elseif( $page_header_enable == !'enable' ):  ?>
          <section class="page-header" style="background-image: url('<?php if ( $page_title_image_url ): ?><?php echo esc_url( $page_title_image_url ); ?><?php else : ?><?php echo esc_url( get_header_image() ); ?><?php endif ?>');">
            <div class="container">
             <?php get_template_part( 'template-parts/header/page-header' ); ?>
           </div>
         </section>
     <?php endif;?>
 
   <?php endif;?>

<?php $for_course_header = ( $mb_customize_header_layout == 'mb_elementor_header' ||  $edubin_header_type == 'edubin_elementor_header') ? 'for_course_header' : ''; ?>
   
 <div id="content" class="site__content <?php if( $page_header_enable == 'disable' ): echo esc_attr( 'page-header-disable' ); endif; ?> <?php echo esc_attr($for_course_header); ?>">