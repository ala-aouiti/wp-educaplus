 <?php 

        $post_id = edubin_get_id();
        $prefix = '_edubin_';
        
        $page_header_enable = get_post_meta($post_id, $prefix . 'page_header_enable', true);

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
        $preloader_bg_color          = Edubin::setting( 'preloader_bg_color' );
        $sticky_header_enable        = Edubin::setting( 'sticky_header_enable' );
        $edubin_header_type          = Edubin::setting( 'edubin_header_type', 'edubin_theme_header' );
        $preloader_show              = Edubin::setting( 'preloader_show' );
        $preloader_image_url         = Edubin::setting( 'preloader_image_url' );
        $page_top_bottom_space_small = Edubin::setting( 'page_top_bottom_space_small' );

        $logo_size                                 = Edubin::setting( 'logo_size' );
        $mobile_logo                               = Edubin::setting( 'mobile_logo' );
        $mobile_logo_size                          = Edubin::setting( 'mobile_logo_size' );
        $mobile_logo_screen_width                  = Edubin::setting( 'mobile_logo_screen_width' );
        $top_massage_area_width                    = Edubin::setting( 'top_massage_area_width' );
        $sub_menu_right_align                      = Edubin::setting( 'sub_menu_right_align' );
        $sub_menu_width                            = Edubin::setting( 'sub_menu_width' );
        $show_copyright_menu                       = Edubin::setting( 'show_copyright_menu' );
        $header_page_title_align                   = Edubin::setting( 'header_page_title_align' );
        $page_header_height                        = Edubin::setting( 'page_header_height' );
        $page_header_height_small_screen           = Edubin::setting( 'page_header_height_small_screen' );
        $page_header_height_small_screen_width     = Edubin::setting( 'page_header_height_small_screen_width' );
        $header_title_font_size                    = Edubin::setting( 'header_title_font_size' );
        $header_title_font_size_small_device       = Edubin::setting( 'header_title_font_size_small_device' );
        $header_title_font_size_small_device_width = Edubin::setting( 'header_title_font_size_small_device_width' );
        $page_top_bottom_space = Edubin::setting( 'page_top_bottom_space' );
        $page_top_bottom_space_screen_width = Edubin::setting( 'page_top_bottom_space_screen_width' );

        $rtl_header_logo_align = Edubin::setting( 'rtl_header_logo_align' );
        $rtl_header_menu_align = Edubin::setting( 'rtl_header_menu_align' );
        $rtl_header_cart_align = Edubin::setting( 'rtl_header_cart_align' );

        // Hide custom post type archive: text
        $tutor_hide_archive_text = Edubin::setting( 'tutor_hide_archive_text' );

        $email_small_device = Edubin::setting( 'email_small_device' );
        $phone_small_device = Edubin::setting( 'phone_small_device' );
        $message_small_device = Edubin::setting( 'message_small_device' );

        $edubin_menu_top_space = Edubin::setting( 'edubin_menu_top_space' );
        $edubin_menu_button_space = Edubin::setting( 'edubin_menu_button_space' );
        $edubin_menu_left_space = Edubin::setting( 'edubin_menu_left_space' );
        $edubin_menu_right_space = Edubin::setting( 'edubin_menu_right_space' );
        $edubin_submenu_space = Edubin::setting( 'edubin_submenu_space' );
        $logo_top_space = Edubin::setting( 'logo_top_space' );
        $logo_top_space_mobile = Edubin::setting( 'logo_top_space_mobile' );
        $logo_bottom_space = Edubin::setting( 'logo_bottom_space' );
        $logo_bottom_space_mobile = Edubin::setting( 'logo_bottom_space_mobile' );
        $cart_serach_top_space = Edubin::setting( 'cart_serach_top_space' );
        $cart_serach_bottom_space = Edubin::setting( 'cart_serach_bottom_space' );

        $mb_customize_header_layout = get_post_meta($post_id, $prefix . 'mb_customize_header_layout', true);
        $mb_elementor_header = get_post_meta($post_id, $prefix . 'mb_elementor_header', true);
