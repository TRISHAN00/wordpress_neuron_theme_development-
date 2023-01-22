<?php 

/*
    My Theme functions
*/

// nuron_theme_files CSS/JS
function website_theme_files () {
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');wp_enqueue_style( 'website-style', get_stylesheet_uri());


    // JS
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' , array('jquery'), '1.0', true);
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js' , array('jquery'), '1.0', true);
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js' , array('jquery'), '1.0', true);
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js' , array('jquery'), '1.0', true);
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.js' , array('jquery'), '1.0', true);
    wp_enqueue_script( 'ajaxchimp-config', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js' , array('jquery'), '1.0', true);
    wp_enqueue_script( 'website-script', get_template_directory_uri() . '/assets/js/script.js' , array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'website_theme_files');


// theme support functions
function neuron_theme_supports() {
    // multi language support
    load_theme_textdomain( 'kdkd', get_template_directory() . '/languages' );

    // automatic generate feed links
    add_theme_support( 'automatic-feed-links' );

    // header html title
    add_theme_support( 'title-tag' );

    // post thumbnail support
    add_theme_support( 'post-thumbnails' );

    // nav menu register
    register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'neuron'),
		)
	);

    // HTML 5 support
    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


    // LOGO ADD SUPPORT
    add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'neuron_theme_supports');

// custom post register
add_action('init', 'neuron_theme_custom_register');
function neuron_theme_custom_register() {
    register_post_type('slide', 
    array(
        'labels' => array(
            'name' => __('Slides'),
            'singular_name' => __('Slide')
        ),
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
        'public' => false,
        'show_ui' => true
    ));
};