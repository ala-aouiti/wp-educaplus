  <?php 
        $primary_color               = Edubin::setting( 'primary_color' );
        $secondary_color             = Edubin::setting( 'secondary_color' );
        $content_color               = Edubin::setting( 'content_color' );
        $tertiary_color              = Edubin::setting( 'tertiary_color' );
        $link_color                  = Edubin::setting( 'link_color' );
        $link_hover_color            = Edubin::setting( 'link_hover_color' );
        $btn_color                   = Edubin::setting( 'btn_color' );
        $btn_hover_color             = Edubin::setting( 'btn_hover_color' );
        $btn_text_color              = Edubin::setting( 'btn_text_color' );
        $btn_text_hover_color        = Edubin::setting( 'btn_text_hover_color' );

       // LearnPress
        $lp_single_page_layout = Edubin::setting( 'lp_single_page_layout' );
        
?>
<style>
  <?php if ( $lp_single_page_layout == '1' ): ?>

    @media (max-width:1024px) {
        .single-course-layout-01 .page-header{
          text-align: center;
        }
    }
  <?php endif; //End learnpress header for layout 1  ?>

  <?php if ( $lp_single_page_layout == '3' ): ?>
     .single-course-layout-03 .page-header{
      text-align: center;
    }
  <?php endif; //End learnpress header for layout 3  ?>
  
  <?php if ( $lp_single_page_layout == '1' || $lp_single_page_layout == '3') : // The section visible only for layout 2 ?>
    .course-detail-info {
        display: none;
    }
  <?php endif; //End // The section visible only for layout 2  ?>

 <?php if ( Edubin::setting( 'primary_color' )): ?>
    .single-lp_course #learn-press-course-curriculum.course-curriculum ul.curriculum-sections .section-content .course-item.item-preview .course-item-preview {
        background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    .single-lp_course .course-curriculum .section-content .course-item-preview:before{
         background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    .single-lp_course #learn-press-course-curriculum.course-curriculum ul.curriculum-sections .section-content .course-item .course-item-meta .count-questions {
        background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    .single-lp_course #learn-press-course-curriculum.course-curriculum ul.curriculum-sections .section-content .course-item .course-item-meta .duration {
        background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    .edubin-single-course-1 .thum .edubin-course-price-1 span, .edubin-single-course-1 .thum .edubin-course-price-2 span, .edubin-single-course-1 .thum .edubin-course-price-3 span, .edubin-single-course-2>.thum .edubin-course-price-4 span{
        color: #fff;
    }
    .course-tab-panel .lp-course-author .author-socials>a:hover{
        border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
        color: #fff;
        background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
<?php endif; ?>

<?php if ( Edubin::setting( 'primary_color' ) or Edubin::setting( 'secondary_color')): ?>

    #edubin-lp-courses-addons .course__categories > a{
        color: #fff;
    }
<?php endif; ?>
    
</style> 
