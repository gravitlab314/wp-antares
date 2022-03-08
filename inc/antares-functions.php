<?php 
/**
 * 
 * Any functions for a perfectly template
 * 
 * @package wp-antares
 * 
 */

/**
 * 
 * Headers display function
 * 
 * @since 1.0.0
 * 
 */

function wp_antares_display_header(){

    /**
     * 
     * Check which header to show
     * 
     */
    if( is_home() || is_tag() || is_archive() || is_category() || is_author() || is_search() || is_404() || is_singular() ):

        /**
         * 
         * Call the header
         * 
         */
        get_template_part( 'components/header/header', 'home' );

    elseif( is_frontpage() ):

        /**
         * 
         * Call the header
         * 
         */
        get_template_part( 'components/header/header', 'main' );

    elseif( is_page() ):

        /**
         * 
         * Call the header
         * 
         */
        get_template_part( 'components/header/header', 'page' );

    endif;
}

/**
 * 
 * Contents display function
 * 
 * @since 1.0.0
 * 
 */

function wp_antares_display_content(){
    /**
     * 
     * Check which content to show
     * 
     */

    if( is_home() || is_tag() || is_archive() || is_category() || is_author() ):

        /**
         * 
         * Call the content
         * 
         */

        get_template_part( 'components/content/content', 'post' );

    elseif( is_singular() ):

        /**
         * 
         * Call the content
         * 
         */

        get_template_part( 'components/content/content', 'singular' );

    elseif( is_front_page() || is_page() ):

        /**
         * 
         * Call the content
         * 
         */

        get_template_part( 'components/content/content', 'main' );

    elseif( is_search() ):

        /**
         * 
         * Call the content
         * 
         */

        get_template_part( 'components/content/content', 'search' );

    elseif( is_404() ):

        /**
         * 
         * Call the content
         * 
         */

        get_template_part( 'components/content/content', 'error' );

    endif;
}

/**
 * 
 * Footers display function
 * 
 * @package wp-antares
 * 
 */

function wp_antares_display_footer(){

    /**
     * 
     * Call the footer
     * 
     */
    get_template_part( 'components/footer/footer', 'main' );

}

/**
 * 
 * Add a thumbnail image
 * 
 */

function wp_antares_thumbnail(){

    if( has_post_thumbnail() ):

        the_post_thumbnail( 'medium', array( 'class' => 'thumb-img' ) );

    else:

        print( '<img src="'. get_bloginfo( 'template_url' ). '/assets/banners/default-image.png" class="thumb-img">' );

    endif;
}

/**
 * 
 * Display footer menus
 * 
 */

function wp_antares_footer_menus(){

    if( has_nav_menu( 'footer_first' ) ):

        print( '<h4 class="title-menu-footer">Sobre Nós</h4>' );

        print( '<div class="first-menu">' );

        wp_nav_menu( 
            array( 
                'theme_location' => 'footer_first',
                'container'      => 'ul',
                'menu_class'     => 'footer-first',
                'fallback_cb'    => false
             )
         );

        print( '</div>' );

    elseif( has_nav_menu( 'footer_second' ) ):

        print( '<h4 class="title-menu-footer">Navegue por aqui</h4>' );

        print( '<div class="second-menu">' );

        wp_nav_menu( 
            array( 
                'theme_location' => 'footer_second',
                'container'      => 'ul',
                'menu_class'     => 'footer-second',
                'fallback_cb'    => false
             )
         );

        print( '</div>' );

    elseif( has_nav_menu( 'footer_third' ) ):

        print( '<h4 class="title-menu-footer">Assuntos relevantes</h4>' );

        print( '<div class="third-menu">' );

        wp_nav_menu( 
            array( 
                'theme_location' => 'footer_third',
                'container'      => 'ul',
                'menu_class'     => 'footer-third',
                'fallback_cb'    => false
             )
         );

        print( '</div>' );

    endif;
}
