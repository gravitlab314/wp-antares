<?php 
/**
 * 
 * Content to display a 404 error
 * 
 * @package wp-antares
 * 
 */

/**
 * 
 * Create an query term with the URI request
 * 
 * @since 1.0.0
 */
$link_return   = array( '/', '-', 'index.php' );
$the_link      = str_replace( $link_return, ' ', $_SERVER["REQUEST_URI"] );
$args          = array( 's' => $the_link );
$search_query  = new WP_Query( $args );?>

<main class="content-error">
    <div class="line-up">
        <h1 class="title-error">Que pena... Este link não existe ou foi removido.</h1>
        <p class="text-error">Mas não desanime, continue navegando pelo site!</p>
    </div>
    <div class="line-down">
        <?php 
        if( $search_query->have_posts() ):

            print( '<h2 class="title-related">Aqui vai algumas sujestões para você:</h2>' );
            
            while( $search_query->have_posts() ):

                $search_query->the_post();

                $search_query->the_content();

            endwhile;
        
        endif;
        ?>
    </div>
</main>

<?php get_template_part( 'components/navbar/navbar', 'sidebar' );
