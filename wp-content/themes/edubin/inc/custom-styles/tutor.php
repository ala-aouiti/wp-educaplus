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

        // Tutor
        $tutor_login_form_widget_align = Edubin::setting( 'tutor_login_form_widget_align' );
        $tutor_settings_color = Edubin::setting( 'tutor_settings_color' );
        $tutor_archive_pagi_aligment = Edubin::setting( 'tutor_archive_pagi_aligment' );
        $tutor_single_page_layout = Edubin::setting( 'tutor_single_page_layout' );

        
?>
<style>
      <?php if ( $tutor_single_page_layout == '3' ): ?>
       .single-course-layout-03 .page-header{
          text-align: center;
        }
      <?php endif; //End learnpress header for layout 3  ?>


     <?php if ( $tutor_archive_pagi_aligment): ?>
        body.archive.post-type-archive-courses .tutor-pagination{
          justify-content: <?php echo esc_attr($tutor_archive_pagi_aligment); ?>;
        }
      <?php endif;?>

  <?php if ( $tutor_login_form_widget_align): ?>
    .edubin-tutor-login-form-after-widget-wrapper{
      text-align: <?php echo esc_attr($tutor_login_form_widget_align); ?>;
    }
  <?php endif;?>

  <?php if ( $tutor_hide_archive_text == false ): //hide archive: text?>
    .post-type-archive-courses .breadcrumbs .trail-items li:nth-child(2){
      display: none;
    }
    .tutor-course-hidden-archive-text{
        display: none;
    }
  <?php endif;?>

    <?php if ( Edubin::setting( 'primary_color' ) or Edubin::setting( 'secondary_color')): // ========= if enable tutor default theme color ============ ?>

    .tutor-dashboard .tutor-dashboard-left-menu .tutor-dashboard-permalinks li.active a{
        color: #fff;
    }
    .tutor-btn-outline-primary:hover, .tutor-btn-outline-primary:focus, .tutor-btn-outline-primary:active{
        color: #fff; 
    }
  <?php endif;?>

  <?php if (!$tutor_settings_color): // ========= enable for use tutor default color ============ ?>
  .tutor-quiz-header h2{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-quiz-header h5 a{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-quiz-header h5{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-quiz-single-wrap .question-text{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-quiz-header .tutor-quiz-meta li strong{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-course-filter-wrapper>div:first-child h4{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-price-preview-box .price {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .tutor-sidebar-course-author span a > strong{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>!important;
  }
  .tutor-certificate-sidebar-course > h3{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>!important;
  }
  .tutor-sidebar-course-title{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>!important;
  }
  .tutor-segment-title, .tutor-single-course-segment .tutor-segment-title {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-course-topics-contents .tutor-course-title h4 {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-course-lesson h5 a:hover {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .tutor-full-width-course-top h4, .tutor-full-width-course-top h5, .tutor-full-width-course-top h6 {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-custom-list-style li:before {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .tutor-option-field textarea:focus, .tutor-option-field input:not([type="submit"]):focus, .tutor-form-group textarea:focus, .tutor-form-group input:not([type="submit"]):focus {
    border-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .single_add_to_cart_button, a.tutor-button, .tutor-button {
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  }
  a.tutor-button:hover, .tutor-button:hover{
    background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group a.tutor-button, .tutor-lead-info-btn-group .tutor-course-complete-form-wrap button {
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  }
  .single_add_to_cart_button.tutor-button-primary, .tutor-button.tutor-button-primary, .tutor-btn.tutor-button-primary{
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  }
  .single_add_to_cart_button.tutor-button-primary:hover, .tutor-button.tutor-button-primary:hover, .tutor-btn.tutor-button-primary:hover{
    background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .tutor-button.tutor-success {
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
  }
  .tutor-button.tutor-success:hover {
    background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group .tutor-button.tutor-success {
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group .tutor-button.tutor-success:hover {
    background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group .tutor-course-complete-form-wrap button:hover {
    background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .tutor-course-enrolled-review-wrap .write-course-review-link-btn {
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  }
  .tutor-course-enrolled-review-wrap .write-course-review-link-btn:hover {
    background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  #tutor-lesson-sidebar-qa-tab-content .tutor-add-question-wrap button.tutor_ask_question_btn {
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  }
  #tutor-lesson-sidebar-qa-tab-content .tutor-add-question-wrap button.tutor_ask_question_btn:hover {
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .tutor-button.tutor-danger {
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  }
  .tutor-button.tutor-danger:hover {
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .tutor-progress-bar .tutor-progress-filled {
    background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .tutor-progress-bar .tutor-progress-filled:after {
    border-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .tutor-course-tags a {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  <?php if (Edubin::setting( 'primary_color' )): ?>
    .tutor-course-tags a:hover {
      color: #fff;
      border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
  <?php endif;?>
  .tutor-single-course-segment .course-benefits-title {
    color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .tutor-single-course-segment .course-benefits-title:before {
    background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .tutor-single-course-sidebar .tutor-single-course-segment .tutor-segment-title {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-single-course-sidebar .tutor-single-course-segment .tutor-segment-title:before {
    background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .tutor-wrap nav.course-enrolled-nav ul li.active a {
    background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .tutor-wrap nav.course-enrolled-nav ul {
    background: #edf0f2;
  }
  .tutor-wrap nav.course-enrolled-nav ul li a {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-announcement-title-wrap h3 {
    color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .tutor-single-course-meta ul li{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .tutor-single-course-meta ul li a{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .single-instructor-wrap .instructor-name h3 a{
   color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
 }
 .tutor-single-course-rating .tutor-single-rating-count{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-single-course-meta ul li.tutor-social-share button {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-single-course-meta ul li a:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-single-course-meta ul li.tutor-social-share button:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-single-course-meta.tutor-lead-meta ul li a {
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-single-course-meta.tutor-lead-meta ul li a:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-single-page-top-bar {
  background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-single-page-top-bar .tutor-single-lesson-segment button.course-complete-button:hover {
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
}
.tutor-tabs-btn-group a i {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-topics-in-single-lesson .tutor-topics-title h3 {
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-topics-in-single-lesson .tutor-single-lesson-items a>i.tutor-icon-doubt {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-tabs-btn-group a {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-tabs-btn-group a:hover, .tutor-tabs-btn-group a:active {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
#tutor-lesson-sidebar-qa-tab-content .tutor-add-question-wrap h3 {
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-next-previous-pagination-wrap a {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}

.tutor-topics-in-single-lesson .tutor-topics-title button{
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.edubin-tutor-col-8 .woocommerce-message a.button.wc-forward {
  background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.edubin-tutor-col-8 .woocommerce-message a.button.wc-forward:hover {
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-price-preview-box .tutor-course-purchase-box button {
  background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
<?php if (Edubin::setting( 'primary_color' )): ?>
.tutor-price-preview-box .tutor-course-purchase-box button:hover {
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  color: #fff;
}
<?php endif;?>
.tutor-course-enrolled-wrap p i, .tutor-course-enrolled-wrap p span {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
/*== Archive page*/
.tutor-course-loop-title h2 a {
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-course-loop-title h2 a:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-course-loop-price{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-course-loop-price>.price .tutor-loop-cart-btn-wrap a::before {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-course-loop-header-meta .tutor-course-wishlist a {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-course-loop-header-meta .tutor-course-wishlist:hover {
  background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-loop-author>div a{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-loop-author>div a:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}

.tutor-course-loop-price>.price .tutor-loop-cart-btn-wrap a:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
<?php if (Edubin::setting( 'primary_color' ) || Edubin::setting( 'secondary_color')): ?>
    .tutor-pagination ul.tutor-pagination-numbers .page-numbers.current{
        color: #fff;
    }
<?php endif;?>
<?php if (Edubin::setting( 'primary_color' )): ?>
  .tutor-pagination-wrap span.page-numbers.current {
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    color: #fff;
  }
<?php endif;?>
<?php if (Edubin::setting( 'primary_color' )): ?>
  .tutor-pagination-wrap a:hover, .tutor-pagination a:hover {
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    color: #fff;
  }
<?php endif;?>
.tutor-login-form-wrap input[type="password"]:focus, .tutor-login-form-wrap input[type="text"]:focus {
  border-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-login-form-wrap input[type="submit"] {
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
}
.tutor-login-form-wrap input[type="submit"]:hover {
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}
.tutor-form-group.tutor-reg-form-btn-wrap .tutor-button {
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
}
.tutor-form-group.tutor-reg-form-btn-wrap .tutor-button:hover {
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}
/*== dashboard */
a.tutor-button.bordered-button, .tutor-button.bordered-button, a.tutor-btn.bordered-btn, .tutor-btn.bordered-btn {
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?> !important;;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?> !important;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?> !important;
}
a.tutor-button.bordered-button:hover, .tutor-button.bordered-button:hover, a.tutor-btn.bordered-btn:hover, .tutor-btn.bordered-btn:hover {
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?> !important;;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?> !important;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?> !important;
}
.tutor-dashboard-permalinks li.active a {
  background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
<?php endif;?>
<?php if (Edubin::setting( 'primary_color' )): ?>
.tutor-dashboard-permalinks li a:hover{
  color: #fff;
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
<?php endif;?>
<?php if (Edubin::setting( 'primary_color' )): ?>
.tutor-dashboard-permalinks li.active a:hover{
  color: #fff;
  background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
<?php if (Edubin::setting( 'secondary_color')): ?>
  .tutor-dashboard-permalinks li.tutor-dashboard-menu-index.active a:hover{
    color: #fff;
  }
<?php endif;?>
.tutor-dashboard-content-inner .tutor-course-metadata li span{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-view-certificate a{
   color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-dashboard-content>h3 {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
body .tutor-dashboard-permalinks a {
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-dashboard-info-table-wrap table.tutor-dashboard-info-table a{
   color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
<?php if (Edubin::setting( 'primary_color' )): ?>
.tutor-dashboard-permalinks a:hover:before {
  color: #fff;
}
<?php endif;?>
.tutor-dashboard-permalinks a:before {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}

.tutor-dashboard-header .tutor-btn.bordered-btn{
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
#tutor-ask-question-form .tutor-form-group .tutor-button.tutor-success{
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
#tutor-ask-question-form .tutor-form-group .tutor-button.tutor-success:hover{
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}
.tutor-dashboard-info-cards .tutor-dashboard-info-card p {
  background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-dashboard-inline-links ul li a:hover, .tutor-dashboard-inline-links ul li.active a {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  border-bottom-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-dashboard-inline-links ul li a {
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-dashboard-content-inner h3 a {
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.tutor-mycourse-content h3 a:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-dashboard-review-title a {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-mycourse-edit i, .tutor-mycourse-delete i {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-modal-button-group button.tutor-danger {
  background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-modal-button-group button.tutor-danger:hover {
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-modal-button-group button:hover {
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
button.tm-close.tutor-icon-line-cross:hover {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.tutor-mycourse-edit:hover, .tutor-mycourse-delete:hover {
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-dashboard-item-group>h4 {
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.report-top-sub-menu a.active {
  background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.date-range-input button {
  background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
a.tutor-profile-photo-upload-btn, button.tutor-profile-photo-upload-btn {
  background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
a.tutor-profile-photo-upload-btn:hover, button.tutor-profile-photo-upload-btn:hover {
  background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.label-course-publish {
  background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.quiz-attempts-title, .tutor-quiz-attempt-history-title{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.quiz-modal-btn-next, .quiz-modal-btn-next:focus, .quiz-modal-btn-first-step, .quiz-modal-btn-first-step:focus, .quiz-modal-question-save-btn, .quiz-modal-question-save-btn:focus, .quiz-modal-settings-save-btn, .quiz-modal-settings-save-btn:focus{
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
.quiz-modal-btn-cancel, .quiz-modal-btn-back {
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}
.quiz-modal-btn-cancel:hover, .quiz-modal-btn-back:hover {
  border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
  color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
}

.tutor-course-builder-section-title h3::after{
   background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-course-builder-section-title h3 i {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-course-builder-upload-tips .tutor-course-builder-tips-title i {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-course-builder-upload-tips .tutor-course-builder-tips-title{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.settings-tabs-navs-wrap .settings-tabs-navs li.active a {
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-sidebar-filter .single-filter label:hover{
   color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-course-col .tutor-course-body h3 a:hover{
   color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-course-col .tutor-course .tutor-course-loop-level{
   background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-sidebar-filter .single-filter label input:checked+.filter-checkbox{
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.tutor-sidebar-filter .single-filter label:hover input+.filter-checkbox{
   border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
<?php if (Edubin::setting( 'primary_color' )): ?>
  .page-numbers.current{
      border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      color: #fff;
  }
<?php endif;?>
.tutor-certificate-sidebar-btn-container>div .bordered-btn{
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
}

<?php endif; // End enable for use tutor default color ============ ?> 
</style>
