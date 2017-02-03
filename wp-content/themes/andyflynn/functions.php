<?php
// Enable Menus);

add_theme_support('menus');


// Add Widgets
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Social',
        'id' => 'social',
        'before_widget' => '<div class="social_widget">',
        'after_widget' => '</div>',
    ) );

    register_sidebar( array(
        'name' => 'Social Content',
        'id' => 'social-content',
        'before_widget' => '<div class="social_content">',
        'after_widget' => '</div>',
    ) );

    register_sidebar( array(
        'name' => 'Content',
        'id' => 'content',
        'before_widget' => '<div class="content_widget col-sm-4">',
        'after_widget' => '</div>',
    ) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );




function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );


if ( ! isset( $content_width ) )

   $content_width = 1100;


$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


function my_acf_google_map_api( $api ){
    
    $api['key'] = 'AIzaSyC5nbl_c8_-r7P3B2lHS7HmE0x4fS57dP8

content_copy
';
    
    return $api;
    
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

$args = array(
   'post_type' => 'tour_widget',
   'posts_per_page' => 2,
   'meta_query' => array(
        'key'           => 'tour_date',
        'compare'       => '>',
        'value'         => date('Y-m-d H:i:s'),
        'type'          => 'DATETIME'
   )
);


?>