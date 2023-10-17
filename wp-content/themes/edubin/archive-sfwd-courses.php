<?php
/**
 * The template for displaying archive pages
 * @package Edubin
 * Version: 1.0.0
 */

get_header(); 

$ld_course_archive_style = Edubin::setting( 'ld_course_archive_style' ); 

?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="row">

                <?php
                if ( have_posts() ) : ?>
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
        
                        if ( $ld_course_archive_style == '6' ) :        
                          get_template_part( 'learndash/tpl-part/layout', '6'); 
                       elseif ( $ld_course_archive_style == '5' ) :        
                          get_template_part( 'learndash/tpl-part/layout', '5'); 
                       elseif ( $ld_course_archive_style == '4' ) :        
                          get_template_part( 'learndash/tpl-part/layout', '4'); 
                       elseif ( $ld_course_archive_style == '3' ) :
                          get_template_part( 'learndash/tpl-part/layout', '3'); 
                       elseif ( $ld_course_archive_style == '2' ) :
                          get_template_part( 'learndash/tpl-part/layout', '2');
                       else :       
                          get_template_part( 'learndash/tpl-part/layout', '1');        
                       endif; //End course style

                    endwhile;
        
                    the_posts_pagination( array(
                        'prev_text' => '<i class="flaticon-back" aria-hidden="true"></i>',
                        'next_text' => '<i class="flaticon-next" aria-hidden="true"></i>',
                    ) );
        
                else :
        
                    get_template_part( 'template-parts/post/content', 'none' );
        
                endif; ?>


            </div><!-- .row -->
        </div>  
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
