<?php
//theme name: Rattanapol
function rattanapol_resources(){
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_style('bootstrap',get_template_directory_uri() .('/css/bootstrap-3.3.7-dist/css/bootstrap.css'));
}
add_action('wp_enqueue_scripts',"rattanapol_resources");
add_theme_support( 'post-thumbnails' );
add_image_size('custom-size',200,150);
//navigation menus
register_nav_menus(array(
	'primary'=> __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
	'sidebar'=> __( 'Sidebar Menu'),
	
));

add_action( 'widgets_init', 'my_register_sidebars' );
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
	register_sidebar(
        array(
            'id'            => 'left',
            'name'          => __( 'left Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
?>