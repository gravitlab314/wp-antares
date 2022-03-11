<?php 
/**
 * 
 * Content to a singular temporal post
 * 
 * @package wp-antares
 * 
 */?>

<main class="content-singular">
    <?php 
    if( have_posts() ):

        while( have_posts() ):

            the_post();

            the_content();

            /**
             * 
             * The comments section
             * 
             * @since 1.0.0
             * 
             */
            
            if( comments_open() || get_comments_number() ):

                get_template_part( 'components/comments/comments', 'main' );

            endif;

        endwhile;
    
    endif;
    ?>
</main>

<?php get_template_part( 'components/navbar/navbar', 'sidebar' );
