<?php 
    $post_id = edubin_get_id();

    global $post; $post_id = $post->ID;

    $course_id = $post_id;
    $user_id   = get_current_user_id();

    if(function_exists('edubinGetPostViewsCustom')){ edubinSetPostViewsCustom(get_the_ID()); }

    // Customizer option

    $ld_see_more_btn_text = Edubin::setting( 'ld_see_more_btn_text' );
    $free_custom_text = Edubin::setting( 'free_custom_text' );
    $enrolled_custom_text = Edubin::setting( 'enrolled_custom_text' );
    $completed_custom_text = Edubin::setting( 'completed_custom_text' );
    $ld_intro_video_position = Edubin::setting( 'ld_intro_video_position' ); 

?>


    <div id="courses-single" class="pt-90 pb-120 gray-bg edubin-learndash">
        <div class="container">
            <div class="row">
            <?php while ( have_posts() ) : the_post();
                    global $post; $post_id = $post->ID;
                    $course_id = $post_id;
                    $user_id   = get_current_user_id();
                    $current_id = $post->ID;

                    $enable_video = get_post_meta( $post->ID, '_learndash_course_grid_enable_video_preview', true );
                    $embed_code   = get_post_meta( $post->ID, '_learndash_course_grid_video_embed_code', true );
                    $button_text  = $ld_see_more_btn_text;

                    // Retrive oembed HTML if URL provided
                    if ( preg_match( '/^http/', $embed_code ) ) {
                        $embed_code = wp_oembed_get( $embed_code, array( 'height' => 600, 'width' => 400 ) );
                    }

                    $button_text = isset( $button_text ) && ! empty( $button_text ) ? $button_text : esc_html__( 'See more', 'edubin' );

                    $button_text = apply_filters( 'learndash_course_grid_custom_button_text', $button_text, $post_id );

                    $options = get_option('sfwd_cpt_options');
                    $currency = null;

                    if ( ! is_null( $options ) ) {
                        if ( isset($options['modules'] ) && isset( $options['modules']['sfwd-courses_options'] ) && isset( $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'] ) )
                        $currency = $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'];
                    }

                    if( is_null( $currency ) )
                        $currency = 'USD';

                    $course_options = get_post_meta($post_id, "_groups", true);
                    if ($free_custom_text) {
                        $price = $course_options && isset($course_options['groups_group_price']) ? $course_options['groups_group_price'] : $free_custom_text;
                    } else {
                        $price = $course_options && isset($course_options['groups_group_price']) ? $course_options['groups_group_price'] : esc_html__( 'Free', 'edubin' );
                    }
                    


                    $has_access   = sfwd_lms_has_access( $course_id, $user_id );
                    $is_completed = learndash_course_completed( $user_id, $course_id );

                    if( $price == '' )
                        if ($free_custom_text) {
                            $price .= $free_custom_text;
                        } else {
                            $price .= esc_html__( 'Free', 'edubin' );
                        }
                        
                       

                    if ( is_numeric( $price ) ) {
                        if ( $currency == "USD" )
                            $price = '$' . $price;
                        else
                            $price .= ' ' . $currency;
                    }

                    $class       = '';
                    $ribbon_text = '';

                    if ( $has_access && ! $is_completed ) {
                        $class = 'ld_course_grid_price ribbon-enrolled';

                        if ($enrolled_custom_text) {
                          $ribbon_text = $enrolled_custom_text;
                        } else {
                            $ribbon_text = esc_html__( 'Enrolled', 'edubin' );
                        }
                        
                    } elseif ( $has_access && $is_completed ) {
                        $class = 'ld_course_grid_price';

                        if ($completed_custom_text) {
                            $ribbon_text = $completed_custom_text;
                        } else {
                            $ribbon_text = esc_html__( 'Completed', 'edubin' );
                        }
                    } else {
                        $class = ! empty( $course_options['groups_group_price'] ) ? 'ld_course_grid_price price_' . $currency : 'ld_course_grid_price free';
                        $ribbon_text = $price;
                    }

            ?>

                <div class="col-lg-8">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                          <?php $embed_code = get_post_meta( $post->ID, '_learndash_course_grid_video_embed_code', true ); ?>

                          <?php if ($embed_code && $ld_intro_video_position == 'intro_video_content' ) : ?>

                          <div class="intro-video-sidebar intro-video-content">
                            <div class="intro-video" style="background-image:url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'large')); ?>)"> <a href="<?php echo esc_url( $embed_code ); ?>" class="edubin-popup-videos bla-2"><span class="fas fa-play"></span></a>
                            </div>
                          </div>  
                        <?php elseif($embed_code && $ld_intro_video_position == 'intro_video_sidebar') : ?>
                        <!--   the video will be show on sidebar -->

                        <?php elseif( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail( 'full' ); ?>
                            </div>
                        <?php endif; ?>


                        <div class="post-wrapper">
                            <div class="entry-content">
                                <?php
                                /* translators: %s: Name of current post */
                                the_content( sprintf(
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'edubin' ),
                                    get_the_title()
                                ) );

                                wp_link_pages( array(
                                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'edubin' ),
                                    'after'       => '</div>',
                                    'link_before' => '<span class="page-number">',
                                    'link_after'  => '</span>',
                                ) );
                                ?>
                            </div><!-- .entry-content -->

                            <?php
                                if ( is_single() ) {
                                    edubin_entry_footer();
                                }
                            ?>

                        </div>
                    </article>

                </div>
            <?php endwhile; // End of the loop. ?>
            

                <div class="col-lg-4">

                <?php $intro_video = get_post_meta( $post->ID, '_learndash_course_grid_video_embed_code', true ); ?>
                 <?php if ($intro_video && $ld_intro_video_position == 'intro_video_sidebar') : ?>
                    <aside id="secondary" class="widget-area">
                        <section class="widget edubin-ld-widget">

                        <div class="intro-video-sidebar">
                            <div class="intro-video" style="background-image:url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'large')); ?>)"> <a href="<?php echo esc_url( $intro_video ); ?>" class="edubin-popup-videos bla-2"><span class="fas fa-play"></span></a>
                            </div>
                        </div>  

                    </section>
                    </aside>
                <?php endif; ?>
                
                    <?php get_sidebar(); ?>

                </div>


            </div> <!-- row -->

        </div> <!-- container -->
    </div>
