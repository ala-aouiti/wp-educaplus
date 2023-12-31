<?php
/**
 * The template for displaying all single posts
 */

get_header(); 

   $post_id = edubin_get_id();

    global $post; $post_id = $post->ID;

    $course_id = $post_id;
    $user_id   = get_current_user_id();

    if(function_exists('edubinGetPostViewsCustom')){ edubinSetPostViewsCustom(get_the_ID()); }

    // Customizer option
    $sensei_see_more_btn_text = Edubin::setting( 'sensei_see_more_btn_text' );
    $free_custom_text = Edubin::setting( 'free_custom_text' );
    $enrolled_custom_text = Edubin::setting( 'enrolled_custom_text' );
    $completed_custom_text = Edubin::setting( 'completed_custom_text' );
    $sensei_intro_video_position = Edubin::setting( 'sensei_intro_video_position' );
    $sensei_related_course_position = Edubin::setting( 'sensei_related_course_position' );

?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container">
                <div class="row">
                <?php while ( have_posts() ) : the_post();
                        global $post; $post_id = $post->ID;
                        $course_id = $post_id;
                        $user_id   = get_current_user_id();
                        $current_id = $post->ID;

                ?>

                    <div class="col-lg-8 order-2 order-lg-1 mt-4 mt-lg-0">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   

                        <?php 
                            $edubin_sensei_video = get_post_meta($post_id, 'edubin_sensei_video', true);
                         
                            if ($edubin_sensei_video && $sensei_intro_video_position == 'intro_video_content') : ?>

                          <div class="intro-video-sidebar intro-video-content">
                            <div class="intro-video" style="background-image:url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>)"> <a href="<?php echo esc_url( $edubin_sensei_video ); ?>" class="edubin-popup-videos bla-2"><span class="fas fa-play"></span></a>
                            </div>
                          </div>  

                        <!--   the video will be show on sidebar -->
                        <?php elseif( has_post_thumbnail() && $sensei_intro_video_position == 'intro_video_content') : ?>
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
                                    // if ( is_single() ) {
                                    //     edubin_entry_footer();
                                    // }
                                ?>

                            </div>
                        </article>
                        <?php 

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                         ?>
                    </div>
                <?php endwhile; // End of the loop. ?>
                

                    <div class="col-lg-4 order-1 order-lg-2">
                        <?php get_template_part( 'sensei/tpl-part/single/single', 'sidebar');  ?>
                    </div>
     

                </div> <!-- row -->

                <?php if ($sensei_related_course_position == 'content') { ?>

                <div class="related-post-wrap related_course">
                    <?php edubin_sensei_related_course_content(); ?>
                </div>

                <?php } ?>

            </div> <!-- container -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();