<?php
/**
 * Displays header site branding
 *
 * @package Edubin
 * Version: 1.0.0
 */

?>
<?php

    $top_email   = Edubin::setting( 'top_email' );
    $top_phone   = Edubin::setting( 'top_phone' );
    $top_phone_link   = Edubin::setting( 'top_phone_link' );
    $top_massage   = Edubin::setting( 'top_massage' );
    $top_login_button_text   = Edubin::setting( 'top_login_button_text' );
    $top_register_button_text   = Edubin::setting( 'top_register_button_text' );
    $top_logout_button_text   = Edubin::setting( 'top_logout_button_text' );
    $top_profile_button_text   = Edubin::setting( 'top_profile_button_text' );
    $top_massage_animation_show   = Edubin::setting( 'top_massage_animation_show' );
    $top_widget_position   = Edubin::setting( 'top_widget_position' );
    $follow_us_show   = Edubin::setting( 'follow_us_show' );
    $follow_us_text   = Edubin::setting( 'follow_us_text' );
    $login_reg_show   = Edubin::setting( 'login_reg_show' );
    $profile_show   = Edubin::setting( 'profile_show' );
    $custom_profile_page_link   = Edubin::setting( 'custom_profile_page_link' );
    $custom_logout_link    = Edubin::setting( 'custom_logout_link' );
    $custom_login_link    = Edubin::setting( 'custom_login_link' );
    $custom_register_link    = Edubin::setting( 'custom_register_link' );

?>

    <div class="header-left">
        <?php
            if ((!empty($top_phone) || !empty($top_email) || !empty($top_massage))) {?>

            <ul class="contact-info list-inline">

                <?php if (!empty($top_email)) {?>
                    <li class="email list-inline-item">
                        <i class="glyph-icon flaticon-message-closed-envelope"></i>
                            <a href="mailto:<?php echo sanitize_email($top_email); ?>">
                                <?php echo sanitize_email($top_email); ?>
                            </a>
                    </li>
                <?php }?>

                <?php if (!empty($top_phone)) {?>
                    <li class="phone list-inline-item">
                       <i class="glyph-icon flaticon-telephone-handle-silhouette"></i>
                     <?php if (!empty($top_phone_link)) {?>
                        <a href="<?php echo esc_html($top_phone_link); ?>">
                      <?php }?>
                        <?php echo esc_html($top_phone); ?>
                     <?php if (!empty($top_phone_link)) {?>
                        </a>
                      <?php }?>
                    </li>
                <?php }?>
                 
               
                <?php if (!empty($top_massage)) {?>
                    <li class="massage list-inline-item">
                        <?php if ($top_massage_animation_show) : ?><marquee class="top-marquee"><?php endif; ?><?php echo esc_html($top_massage); ?><?php if ($top_massage_animation_show) : ?></marquee><?php endif; ?>
                    </li>
                <?php }?>

            </ul>
            <?php
        }?>

    </div><!-- .header-left -->

    <div class="header-right">

        <?php if ($top_widget_position == 'before_social'): ?>
        <ul>
            <?php if ( is_active_sidebar( 'header-top' ) ) { ?>
                <li class="header-top-widget-area list-inline-item align-right">
                    <?php dynamic_sidebar( 'header-top' ); ?>
                </li>
            <?php } ?>
        </ul><!-- .Top widget -->
        <?php endif ?>

