<?php

// disable rest api for non logged in users
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});

// Register scripts and styles
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
function add_theme_scripts() {
    // Register Styles
    wp_register_style( 'swiper-style', get_template_directory_uri() . '/public/assets/swiper/css/swiper.min.css', null, null, 'all' );
    wp_register_style( 'main-style', get_template_directory_uri() . '/public/assets/css/styles.css', null, null, 'all' );
    // Register Scripts
    wp_register_script( 'swiper-script', get_template_directory_uri() . '/public/assets/swiper/js/swiper.min.js', array ( 'jquery' ), null, true );
    wp_register_script( 'main-script', get_template_directory_uri() . '/public/assets/js/main.min.js', array ( 'jquery' ), null, true );
    // Include Styles
    wp_enqueue_style( 'swiper-style' );
    wp_enqueue_style( 'main-style' );
    // Include Scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'swiper-script' );
    wp_enqueue_script( 'main-script' );
}

// Add theme support
if ( function_exists( 'add_theme_support' ) ) {
    add_post_type_support( 'page', 'excerpt' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'excerpt' );
    add_theme_support( 'widgets' );
    // additional image sizes
    add_image_size( '1920x1080', 1920, 1080, array( 'center', 'center' ) );
}

// custom excerpt
function excerpt( $limit ) {
    $excerpt = explode( ' ', get_the_excerpt(), $limit );
    if ( count( $excerpt ) >= $limit ) {
        array_pop( $excerpt );
        $excerpt = implode( " ", $excerpt ) . '...';
    } else {
        $excerpt = implode( " ", $excerpt );
    } 
    $excerpt = preg_replace( '`\[[^\]]*\]`', '', $excerpt );

    return $excerpt;
}

// add svg file type to upload
add_action( 'upload_mimes', 'add_file_types_to_uploads' );
function add_file_types_to_uploads( $file_types ) {
    $new_filetypes = array();
    $new_filetypes[ 'svg' ] = 'image/svg+xml';
    $file_types = array_merge( $file_types, $new_filetypes );

    return $file_types;
}

// Register Sidebars
add_action( 'widgets_init', 'register_sidebars_top5' );
function register_sidebars_top5() {
    $args = array(
        'id'            => 'left_sidebar',
        'class'         => 'left_sidebar',
        'name'          => __( 'Left sidebar', 'text_domain' ),
        'description'   => __( 'left sidebar for widgets', 'text_domain' ),
    );
    register_sidebar( $args );
    $args = array(
        'id'            => 'right_sidebar',
        'class'         => 'right_sidebar',
        'name'          => __( 'Right sidebar', 'text_domain' ),
        'description'   => __( 'Right sidebar for widgets', 'text_domain' ),
    );
    register_sidebar( $args );
}

// filter for every relationship field
// edit acf relationship field to show more info on the left side
add_filter('acf/fields/relationship/result', 'amtwo_relationship_result', 10, 4);
function amtwo_relationship_result( $title, $post, $field, $post_id ) {
    // load a custom field from this $object and show it in the $result
    $file_filename = basename( get_attached_file( $post->ID ) );
    // append to title
    $title .= ' [' . $file_filename .  ']';
    // return
    return $title;
}

// acf options page
if( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page();
}

// include files
include get_parent_theme_file_path( '/includes/core/cpt.php' );

    
