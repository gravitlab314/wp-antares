<?php 
/**
 * 
 * Default sidebar
 * 
 * @package wp-antares
 * 
 */?>

<div class="antares-sidebar" role="complementary">
    <div class="antares-search">
        <?php get_template_part( 'components/form/form', 'search' );?>
    </div>
    <div class="antares-categories">
        <?php 
        if( has_nav_menu( 'categories' ) ):

            print( '<h3 class="title-categories">Assuntos relevantes</h3>' );

            wp_nav_menu( 
                array( 
                    'theme_location'  => 'categories',
                    'container'       => 'ul',
                    'container_class' => 'categories-menu',
                    'fallback_cb'     => false
                 )
             );

        endif;
        ?>
    </div>
</div>
