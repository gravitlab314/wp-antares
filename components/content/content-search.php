<?php 
/**
 * 
 * Content to a search page
 * 
 * @package wp-antares
 * 
 */

 /**
  * 
  * Create one term for a searching
  *
  * @since 1.0.0
  *
  */
$search = get_search_query();
$args   = array( 
    's' => $search
 );

// An object instance
$search_query = new WP_Query( $args );?>

<main class="content-search">
    <?php 
    if( $search_query->have_posts() ):

        while( $search_query->have_posts() ):

            $search_query->the_post();

            // card here 

        endwhile;
    else:

        print( '<h2 class="not-found-text">Sua pesquisa não mostrou resultado.</h2>' );

        print( '<p class="try-text">Tente pesquisar novamente, use sua imaginação :)</p>' );
        
    endif;
    ?>
</main>

<?php get_template_part( 'components/navbar/navbar', 'sidebar' );
