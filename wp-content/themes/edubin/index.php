<?php
/**
 * The main template file
 * @package Edubin
 * Version: 1.0.0
 */

get_header(); 

$blog_sidebar = Edubin::setting( 'blog_sidebar' );
$blog_sidebar_width = Edubin::setting( 'blog_sidebar_width' );
$blog_sidebar_gap = Edubin::setting( 'blog_sidebar_gap' );
$blog_sidebar_sticky = Edubin::setting( 'blog_sidebar_sticky' );

$sidebar_sticky_on_off = ( $blog_sidebar_sticky ? 'do_sticky' : '');

$content_area_col = ( $blog_sidebar_width == '4' ? '8' : '9');

// Post views
if(function_exists('edubinGetPostViews')){ edubinSetPostViews(get_the_ID()); }

?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="row tpc_g_<?php echo esc_attr($blog_sidebar_gap); ?>">

                <?php if ( 'sidebarleft' == $blog_sidebar ): ?>
                    <div class="col-md-<?php echo esc_attr( $blog_sidebar_width ); ?>">
                       <div class="sidebar-wrap <?php echo esc_attr( $sidebar_sticky_on_off ); ?>">
                            <?php get_sidebar(); ?>
                        </div> 
                    </div> 
                <?php endif; ?>

                <?php if ( 'sidebarnone' == $blog_sidebar ): ?>
                    <div class="col-md-12">
                <?php else: ?>
                        <div class="<?php if (is_active_sidebar( 'sidebar-1' )):  echo 'col-md-'.$content_area_col.' content-wrapper'; else: echo 'col-md-12 content-wrapper'; endif;?>">
                <?php endif; ?>

                    <?php
                    if ( have_posts() ) :

                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/post/content', get_post_type() );
                            
                        endwhile;
                        
                        the_posts_pagination( array(
                            'prev_text' => '<i class="flaticon-back" aria-hidden="true"></i>',
                            'next_text' => '<i class="flaticon-next" aria-hidden="true"></i>',
                        ) );

                    else :

                        get_template_part( 'template-parts/post/content', 'none' );
                        
                    endif;
                    ?>
                </div><!-- .col-md-8 -->
                
                <?php if ( 'sidebarright' == $blog_sidebar ): ?>
                    <div class="col-md-<?php echo esc_attr( $blog_sidebar_width); ?>">
                       <div class="sidebar-wrap <?php echo esc_attr( $sidebar_sticky_on_off ); ?>">
                            <?php get_sidebar(); ?>
                        </div> 
                    </div> 

                <?php elseif( 'sidebarnone' == $blog_sidebar ): ?>

                <?php else : ?>
                    <div class="col-md-<?php echo esc_attr( $blog_sidebar_width); ?>">
                       <div class="sidebar-wrap <?php echo esc_attr( $sidebar_sticky_on_off ); ?>">
                            <?php get_sidebar(); ?>
                        </div> 
                    </div>
                <?php endif; ?>

                </div><!-- .row -->
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer();