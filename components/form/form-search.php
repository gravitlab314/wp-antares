<?php 
/**
 * 
 * root path for all pages
 * 
 * @package wp-antares
 * 
 */?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s"/>
    <button type="submit" class="search-button"></button>
</form>
