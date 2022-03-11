<?php 
/**
 * 
 * All theme supports
 * 
 * @package wp-antares
 * 
 */

/**
 * 
 * Remove the Welcome message to admin Panel.
 * 
 */

remove_action( 'welcome_panel', 'wp_welcome_panel' );

/**
 * 
 * Call and disable the styles and scripts files
 * 
 */

function wp_antares_scripts(){

    /**
     * 
     * Deregister scripts will not use
     * 
     * @since 1.0.0
     * 
     */
    wp_deregister_script( 'jquery' );

    wp_deregister_script( 'jquery-migrate' );

    /**
     * 
     * Call the CSS and javascript theme files
     * 
     * @since 1.0.0
     */

    wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), '5.1.3', 'all' );
    
    wp_enqueue_style( 'index-css', get_template_directory_uri(). '/assets/css/index.min.css', array(), '1.0.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'wp_antares_scripts' );

/**
 * 
 * Clear the wp_head function
 * 
 */

function wp_antares_clean_wp_head(){
    remove_action( 'wp_head', 'rsd_link' );

    remove_action( 'wp_head', 'wlwmanifest_link' );

    remove_action( 'wp_head', 'index_rel_link' );

    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    remove_action( 'wp_head', 'wp_generator' );

}

add_action( 'init', 'wp_antares_clean_wp_head' );

/**
 * 
 * Remove the WordPress version to a RSS feed
 * 
 */

function wp_antares_no_version(){
    return;
}

add_filter( 'the_generator', 'wp_antares_no_version' );

/**
 * 
 * Remove the CSS in the widget in recent comments
 * 
 */

function wp_antares_remove_recent_comment_widget_style(){
    if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

add_filter( 'wp_head', 'wp_antares_remove_recent_comment_widget_style', 1);

/**
 * 
 * Remove the css code in the comments
 * 
 */

function wp_antares_remove_style_in_recent_comment_widget(){
    global $wp_widget_factory;

	if ( isset( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'] ) ) {
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	}
}

add_action( 'wp_head', 'wp_antares_remove_style_in_recent_comment_widget', 1 );

/**
 * 
 * Remove the CSS to galery
 * 
 */

function wp_antares_no_css_to_galery(){
    return;
}

add_filter( 'use_default_gallery_style', 'wp_antares_no_css_to_galery' );

/**
 * 
 * Register menus
 * 
 */

function wp_antares_menus(){

    register_nav_menus( 
        array( 
            'primary'       => __( 'Menu Principal', 'wp-antares' ),
            'catedories'    => __( 'Menu Lateral', 'wp-antares' ),
            'footer_first'  => __( 'Rodapé parte 1', 'wp-antares' ),
            'footer_second' => __( 'Rodapé parte 2', 'wp-antares' ),
            'footer_third'  => __( 'Rodapé parte 3', 'wp-antares' )
         )
     );
}

add_action( 'after_setup_theme', 'wp_antares_menus' );

/**
 * 
 * Add any class to li item menu
 * 
 */

function wp_antares_li_class( $classes, $item, $args ){

    $classes[] = 'nav-item';

    return $classes;

}

add_filter( 'nav_menu_css_class', 'wp_antares_li_class', 1, 3 );

/**
 * 
 * Add any class to a tag in menus
 * 
 */

function wp_antares_anchor_class( $atts, $item, $args ){

    $atts[ 'class' ] = 'nav-link';

    return $atts;

}

add_filter( 'nav_menu_link_attributes', 'wp_antares_anchor_class', 10, 3 );
