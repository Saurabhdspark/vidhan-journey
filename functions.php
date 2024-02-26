<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );
        wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );
        wp_enqueue_style( 'font-awasome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style('flaticon', get_stylesheet_directory_uri() . '/font/flaticon.css', array());
        wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>', array(), '5.3.2' );

        wp_enqueue_script('jqury', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js', array());
        wp_enqueue_script('bootstrap-mi-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array());
        // wp_enqueue_script('plugin-js', get_stylesheet_directory_uri() . '/js/plugin.js', array());
        // wp_enqueue_script('priority-menu-js', get_stylesheet_directory_uri() . '/js/priority-menu.js', array());
        // wp_enqueue_script('main-1-js', get_stylesheet_directory_uri() . '/js/main-1.js', array());
        // wp_enqueue_script('swiper2', get_stylesheet_directory_uri() . '/js/custom-swiper2.js', array());
        
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
function enqueue_slicknav_scripts() {
    wp_enqueue_script('slicknav', 'https://cdn.jsdelivr.net/jquery.slicknav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_style('slicknav', 'https://cdn.jsdelivr.net/jquery.slicknav/1.0.10/slicknav.css', array(), '1.0.10');
}
add_action('wp_enqueue_scripts', 'enqueue_slicknav_scripts');
function enqueue_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');

function enqueue_slick_slider_scripts() {
    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', array(), '1.9.0');
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider_scripts');


function register_tour_packages_post_type() {
    $labels = array(
        'name'               => _x('Tour Packages', 'post type general name', 'your-text-domain'),
        'singular_name'      => _x('Tour Package', 'post type singular name', 'your-text-domain'),
        'menu_name'          => _x('Tour Packages', 'admin menu', 'your-text-domain'),
        'name_admin_bar'     => _x('Tour Package', 'add new on admin bar', 'your-text-domain'),
        'add_new'            => _x('Add New', 'tour package', 'your-text-domain'),
        'add_new_item'       => __('Add New Tour Package', 'your-text-domain'),
        'new_item'           => __('New Tour Package', 'your-text-domain'),
        'edit_item'          => __('Edit Tour Package', 'your-text-domain'),
        'view_item'          => __('View Tour Package', 'your-text-domain'),
        'all_items'          => __('All Tour Packages', 'your-text-domain'),
        'search_items'       => __('Search Tour Packages', 'your-text-domain'),
        'parent_item_colon'  => __('Parent Tour Packages:', 'your-text-domain'),
        'not_found'          => __('No tour packages found.', 'your-text-domain'),
        'not_found_in_trash' => __('No tour packages found in Trash.', 'your-text-domain')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'your-text-domain'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'tour-package'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'         => array('category', 'post_tag') // You can add custom taxonomies if needed
    );

    register_post_type('tour_packages', $args);
}
add_action('init', 'register_tour_packages_post_type');

// Plugin approach: Create a file named custom-post-types.php in your plugin folder



function create_car_post_type() {

  // Register the "cars" custom post type
  register_post_type( 'cars', [
    'labels' => [
      'name' => 'Cars',
      'singular_name' => 'Car',
      'menu_name' => 'Cars',
      'add_new' => 'Add New Car',
      'add_new_item' => 'Add New Car',
      'edit_item' => 'Edit Car',
      'new_item' => 'New Car',
      'view_item' => 'View Car',
      'search_items' => 'Search Cars',
      'not_found' => 'No Cars found',
      'not_found_in_trash' => 'No Cars found in Trash',
      'parent_item_colon' => 'Parent Car:',
      'all_items' => 'All Cars',
      'archives' => 'Car Archives',
      'attributes' => 'Car Attributes',
      'insert' => 'Insert',
      'uploaded_to_this_item' => 'Uploaded to this Car',
      'featured_image' => 'Featured Image',
      'set_featured_image' => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image' => 'Use featured image',
      'filter_items' => 'Filter Cars',
      'items_list_navigation' => 'Car navigation',
      'items_list' => 'Car list',
    ],
    'public' => true, // Make the post type publicly accessible
    'has_archive' => true, // Create an archive page for all cars
    'menu_position' => 5, // Set the menu position (lower numbers come first)
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'custom-fields',
      'comments',
      'revisions',
      'page-attributes',
    ],
    'taxonomies' => [ // Add support for custom taxonomies (optional)
      'category',
      'post_tag',
    ],
    'rewrite' => [ // Customize the permalink structure (optional)
      'slug' => 'cars',
      'with_front' => false,
    ],
  ] );
}

add_action( 'init', 'create_car_post_type' );



function register_custom_menu() {
    register_nav_menu('custom_menu', __('Custom Menu'));
}

add_action('after_setup_theme', 'register_custom_menu');


// Additional theme functions and code can go here...




// END ENQUEUE PARENT ACTION
?>