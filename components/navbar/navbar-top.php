<?php 
/**
 * 
 * Default Top nav
 * 
 * @package wp-antares
 * 
 */?>

<nav class="navbar navbar-expand-md antares-bg-dark navbar-dark px-2" role="navigation">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>">Navbar</a>

    <div class="collapse navbar-collapse justify-content-end" id="navbarTopNavigation">
        <?php 
        if( has_nav_menu( 'primary' ) ):
            wp_nav_menu( 
                array( 
                    'theme_location'  => 'primary',
                    'container'       => 'ul',
                    'menu_class'      => 'navbar-nav',
                    'fallback_cb'     => false
                )
            );
        endif;
        ?>
    </div>
</nav>
