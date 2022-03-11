<?php 
/**
 * 
 * Content to any temporal posts
 * 
 * @package wp-antares
 * 
 */?>

<main class="content-main">
    <?php 
    if( have_posts() ):

        while( have_posts() ):

            the_post();

            the_content();

        endwhile;

    endif;
    ?>
</main>
