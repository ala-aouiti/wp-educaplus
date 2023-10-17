<?php
/**
 * Template part for displaying posts
 * @package Edubin
 * Version: 1.0.0
 */
    $post_id = edubin_get_id();
    $prefix = '_edubin_';

    $page_header_enable = get_post_meta($post_id, $prefix . 'page_header_enable', true);

    $header_variations = Edubin::setting( 'header_variations' );
    $blog_single_author_show = Edubin::setting( 'blog_single_author_show' );
    $blog_single_date_show = Edubin::setting( 'blog_single_date_show' );
    $blog_single_category_show = Edubin::setting( 'blog_single_category_show' );
    $blog_single_comment_show = Edubin::setting( 'blog_single_comment_show' );
    $blog_single_view_show = Edubin::setting( 'blog_single_view_show' );
    $sensei_intro_video_position = Edubin::setting( 'sensei_intro_video_position' );
    $intro_video = get_post_meta( get_the_ID(), 'edubin_sensei_video', 1 ); 
    
    
    // Post views
    if(function_exists('edubinGetPostViews')){ edubinSetPostViews(get_the_ID()); }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrapper">
      
          <?php if ($intro_video && $sensei_intro_video_position == 'intro_video_content') : 

            get_template_part( 'sensei/tpl-part/intro_video_content'); 

          elseif($intro_video && $sensei_intro_video_position == 'intro_video_sidebar') : ?>
            <!--   The video will be show on sidebar -->
            <?php else : ?>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
            <?php endif; ?>

        <?php endif; ?>

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
            <?php
                if ( is_single() ) {
                    edubin_entry_footer();
                }
            ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
