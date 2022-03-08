<?php 
/**
 * 
 * Default Top nav
 * 
 * @package wp-antares
 * 
 */?>

<nav class="antares-navigation" role="navigation">

    <?php 
    if( has_nav_menu( 'primary' ) ):
        wp_nav_menu( 
            array( 
                'theme_location'  => 'primary',
                'container'       => 'ul',
                'menu_class'      => 'navbar-top',
                'fallback_cb'     => false
            )
        );
    endif;
    ?>
</nav>
