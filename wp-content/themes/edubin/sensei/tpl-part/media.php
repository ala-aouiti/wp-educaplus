   <?php 

    $sensei_intor_video_image = Edubin::setting( 'sensei_intor_video_image' );
    $sensei_custom_placeholder_image = Edubin::setting( 'sensei_custom_placeholder_image' );

    $sensei_archive_image_size = Edubin::setting( 'sensei_archive_image_size' );

    $final_sensei_archive_image_size = ( $sensei_archive_image_size ? $sensei_archive_image_size : 'medium_large' ); // returns medium_large

    $sensei_intro_video = get_post_meta( get_the_ID(), 'edubin_sensei_video', 1 ); 

    $placholder_img = plugins_url('/edubin-core/assets/img/course-ph.png'); 

        if(!empty( $sensei_intro_video) && $sensei_intor_video_image) : ?>

        <div class="intro-video-sidebar tpc_mb_0">
            <div class="intro-video" style="background-image:url(<?php if( has_post_thumbnail() ) : echo esc_url(get_the_post_thumbnail_url(get_the_ID(), $final_sensei_archive_image_size)); elseif($sensei_custom_placeholder_image) :  echo esc_url($sensei_custom_placeholder_image); else: echo esc_url($placholder_img); endif; ?>)"> <a href="<?php echo esc_url( $sensei_intro_video ); ?>" class="edubin-popup-videos bla-2"><span class="fas fa-play"></span></a>
            </div>
        </div><!--   // End Intro video -->

        <?php elseif ( has_post_thumbnail() ):?>

              <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( $final_sensei_archive_image_size ); ?>
              </a><!--   // End image -->

        <?php elseif(!empty($sensei_custom_placeholder_image)) : ?>

            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url($sensei_custom_placeholder_image); ?>" alt="<?php the_title(); ?>">
            </a><!--   // End placeholder image -->

        <?php else : ?>

            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url($placholder_img); ?>" alt="<?php the_title(); ?>">
            </a><!--   // Fallback placeholder image -->

        <?php endif; ?>