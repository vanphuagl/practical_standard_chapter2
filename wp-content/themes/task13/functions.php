<?php
// top page website
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Top page website',
        'menu_title'    => 'Top page website',
        'menu_slug'     => 'Top_page-theme-settings',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));
}

// service page website

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Service page website',
        'menu_title'    => 'Service page website',
        'menu_slug'     => 'Service_page-theme-settings',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));
}

// add thumbnail post - featured image
if(!function_exists('agl_theme_setup'))
{
	function agl_theme_setup()
	{
		add_theme_support('automatic-feed-links');
		add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array(
            'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
        ) );
	}
	add_action('init','agl_theme_setup');
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// paginaion
function pagination_bar($custom_query = null, $paged = null) {
    global $wp_query;
    if($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $big = 999999999;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'prev_text'    => ' ',
        'next_text'    => ' ',
        'current' => max( 1, $paged),
        'prev_next'    => True,
        'total' => $total
    ) );
}
?>