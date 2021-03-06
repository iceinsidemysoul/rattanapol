<?php
//theme name: Rattanapol
add_action('wp_enqueue_scripts',"rattanapol_resources");
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
add_action( 'widgets_init', 'my_register_sidebars' );

add_theme_support( 'post-thumbnails' );

add_image_size('custom-size',200,150);

//navigation menus

register_nav_menus(array(
	'primary'=> __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
	'sidebar'=> __( 'Sidebar Menu'),
	
));

function rattanapol_resources(){
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_style('bootstrap',get_template_directory_uri() .('/css/bootstrap-3.3.7-dist/css/bootstrap.css'));
}
function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'right',
            'name'          => __( 'right Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
?>