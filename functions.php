<?php


/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );

// Allow page excerpt
add_post_type_support( 'page', 'excerpt' );

if(function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'main-menu' => 'Menu principal',
            'main-moviles' => 'Menu móviles'
        )
    );
}

add_filter('wp_get_attachment_image_attributes', function($attr, $attachment, $size){
    unset($attr['src']); // elimina el src para lazy load
    return $attr;
}, 10, 3);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

// Widgets
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Footer Widget 1', 'wpb' ),
        'id' => 'widget-1',
        'description' => __( 'Widget del footer', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title fw-bold text-uppercase">',
        'after_title' => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'wpb' ),
        'id' => 'widget-2',
        'description' => __( 'Widget del footer', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title fw-bold text-uppercase">',
        'after_title' => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 3', 'wpb' ),
        'id' => 'widget-3',
        'description' => __( 'Widget del footer', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title fw-bold text-uppercase">',
        'after_title' => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 4', 'wpb' ),
        'id' => 'widget-4',
        'description' => __( 'Widget del footer', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title fw-bold text-uppercase">',
        'after_title' => '</h6>',
    ) );
}
 
add_action( 'widgets_init', 'wpb_widgets_init' );

// Soporte de imágenes
add_theme_support( 'post-thumbnails' );

// Post
add_image_size( '622x335', 622, 335, true);
add_image_size( '415x220', 415, 220, true);
add_image_size( '600x399', 600, 399, true);
add_image_size( '1296x540', 1296, 540, true);

// Is dev?
define('IS_DEV', false );