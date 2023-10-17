<?php
/**
 * The template for displaying 404 pages (not found)
 * @package Edubin
 * Version: 1.0.0
 */
    $error_404_img = Edubin::setting( 'error_404_img' );
    $error_404_heading = Edubin::setting( 'error_404_heading' );
    $error_404_text = Edubin::setting( 'error_404_text' );
    $error_404_link_text = Edubin::setting( 'error_404_link_text' );

get_header(); 

?>
<div class="container">
    <div class="row">
    	<div class="col-md-12">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <section class="error-404 not-found text-center">
                        <div class="page-content">
                            <?php if (!empty($error_404_img)): ?>
                                <img class="error-404-img" src="<?php echo esc_url($error_404_img); ?>" alt="<?php esc_attr_e( '404', 'edubin' );?>" />
                            <?php endif ?>
                      
                            <h2 class="error-404-heading"><?php echo esc_html($error_404_heading); ?></h2>
                            <p class="text-404"><?php echo esc_html($error_404_text);?></p>
                            <div class="go-home"><a href="<?php echo esc_url(get_home_url('/')); ?>" class="edubin-color"><?php echo esc_html($error_404_link_text);?></a></div>
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->
                </main><!-- #main -->
            </div><!-- #primary -->
    	</div>
    </div><!-- .row -->
</div>

<?php get_footer();
