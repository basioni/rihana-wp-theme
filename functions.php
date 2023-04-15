<?php


// Load CSS Stylesheets
function load_stylesheets()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');
	
	

	wp_register_style('fontawesomecss', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), 1, 'all');
	wp_enqueue_style('fontawesomecss');

		
	wp_register_style('woocommercestyle',  WP_PLUGIN_URL. '/woocommerce/assets/css/woocommerce.css', array(), 1, 'all');
	wp_enqueue_style('woocommercestyle');

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('style');
	
}
add_action('wp_enqueue_scripts' , 'load_stylesheets');

// Load Javascript
function load_javascripts()
{
	wp_register_script('jqueryjs', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', '', 1,1,1);
	wp_enqueue_script('jqueryjs');	


	wp_register_script('propperjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js', '', 1,1,1);
	wp_enqueue_script('propperjs');	

	wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', '', 1,1,1);
	wp_enqueue_script('bootstrapjs');

	wp_register_script('rihanascripts', get_template_directory_uri() . '/assets/js/rihanascripts.js', '', 1,1,1);
	wp_enqueue_script('rihanascripts');
	 //wp_enqueue_script( 'rihanascripts', get_template_directory_uri() . '/assets/js/mobile-menu-toggle.js', array('jquery') );
	
}
add_action('wp_enqueue_scripts' , 'load_javascripts');

function woocommmerce_style() {
   wp_enqueue_style('woocommerce_stylesheet', WP_PLUGIN_URL. '/woocommerce/assets/css/woocommerce.css',false,'1.0',"all");
}
add_action( 'wp_head', 'woocommmerce_style' );

//
function rihana_menus() {
	add_theme_support( 'nav-menus' );
	register_nav_menus(array(
		'primarymenu' => __('Main Menu'),
		'mobilemenu' => __('Mobile Menu'),
		));	
}

add_action( 'init', 'rihana_menus' );

// Add theme features
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');

// Add custom Logo support
function rihana_custom_logo_setup() {
	 $defaults = array(
	 'height'      => 70,
	 'width'       => 230,
	 'flex-height' => true,
	 'flex-width'  => true,
	 'header-text' => array( 'site-title', 'site-description' ),
	'unlink-homepage-logo' => true, 
	 );
	 add_theme_support( 'custom-logo', $defaults );

}
add_action( 'after_setup_theme', 'rihana_custom_logo_setup' );

// Add widgets
function createWidgets(){
	register_sidebar( array(
		'name' => 'Top Bar - Left Area' ,
		'id' => 'top-left-widget',
		'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Top Bar - Right Area' ,
		'id' => 'top-right-widget',
		'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Top Middle Center Area' ,
		'id' => 'top-middle-widget',
		'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Footer Top Area' ,
		'id' => 'top-footer',
		'before_widget' => '<div class="footer-top-bar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Footer 1' ,
		'id' => 'footer1',
		'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 >',
        'after_title'   => '</h3>',
	));
	register_sidebar( array(
	'name' => 'Footer 2' ,
	'id' => 'footer2',
		'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 >',
        'after_title'   => '</h3>',
	));
	register_sidebar( array(
	'name' => 'Footer 3' ,
	'id' => 'footer3',
		'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 >',
        'after_title'   => '</h3>',
	));
	register_sidebar( array(
	'name' => 'Footer 4' ,
	'id' => 'footer4',
		'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 >',
        'after_title'   => '</h3>',
	));
		
}
add_action('widgets_init' , 'createWidgets');

// Modify Read More Link
function modify_read_more_link() {
    return '<a class="more-link" href="'. get_permalink() .'">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


// Load Theme Customizer
require get_stylesheet_directory().'/classes/class-rihana-customizer.php';
new Rihana_Customizer();

// Apply Rihana Theme Customizer options
function rihana_customize_css(){
	echo '<style type="text/css">
	:root{
		--rihana-main-color: '. get_theme_mod('rihana-main-color') .' ;
		--rihana-headings-text-fontfamily: '. get_theme_mod('rihana-typography-headings-fontfamily') .' ;
		--rihana-body-text-fontfamily : '. get_theme_mod('rihana-typography-body-fontfamily') .' ;
		--rihana-body-text-size	 : '. get_theme_mod('rihana-typography-body-size') .'px ;
	}

	h1 { font-size: '. get_theme_mod('rihana-typography-hone-size') .'px; }
	h2 { font-size:  '. get_theme_mod('rihana-typography-htwo-size') .'px; }
	h3 { font-size:  '. get_theme_mod('rihana-typography-hthree-size') .'px; }
	h4 { font-size:  '. get_theme_mod('rihana-typography-hfour-size') .'px; }
	h5 { font-size:  '. get_theme_mod('rihana-typography-hfive-size') .'px; }
	h6 { font-size:  '. get_theme_mod('rihana-typography-hsix-size') .'px; }
	 </style>';
}
add_action('wp_head', 'rihana_customize_css');

/*************************** Woocommerce Functions ****************************/
// Unhook Woocommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Hook Rihana woocommerce wrappers
function rihana_theme_wrapper_start() {
    echo '<section id="main">';
}
add_action('woocommerce_before_main_content', 'rihana_theme_wrapper_start', 10);


function rihana_theme_wrapper_end() {
    echo '</section>';
}
add_action('woocommerce_after_main_content', 'rihana_theme_wrapper_end', 10);

// add Woocommerce support
function rihana_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'rihana_add_woocommerce_support' );

// Add theme support
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