<?php  

    $enable_social_handle = Edubin::setting( 'enable_social_handle' );
    $edubin_social_links = Edubin::setting( 'edubin_social_links' );
    $social_newtab   = Edubin::setting( 'social_newtab' );
    $social_alignment   = Edubin::setting( 'social_alignment' );

 ?>
    <?php if ($enable_social_handle) : ?>
        <div class="social">
                <?php if ($follow_us_show): ?>
                    <span class="follow-us"><?php if($follow_us_text) : echo $follow_us_text; else : echo esc_html__( 'Follow Us :', 'edubin' ); endif; ?></span>
                <?php endif ?>

                <ul class="social-icons <?php echo esc_attr( $social_alignment ) ?>">
                    <?php foreach($edubin_social_links as $edubin_social_handle) : 
                        ?>
                    <li>
                        <a <?php if(!empty($edubin_social_handle['header_icon_link'])) { ?>href="<?php echo esc_url( $edubin_social_handle['header_icon_link'] ); ?>"  <?php } ?><?php if(!empty($edubin_social_handle['header_icon_title'])) { ?>title="<?php echo esc_html( $edubin_social_handle['header_icon_title'] ); ?>" <?php } ?> <?php if( $social_newtab ) { ?>target="_blank"  <?php } ?>><i class="glyph-icon <?php echo esc_attr( $edubin_social_handle['header_icon_icons'] ); ?>" <?php if(!empty($edubin_social_handle['header_icons_color'])) { ?>style="color: <?php echo esc_html( $edubin_social_handle['header_icons_color'] ); ?>" <?php } ?>></i></a>
                    </li>
                    <?php endforeach; ?>
                </ul>

        </div>  <!-- .Social -->  
    <?php endif; ?>
        
        <?php if ($top_widget_position == 'after_social'): ?>
        <ul>
            <?php if ( is_active_sidebar( 'header-top' ) ) { ?>
                <li class="header-top-widget-area list-inline-item align-right">
                    <?php dynamic_sidebar( 'header-top' ); ?>
                </li>
            <?php } ?>
        </ul><!-- .Top widget -->
        <?php endif ?>

        <?php if ($profile_show == '1') : ?>
            <?php
                if ( is_user_logged_in() ) : ?>

                <div class="edubin-custom-user-profile">
                  <ul> 
                    <?php if (!empty($custom_profile_page_link)) : ?>
                        <li class="profile">
                            <a href="<?php echo esc_url($custom_profile_page_link); ?>"><?php if($top_profile_button_text) : echo $top_profile_button_text; else : echo esc_html__( 'Profile', 'edubin' ); endif; ?></a>
                    <?php else : ?>
                            <a href="<?php echo esc_url(get_edit_user_link()); ?>"><?php if($top_profile_button_text) : echo $top_profile_button_text; else : echo esc_html__( 'Profile', 'edubin' ); endif; ?></a>
                        <li>
                    <?php endif; ?>
                    <?php if ($login_reg_show == '1') : ?>
                      <li class="top-seperator"><?php echo esc_attr('/'); ?></li>
                    <?php endif; ?>
                  </ul>
                </div>
            <?php endif; ?>
        <?php endif; ?> 

        <?php if ($login_reg_show == '1') : ?>
            <?php
                if ( is_user_logged_in() ) : ?>
                    
                <div class="login-register logout">
                  <ul> 
                    <li class="logouthide">
                        <?php if (!empty($custom_logout_link)) : ?>
                            <a href="<?php echo esc_url($custom_logout_link); ?>"><?php if($top_logout_button_text) : echo $top_logout_button_text; else : echo esc_html__( 'Logout', 'edubin' ); endif; ?></a>
                        <?php else : ?>
                            <a href="<?php echo esc_url(wp_logout_url( home_url('/') )); ?>"><?php if($top_logout_button_text) : echo $top_logout_button_text; else : echo esc_html__( 'Logout', 'edubin' ); endif; ?></a>
                        <?php endif; ?>
                    <li>
                  </ul>
                </div>
                <?php else : ?>
                <div class="login-register">
                  <ul>
                    <?php if (!empty($custom_login_link)) : ?>
                        <li> <a href="<?php echo esc_url($custom_login_link); ?>"><?php if($top_login_button_text) : echo $top_login_button_text; else : echo esc_html__( 'Login', 'edubin' ); endif; ?></a></li>
                    <?php else : ?>
                        <li><a href="<?php echo esc_url(wp_login_url( home_url('/') )); ?>"><?php if($top_login_button_text) : echo $top_login_button_text; else : echo esc_html__( 'Login', 'edubin' ); endif; ?></a></li>
                    <?php endif; ?>
                        <li class="top-seperator"><?php echo esc_attr('/'); ?></li>
                    <?php if (!empty($custom_register_link)) : ?>
                        <li> <a href="<?php echo esc_url($custom_register_link); ?>"><?php if($top_register_button_text) : echo $top_register_button_text; else : echo esc_html__( 'Register', 'edubin' ); endif; ?></a></li>
                    <?php else : ?>
                        <li> <a href="<?php echo esc_url( wp_registration_url() ); ?>"><?php if($top_register_button_text) : echo $top_register_button_text; else : echo esc_html__( 'Register', 'edubin' ); endif; ?></a></li>
                    <?php endif; ?>

                  </ul>
                </div>
            <?php endif; ?>
        <?php endif; ?> 
    </div><!-- .header-right -->

