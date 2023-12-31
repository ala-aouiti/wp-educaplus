<?php
    /**
     * Displays header variations 
     *
     * @package Edubin
     * Version: 1.0.0
     */
?>
    <?php 

        $post_id = edubin_get_id();
        $prefix = '_edubin_';
        $header_variations = Edubin::setting( 'header_variations' );
        $sticky_header_enable = Edubin::setting( 'sticky_header_enable' );
        $top_cart_enable = Edubin::setting( 'top_cart_enable' );
        $top_search_enable = Edubin::setting( 'top_search_enable' );
        // CMB2
        $page_header_enable = get_post_meta($post_id, $prefix . 'page_header_enable', true);
        $page_header_img = get_post_meta($post_id, $prefix . 'header_img', true);
    ?>    

    <div class="header-menu <?php if('1' == $sticky_header_enable): echo esc_attr( 'sticky-active' ); endif; ?>">
        <div class="header-area">

            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <div class="navigation-section">
                    <div class="mobile-menu-wrapper">
                        <span class="mobile-menu-icon"><i class="fas fa-bars"></i></span>
                    </div>
                    <nav id="site-navigation" class="" role="navigation">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'main-navigation',
                            'menu_class'     => 'main-menu',
                        ) ); 
                        ?>
                    </nav>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