?>  
<style type="text/css">
:root {
    <?php if ( Edubin::setting( 'primary_color' )): ?>
    --edubin-primary-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    <?php endif ?>
    <?php if ( Edubin::setting( 'secondary_color')): ?>
    --edubin-secondary-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    <?php endif ?>
    <?php if ( Edubin::setting( 'content_color')): ?>
    --edubin-content-color: <?php echo esc_attr( Edubin::setting( 'content_color')); ?>;
    <?php endif ?>
    <?php if ( Edubin::setting( 'tertiary_color')): ?>
    --edubin-tertiary-color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    <?php endif ?>

    <?php if ( Edubin::setting( 'btn_text_color')): ?>
    --edubin-btn-color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    <?php endif ?>
    <?php if ( Edubin::setting( 'btn_color')): ?>
    --edubin-btn-bg-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    <?php endif ?>
    <?php if ( Edubin::setting( 'btn_color')): ?>
    --edubin-btn-border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    <?php endif ?>

    <?php if ( Edubin::setting( 'btn_text_hover_color')): ?>
    --edubin-btn-hover-color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    <?php endif ?>
    <?php if ( Edubin::setting( 'btn_hover_color')): ?>
    --edubin-btn-bg-hover-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    <?php endif ?>
    <?php if ( Edubin::setting( 'btn_hover_color')): ?>
    --edubin-btn-border-hover-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    <?php endif ?>
}
    <?php if ( $edubin_menu_top_space): ?>
        .main-navigation a{
           padding-top: <?php echo esc_attr($edubin_menu_top_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $edubin_menu_button_space): ?>
        .main-navigation a{
           padding-bottom: <?php echo esc_attr($edubin_menu_button_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $edubin_menu_left_space): ?>
        .main-navigation a{
           padding-left: <?php echo esc_attr($edubin_menu_left_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $edubin_menu_right_space): ?>
        .main-navigation a{
           padding-right: <?php echo esc_attr($edubin_menu_right_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $edubin_submenu_space): ?>
       .main-navigation ul ul a{
           padding-top: <?php echo esc_attr($edubin_submenu_space . 'px'); ?>;
           padding-bottom: <?php echo esc_attr($edubin_submenu_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $cart_serach_top_space): ?>
       .header-right-icon ul li{
           padding-top: <?php echo esc_attr($cart_serach_top_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $cart_serach_bottom_space): ?>
       .header-right-icon ul li{
           padding-bottom: <?php echo esc_attr($cart_serach_bottom_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $logo_top_space): ?>
       .site-branding{
           padding-top: <?php echo esc_attr($logo_top_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $logo_bottom_space): ?>
       .site-branding{
           padding-bottom: <?php echo esc_attr($logo_bottom_space . 'px'); ?>;
        }
    <?php endif;?>
    <?php if ( $email_small_device ||  $phone_small_device || $message_small_device): ?>
        @media (max-width: 767.98px) {
                .header-left {
                  display: block;
                  float: none;
                  text-align: center;
                }
            <?php if ( $email_small_device): ?>
                .header-top .contact-info .email{
                  display: inline-block;
                }
            <?php else: ?>
                .header-top .contact-info .email{
                  display: none;
                }
            <?php endif;?>
            <?php if ( $phone_small_device): ?>
                .header-top .contact-info .phone{
                  display: inline-block;
                      margin-right: 0;
                }
            <?php else: ?>
                 .header-top .contact-info .phone{
                  display: none;
                }
            <?php endif;?>
        }/* end small media query*/
    <?php if ( $message_small_device): ?>
      @media (max-width: 991.98px) {
          .header-top .contact-info li.massage .top-marquee {
              display: inline-block;
          }
      }
    <?php endif;?>
    <?php endif;?>
      <?php if(!is_user_logged_in()) { ?>
        .page.woocommerce-account.woocommerce-page .ld-profile-page .page-inner-wrap>.entry-content>.woocommerce {
            background: #fff;
            padding: 40px;
        }
      <?php } ?>
      <?php if ( $page_top_bottom_space || $page_top_bottom_space == 0): ?>
        .site__content {
            padding: <?php echo esc_attr($page_top_bottom_space . 'px'); ?> 0;
        }
      <?php endif;?>
      <?php if ( $page_top_bottom_space_small || $page_top_bottom_space_small == 0): ?>
        @media screen and (max-width: <?php echo esc_attr($page_top_bottom_space_screen_width . 'px'); ?>) {
            .site__content {
                padding: <?php echo esc_attr($page_top_bottom_space_small . 'px'); ?> 0;
            }
        }
      <?php endif;?>
      <?php if ( $page_header_enable == 'disable'): ?>
          .elementor-page .site__content {
              padding: 0;
          }
      <?php endif;?>
      <?php if ( $preloader_image_url && $preloader_show == true): ?>
        .edubin_image_preloader {
          background: url(<?php echo esc_url($preloader_image_url); ?>) center no-repeat <?php echo esc_attr($preloader_bg_color); ?>;
        }
      <?php endif;?>
      <?php if ( $sub_menu_width): ?>
        /* Menu area top padding */
        .main-navigation ul ul a {
          width: <?php echo esc_attr($sub_menu_width . 'px'); ?>;
        }
      <?php endif;?>
      <?php if ( $top_massage_area_width): ?>
        /* Top marque message are width */
        .header-top .contact-info li.massage .top-marquee {
          width: <?php echo esc_attr($top_massage_area_width . 'px'); ?>;
        }
        @media (min-width: 992px) and (max-width: 1199.98px) {
          .header-top .contact-info li.massage .top-marquee {
            width: 250px;
          }
        }
      <?php endif;?>
      <?php if ( $logo_size): ?>
        /* For logo only */
        body.home.title-tagline-hidden.has-header-image .custom-logo-link img,
        body.home.title-tagline-hidden.has-header-video .custom-logo-link img,
        .header-wrapper .header-menu .site-branding img,
        .site-branding img.custom-logo {
          max-width: <?php echo esc_attr($logo_size . 'px'); ?>;
        }
      <?php endif;?>
      @media (max-width: <?php echo esc_attr($mobile_logo_screen_width . 'px'); ?>) {

       <?php if ( $mobile_logo): ?>
        .header-sections .custom-logo-link img{
          display: none;
        }
      <?php endif;?>

      .header-sections .mobile-logo-active.edubin-mobile-logo {
        display: block;
      }
      .header-sections .edubin-mobile-logo {
        display: block;
      }
      .header-sections .edubin-mobile-logo img{
        max-width: <?php echo esc_attr($mobile_logo_size . 'px'); ?>;
      }
        <?php if ( $logo_top_space_mobile): ?>
            .site-branding{
               padding-top: <?php echo esc_attr($logo_top_space_mobile . 'px'); ?>;
            }
        <?php endif;?>

        <?php if ( $logo_bottom_space_mobile): ?>
           .site-branding{
               padding-bottom: <?php echo esc_attr($logo_bottom_space_mobile . 'px'); ?>;
            }
        <?php endif;?>
    }

  <?php if ( $sub_menu_right_align): ?>
    .main-navigation ul>li ul li:hover>ul {
      left: 100%;
      right: auto;
    }
  <?php endif;?>
/*  Header title align*/
  <?php if ( $header_page_title_align): ?>
    .page-header{
      text-align: <?php echo esc_attr($header_page_title_align); ?>;
    }
  <?php endif;?>
  /*  Header title height*/
  <?php if ( $page_header_height): ?>
    .page-header{
      min-height: <?php echo esc_attr($page_header_height . 'px'); ?>;
    }
  <?php endif;?>
  /*  Header title height small device*/
     @media (max-width: <?php echo esc_attr($page_header_height_small_screen_width . 'px'); ?>) {

       <?php if ( $page_header_height_small_screen): ?>
        .page-header{
          min-height: <?php echo esc_attr($page_header_height_small_screen . 'px'); ?>;
        }
      <?php endif;?>
      }
  /* Header title font size*/
  <?php if ( $header_title_font_size): ?>
    .page-header .page-title {
        font-size: <?php echo esc_attr($header_title_font_size . 'px'); ?>;
    }
  <?php endif;?>

  /* Header title font size for mobile device */
  @media (max-width: <?php echo esc_attr($header_title_font_size_small_device_width . 'px'); ?>) {
    <?php if ( $header_title_font_size_small_device): ?>
      .page-header .page-title {
          font-size: <?php echo esc_attr($header_title_font_size_small_device . 'px'); ?>;
      }
    <?php endif;?>
  }
  <?php if ( $rtl_header_logo_align): ?>
      .header-menu .site-branding {
          float: left;
      }
    .custom-logo-link {
        padding-left: 0;
    }
  <?php endif;?>

  <?php if ( $rtl_header_menu_align): ?>
      .header-menu .navigation-section {
          float: right;
      }
  <?php endif;?>

  <?php if ( $rtl_header_cart_align): ?>
      .header-right-icon.pull-right {
          float: right;
      }
  <?php endif;?>

  <?php if ( $edubin_header_type == 'edubin_elementor_header' && $sticky_header_enable || $mb_customize_header_layout == 'mb_elementor_header') : ?>
    .is-header-sticky {
        position: sticky;
    }
    .is-header-top-main .page-header {
        margin-top: 0;
    }
    .page-header {
        margin-top: 0;
    }
    .site__content.page-header-disable {
        margin-top: 0;
    }
    .is-header-top-main .site__content.page-header-disable{
        margin-top: 0;
    }
    .admin-bar .is-header-sticky {
        top: 0;
    }
  <?php endif;?>

  
  /* ==== Global Courses ====== */

  /* ===== Core ===== */

  .site-title, .site-title a{
    color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }

  .edubin-entry-footer .cat-links, .edubin-entry-footer .tags-links{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .widget .widget-title{
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }

  .learnpress .price-button button:hover,
  .learnpress .price-button input[type="button"]:hover,
  .learnpress input[type="submit"]:hover{
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .learnpress a.checkout-form-login-toggle, .learnpress a.checkout-form-register-toggle{
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
  }
<?php if (Edubin::setting( 'primary_color' ) || Edubin::setting( 'secondary_color')): ?>
    .learnpress-profile #learn-press-profile #profile-nav .lp-profile-nav-tabs li.active>a, .learnpress-profile #learn-press-profile #profile-nav .lp-profile-nav-tabs li:hover>a{
        color: #fff;
    }
.learnpress-profile #learn-press-profile #profile-nav .lp-profile-nav-tabs li.active>a i, .learnpress-profile #learn-press-profile #profile-nav .lp-profile-nav-tabs li.active>a:after, .learnpress-profile #learn-press-profile #profile-nav .lp-profile-nav-tabs li:hover>a i, .learnpress-profile #learn-press-profile #profile-nav .lp-profile-nav-tabs li:hover>a:after{
        color: #fff;
}
<?php endif; ?>

<?php if (Edubin::setting( 'primary_color' )): ?>
  .colors-light .pagination .nav-links .page-numbers.current{
   background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
   color: #fff;
 }
 .nav-links .page-numbers.dots{
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    color: #fff;
 }
<?php endif?>

.colors-light .pagination .nav-links .page-numbers.current:hover{
 background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}


.edubin-social a.edubin-social-icon{
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
<?php if (Edubin::setting( 'primary_color' )): ?>
  .site-footer .widget .edubin-social a:hover{
   color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
   background: transparent;
   border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
<?php endif;?>
<?php if (Edubin::setting( 'primary_color' )): ?>
  .header-right-icon ul li a span{
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    color: #fff;
  }
<?php endif;?>
.header-right-icon ul li a{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.lp-pmpro-membership-list .lp-price {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
/*Blog*/
.post .entry-meta li{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.post .entry-title a:hover, .post .entry-title a:focus, .post .entry-title a:active{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.navigation .nav-links .nav-title:hover{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
ul.entry-meta li i{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
#comments .logged-in-as>a:last-child{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.edubin_recent_post .edubin_recent_post_title a:hover{
 color: <?php echo esc_attr( Edubin::setting( 'link_hover_color')); ?>;
}

/*Sidebar*/
.widget .widget-title:before{
 background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.edubin_recent_post .edubin_recent_post_title a{
 color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
table#wp-calendar td#today{
  background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}

/*Core*/
.rubix-cube .layer{
    background-color:<?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}
.error-404 .error-404-heading{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.error-404 a{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.error-404 a:hover{
  color: <?php echo esc_attr( Edubin::setting( 'link_hover_color')); ?>;
}
<?php if (Edubin::setting( 'primary_color' ) || Edubin::setting( 'secondary_color')): ?>

    .edubin-course .price__2 span{
        color: #fff;
    }
    .edubin-course .price__3  span{
        color: #fff;
    }
    .edubin-course .price__4  span{
        color: #fff;
    }
    .edubin-course .course__categories a{
        color: #fff;
    }
    .edubin-course .course__level span{
        color: #fff;
    }
    .edubin-course .course__categories a:hover {
         color: #fff; 
    }
<?php endif ?>

/*blog*/

<?php if ( Edubin::setting( 'primary_color' ) or Edubin::setting( 'secondary_color')): ?>

    [class*="hint--"]:after {
      color: #fff;
    }
<?php endif; ?>

.entry-title a{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}

.comment-reply-link{
 color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
.comment-author-link{
 color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>
}
a.comment-reply-link:hover{
 color: <?php echo esc_attr( Edubin::setting( 'link_hover_color')); ?>;
}
.comments-area .comment-meta b.fn{
 color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
article.post.sticky{
 border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
body a{
 color: <?php echo esc_attr( Edubin::setting( 'link_color')); ?>;
}
body a:hover, body a:active{
  color: <?php echo esc_attr( Edubin::setting( 'link_hover_color')); ?>
}
.widget a{
 color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
}
input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, textarea:focus{
  border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
.widget .tagcloud a:hover, .widget .tagcloud a:focus, .widget.widget_tag_cloud a:hover, .widget.widget_tag_cloud a:focus, .wp_widget_tag_cloud a:hover, .wp_widget_tag_cloud a:focus{
 background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
}
<?php if (Edubin::setting( 'primary_color' )): ?>
  .widget .tagcloud a:hover{
    color: #fff;
  }
<?php endif;?>
.widget .tag-cloud-link{
  color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
}

/*Footer*/
<?php if ( $show_copyright_menu == true): ?>
  .text-right.text-ml-left {
    display: block;
  }
<?php endif;?>

</style>