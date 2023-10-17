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

       // LearnDash
        $ld_single_page_layout = Edubin::setting( 'ld_single_page_layout' );
        
?>
<style>
 <?php if ( $ld_single_page_layout == '1' ): ?>

    @media (max-width:1024px) {
        .single-course-layout-01 .page-header{
          text-align: center;
        }
    }
  <?php endif; //End learnpress header for layout 1  ?>

  <?php if ( $ld_single_page_layout == '3' ): ?>
     .single-course-layout-03 .page-header{
      text-align: center;
    }
  <?php endif; //End learnpress header for layout 3  ?>
      
/*Show only nth-child(1)d category */
 div.edubin-course-cat > span > a:not(:nth-child(1)){
     display: none;
  }
 div.caption > div > span > a:not(:nth-child(1)){
  display: none;
}
.edubin-course-cat>i{
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
div.edubin-course-cat > span > a{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
#ld_course_list .ld-course-list-items .ld_course_grid .btn-primary{
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
#ld_course_list .ld-course-list-items .ld_course_grid .btn-primary:hover, #ld_course_list .ld-course-list-items .ld_course_grid .btn-primary:focus, #ld_course_list .ld-course-list-items .ld_course_grid .btn-primary:active, #ld_course_list .ld-course-list-items .ld_course_grid .btn-primary.active, #ld_course_list .ld-course-list-items .ld_course_grid .open .dropdown-toggle.btn-primary{
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}
#ld_course_list .ld-course-list-items .ld_course_grid .thumbnail.course .ld_course_grid_price.ribbon-enrolled{
   background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
#ld_course_list .ld-course-list-items .ld_course_grid .thumbnail.course .ld_course_grid_price.ribbon-enrolled:before {
    border-top: 4px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    border-right: 4px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.edubin-single-course-1.ld-course .course-bottom .see-more-btn a{
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}

.edubin-single-course-1.ld-course .course-bottom .see-more-btn:hover a{
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}
  .learndash-wrapper .ld-item-list .ld-item-list-item.ld-is-next, .learndash-wrapper .wpProQuiz_content .wpProQuiz_questionListItem label:focus-within {
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .single .learndash-wrapper .ld-breadcrumbs a,
  .single .learndash-wrapper .ld-lesson-item.ld-is-current-lesson .ld-lesson-item-preview-heading,
  .single .learndash-wrapper .ld-lesson-item.ld-is-current-lesson .ld-lesson-title,
  .single .learndash-wrapper .ld-primary-color-hover:hover,
  .single .learndash-wrapper .ld-primary-color,
  .single .learndash-wrapper .ld-primary-color-hover:hover,
  .single .learndash-wrapper .ld-primary-color,
  .single .learndash-wrapper .ld-tabs .ld-tabs-navigation .ld-tab.ld-active,
  .single .learndash-wrapper .ld-button.ld-button-transparent,
  .single .learndash-wrapper .ld-button.ld-button-reverse,
  .single .learndash-wrapper .ld-icon-certificate,
  .single .learndash-wrapper .ld-login-modal .ld-login-modal-login .ld-modal-heading,
  .single #wpProQuiz_user_content a,
  .single .learndash-wrapper .ld-item-list .ld-item-list-item a.ld-item-name:hover {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }
.learndash-wrapper .ld-course-navigation .ld-lesson-item-preview a.ld-lesson-item-preview-heading:hover{
   color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
}
  .learndash-wrapper .ld-primary-background,
  .learndash-wrapper .ld-tabs .ld-tabs-navigation .ld-tab.ld-active:after {
    background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }

  .learndash-wrapper .ld-course-navigation .ld-lesson-item.ld-is-current-lesson .ld-status-incomplete {
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }
  .learndash-wrapper .ld-loading::before {
    border-top:3px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }

  .learndash-wrapper .wpProQuiz_reviewDiv .wpProQuiz_reviewQuestion li.wpProQuiz_reviewQuestionTarget,
  .learndash-wrapper .ld-button:hover:not(.learndash-link-previous-incomplete):not(.ld-button-transparent),
  #learndash-tooltips .ld-tooltip:after,
  #learndash-tooltips .ld-tooltip,
  .learndash-wrapper .ld-primary-background,
  .learndash-wrapper .btn-join,
  .learndash-wrapper #btn-join,
  .learndash-wrapper .ld-button:not(.ld-js-register-account):not(.learndash-link-previous-incomplete):not(.ld-button-transparent),
  .learndash-wrapper .ld-expand-button,
  .learndash-wrapper .wpProQuiz_content .wpProQuiz_button,
  .learndash-wrapper .wpProQuiz_content .wpProQuiz_button2,
  .learndash-wrapper .wpProQuiz_content a#quiz_continue_link,
  .learndash-wrapper .ld-focus .ld-focus-sidebar .ld-course-navigation-heading,
  .learndash-wrapper .ld-focus .ld-focus-sidebar .ld-focus-sidebar-trigger,
  .learndash-wrapper .ld-focus-comments .form-submit #submit,
  .learndash-wrapper .ld-login-modal input[type='submit'],
  .learndash-wrapper .ld-login-modal .ld-login-modal-register,
  .learndash-wrapper .wpProQuiz_content .wpProQuiz_certificate a.btn-blue,
  .learndash-wrapper .ld-focus .ld-focus-header .ld-user-menu .ld-user-menu-items a,
  #wpProQuiz_user_content table.wp-list-table thead th,
  #wpProQuiz_overlay_close,
  .learndash-wrapper .ld-expand-button.ld-button-alternate .ld-icon {
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }
  .learndash-wrapper .ld-focus .ld-focus-header .ld-user-menu .ld-user-menu-items:before {
    border-bottom-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }
  .learndash-wrapper .ld-button.ld-button-transparent:hover {
    background: transparent !important;
  }
  .learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete .learndash_mark_complete_button,
  .learndash-wrapper .ld-focus .ld-focus-header #sfwd-mark-complete #learndash_mark_complete_button,
  .learndash-wrapper .ld-button.ld-button-transparent,
  .learndash-wrapper .ld-button.ld-button-alternate,
  .learndash-wrapper .ld-expand-button.ld-button-alternate {
    background-color:transparent !important;
  }
  .learndash-wrapper .ld-focus-header .ld-user-menu .ld-user-menu-items a,
  .learndash-wrapper .ld-button.ld-button-reverse:hover,
  .learndash-wrapper .ld-alert-success .ld-alert-icon.ld-icon-certificate,
  .learndash-wrapper .ld-alert-warning .ld-button:not(.learndash-link-previous-incomplete),
  .learndash-wrapper .ld-primary-background.ld-status {
    color:white !important;
  }
  .learndash-wrapper .ld-status.ld-status-unlocked {
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>20!important;
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }
  .edubin-related-course.ld-related-course .widget-title:before{
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .edubin-related-course .single-maylike .cont h4:hover{
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .edubin-related-course .single-maylike .cont ul li{
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  <?php if (Edubin::setting( 'primary_color' )): ?>
    .edubin-single-course-1 .thum .edubin-course-price-1 span{
      background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      color: #fff;
    }
  <?php endif;?>
  .edubin-single-course-1 .course-content ul li>i{
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .learndash-wrapper .ld-focus .ld-focus-sidebar .ld-course-navigation .ld-topic-list.ld-table-list .ld-table-list-item .ld-table-list-item-preview.ld-is-current-item{
       color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .ldx-plugin .learndash .wpProQuiz_content .wpProQuiz_quiz .wpProQuiz_questionList[data-type=single] .wpProQuiz_questionListItem label:focus-within, .ldx-plugin .learndash .wpProQuiz_content .wpProQuiz_quiz .wpProQuiz_questionList[data-type=single] .wpProQuiz_questionListItem label.is-selected, .ldx-plugin .learndash .wpProQuiz_content .wpProQuiz_quiz .wpProQuiz_questionList[data-type=multiple] .wpProQuiz_questionListItem label:focus-within, .ldx-plugin .learndash .wpProQuiz_content .wpProQuiz_quiz .wpProQuiz_questionList[data-type=multiple] .wpProQuiz_questionListItem label.is-selected{
    box-shadow: inset 0 0 0 2px <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .edubin-single-course-1 .course-content ul li> a:hover{
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .edubin-single-course-1 .course-content .course-title a:hover{
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }

  <?php if ( Edubin::setting( 'primary_color' ) or Edubin::setting( 'secondary_color') ): ?>
        .single .learndash-wrapper .ld-expand-button:hover {
            color: #fff;
        }
  <?php endif;?>

  <?php if (Edubin::setting( 'primary_color' )): ?>
    .edubin-single-course-1 .thum .edubin-course-price-2 span{
      background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      color: #fff;
    }
  <?php endif;?>
    <?php if (Edubin::setting( 'primary_color' )): ?>
        .single .learndash-wrapper .learndash_mark_complete_button, .learndash-wrapper #learndash_mark_complete_button{
          color: #fff;
    }
    .single .learndash-wrapper .sfwd-mark-complete::after, .single .learndash-wrapper #sfwd-mark-complete::after{
         color: #fff;
    }
    .single .learndash-wrapper .ld-login-modal .login-submit>input[type='submit']:hover{
         color: #fff;
    }
    <?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
    .edubin-single-course-1 .thum .edubin-course-price-3 span{
      background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      color: #fff;
    }
  <?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
    .edubin-single-course-2>.thum .edubin-course-price-4 span{
     background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
     color: #fff;
   }
 <?php endif;?>
 .edubin-single-course-2.ld-course .course-meta ul li a:hover{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
<?php if (Edubin::setting( 'primary_color' )) {?>
  .edubin-single-course-2.ld-course .see-more-btn a{
    color: #fff;
  }
  .edubin-single-course-2.ld-course .course-meta ul li{
    color: #fff;
  }
  .edubin-single-course-2.ld-course .course-meta ul li a{
    color: #fff;
  }
<?php }?>
.learndash-wrapper #quiz_continue_link,
.learndash-wrapper .ld-secondary-background,
.learndash-wrapper .learndash_mark_complete_button,
.learndash-wrapper #learndash_mark_complete_button,
.learndash-wrapper .ld-status-complete,
.learndash-wrapper .ld-alert-success .ld-button,
.learndash-wrapper .ld-alert-success .ld-alert-icon {
  background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
}

.learndash-wrapper .ld-secondary-color-hover:hover,
.learndash-wrapper .ld-secondary-color,
.learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete .learndash_mark_complete_button,
.learndash-wrapper .ld-focus .ld-focus-header #sfwd-mark-complete #learndash_mark_complete_button,
.learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete:after {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
}

.learndash-wrapper .ld-secondary-in-progress-icon {
  border-left-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  border-top-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
}

.learndash-wrapper .ld-alert-success {
  border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  background-color: transparent !important;
  color: #fff;
}
.edubin-related-course .single-maylike .image::before{
  background: linear-gradient(0deg, <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?> 0%, transparent 100%);
}

.edubin-related-course.ld-related-course .widget-title{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>
}
.widget.edubin-ld-widget span.learndash-profile-course-title a{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.edubin-single-course-1 .course-content .course-title a{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.learndash-wrapper .learndash_mark_complete_button, .learndash-wrapper #learndash_mark_complete_button{
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
.learndash-wrapper .sfwd-mark-complete::after, .learndash-wrapper #sfwd-mark-complete::after{
   color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
.checkout.learnpress.learnpress-page .learnpress>a{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.learndash-wrapper .ld-status-waiting {
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
<?php if (Edubin::setting( 'primary_color' )) : ?>
.learndash-wrapper .ld-course-status.ld-course-status-not-enrolled .ld-status{
   color: #fff !important;
}
<?php endif;?>
.learndash-wrapper .ld-login-modal .login-submit>input[type='submit']:hover{
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?> !important;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}
.edubin-ld-course-list-items .ld_course_grid .btn-primary{
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
.edubin-ld-course-list-items .ld_course_grid .btn-primary:hover, .edubin-ld-course-list-items .ld_course_grid .btn-primary:focus, .edubin-ld-course-list-items .ld_course_grid .btn-primary:active, .edubin-ld-course-list-items .ld_course_grid .btn-primary.active, .edubin-ld-course-list-items .ld_course_grid .open .dropdown-toggle.btn-primary{
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}

<?php if (Edubin::setting( 'primary_color' )): ?>
  .edubin-ld-course-list-items .ld_course_grid .thumbnail.course .ld_course_grid_price.ribbon-enrolled{
    background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    color: #fff;
  }
<?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .edubin-ld-course-list-items .ld_course_grid .thumbnail.course .ld_course_grid_price.ribbon-enrolled:before{
    border-top: 4px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    border-right: 4px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
<?php endif;?>
<?php if (Edubin::setting( 'primary_color' )): ?>
  .edubin-ld-course-list-items .ld_course_grid .thumbnail.course .ld_course_grid_price{
     background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
     color: #fff;
  }
<?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .edubin-ld-course-list-items .ld_course_grid .thumbnail.course .ld_course_grid_price:before {
    border-top: 4px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    border-right: 4px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  } 
<?php endif;?>
  .ld_course_grid .entry-title {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .ld_course_grid a:hover .entry-title {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .edubin-ld-course-list-items .ld_course_grid .thumbnail.course a.btn-primary{
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
  }
  .edubin-ld-course-list-items .ld_course_grid .thumbnail.course a.btn-primary{
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
</style>

