<?php 
/**
 * 
 * Content to any temporal posts
 * 
 * @package wp-antares
 * 
 */?>

<main class="content-posts">
    <?php 
    if( have_posts() ):

        while( have_posts() ):

            the_post();?>

            <a class="post-link" href="<?php echo esc_url( get_permalink() );?>" target="_self">
                <li class="post-item">
                    
                    <?php wp_antares_thumbnail();?>

                    <h3 class="post-title"><?php echo get_the_title();?></h3>
                    <p class="post-describes">
                        <?php echo get_the_excerpt();?>
                    </p>
                </li>
            </a>
            
        <?php 
        endwhile;

    endif;
    ?>
</main>

<?php get_template_part( 'components/navbar/navbar', 'sidebar' );