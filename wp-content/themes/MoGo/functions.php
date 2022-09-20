<?php


function mogo_assets() {
    /*Styles*/
    
    /* Main css styles */
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'style.scss', get_template_directory_uri() . '/assets/css/style.scss' );

    /* Bootstrap styles */
    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );

    /*Scripts*/

    /* Font Awesome */
    wp_register_script( 'Font_Awesome', 'https://kit.fontawesome.com/f5f6f136a6.js' , '', '', true );
    wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' );
    wp_enqueue_style('Font_Awesome');

    /* jQuery */
    wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( 'jQuery' );

    wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' );
    wp_enqueue_script( 'popper' );

    wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'bootstrap' );
}

add_action( 'wp_enqueue_scripts', 'mogo_assets');

show_admin_bar(true);

add_theme_support('post-thumbnails', array( 'team' ));
add_theme_support('title-tag');
add_theme_support('title');
add_theme_support('editor');
add_theme_support('thumbnails');
add_theme_support('post-thumbnails');

 
/* CPT Team */
function create_post_type() {
  
    register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'excerpt'),
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'show_in_rest' => true,
  
        )
    );
}

add_action( 'init', 'create_post_type' );


/* CPT Blog */

function create_post_type_blog() {
  
    register_post_type( 'blog',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Blogs' ),
                'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'excerpt'),
            'has_archive' => true,
            'rewrite' => array('slug' => 'blog'),
            'show_in_rest' => true,
  
        )
    );
}

add_action( 'init', 'create_post_type_blog' );



/*
function create_team_taxonomy() {
    register_taxonomy('team','team',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Team', 'taxonomy general name' ),
            'singular_name' => _x( 'Team', 'taxonomy singular name' ),
            'menu_name' => __( 'Team' ),
            'all_items' => __( 'All Team' ),
            'edit_item' => __( 'Edit Team' ), 
            'update_item' => __( 'Update Team' ),
            'add_new_item' => __( 'Add Team' ),
            'new_item_name' => __( 'New Team' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    ));
    
}
add_action( 'init', 'create_team_taxonomy', 0 );
*/