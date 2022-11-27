<?php



function guido_plomberie_assets()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false, true);
    wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '1.0', true );

    wp_enqueue_style('guido-plomberie-slick-css', get_template_directory_uri() .'/css/slick/slick.css', array(), '1.0', true);
    wp_enqueue_style('guido-plomberie-slick-theme-css', get_template_directory_uri() .'/css/slick/slick-theme.css', array(), '1.0', true);
    wp_enqueue_script( 'guido-plomberie-jquery-js', get_template_directory_uri() .'/js/slick/slick.js', array(), '1.0', true );
    wp_enqueue_script( 'guido-plomberie-slick-min-js', get_template_directory_uri() .'/js/slick/slick.min.js', array(), '1.0', true );   

    wp_enqueue_script( 'Menu_burger', '/wp-content/themes/guido-plomberie/js/menu_burger.js', array(), '1.0', true );
    
    wp_enqueue_script( 'guido-plomberie-bootstrap-js', get_template_directory_uri() . '/js/bootstrap-5.0.2-dist/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_style('guido-plomberie-bootstrap-css', get_template_directory_uri() . '/js/bootstrap-5.0.2-dist/css/bootstrap.min.css', array(), _S_VERSION, false);

    wp_enqueue_style( 'guido-plomberie-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'guido-plomberie-style', 'rtl', 'replace' );

    wp_enqueue_style('guido-plomberie-bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), _S_VERSION, false);
    wp_enqueue_style('guido-plomberie-glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), _S_VERSION, false);

    wp_enqueue_script( 'guido-plomberie-purecounter_vanilla', get_template_directory_uri() .'/assets/vendor/purecounter/purecounter_vanilla.js', array(), '1.0', true );
    wp_enqueue_script( 'guido-plomberie-bootstrap-bundle', get_template_directory_uri() .'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true );
    wp_enqueue_script( 'guido-plomberie-glightbox-bundle', get_template_directory_uri() .'/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0', true );
    wp_enqueue_script( 'guido-plomberie-validate', get_template_directory_uri() .'/assets/vendor/php-email-form/validate.js', array(), '1.0', true );
    wp_enqueue_script( 'guido-plomberie-main', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) 
    {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'guido_plomberie_assets');

//####show_admin_bar(false);

function guido_plomberie_supports()
{
    add_theme_support('title-tag');
    add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption','style','script',));
    add_theme_support('custom-background',apply_filters('arthes_custom_background_args',array('default-color' => 'ffffff','default-image' => '',)));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array('height'=> 250,'width'=> 250,'flex-width'=> true,'flex-height'=> true,));
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support('menus');
    register_nav_menus( array('main' => 'Menu Principal','footer' => 'Bas de page',) );
    add_image_size('post-thumbnail');
}
add_action('after_setup_theme', 'guido_plomberie_supports');

function guido_plomberie_title_separator()
{
    return '|';
}
add_filter('document_title_separator', 'guido_plomberie_title_separator');

function guido_plomberie_widgets_init() 
{
    register_sidebar(
		array( 'name'          => esc_html__( 'Sidebar', 'guido-plomberie' ),
                'id'            => 'sidebar-1',
                'description'   => esc_html__( 'Add widgets here.', 'guido-plomberie' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
    );

    register_sidebar(
		array( 'name'          => esc_html__( 'Footer_1', 'guido-plomberie' ),
                'id'            => 'footer-1',
                'description'   => esc_html__( 'Add widgets here.', 'guido-plomberie' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
    );

    register_sidebar(
		array( 'name'          => esc_html__( 'Footer_2', 'guido-plomberie' ),
                'id'            => 'footer-2',
                'description'   => esc_html__( 'Add widgets here.', 'guido-plomberie' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
    );

    register_sidebar(
		array( 'name'          => esc_html__( 'Footer_3', 'guido-plomberie' ),
                'id'            => 'footer-3',
                'description'   => esc_html__( 'Add widgets here.', 'guido-plomberie' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
    );

    register_sidebar(
		array( 'name'          => esc_html__( 'Footer_4', 'guido-plomberie' ),
                'id'            => 'footer-4',
                'description'   => esc_html__( 'Add widgets here.', 'guido-plomberie' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
    );

}
add_action( 'widgets_init', 'guido_plomberie_widgets_init' );

function font_family_GG(){
    echo '
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">';
}
add_action('wp_enqueue_scripts', 'font_family_GG');

function cdn_asset_font_awesome(){
    echo '
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
}
add_action('wp_enqueue_scripts', 'cdn_asset_font_awesome');

//## Files customize Login page
// function custom_login_page() 
// {
//     echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/login-style-perso.css" />';
// }
//add_action('login_head', 'custom_login_page');

//##Customize URL logo login
// function login_logo_url_page() {
//     return 'https://ludi.beta-base-sud.com/wp-login.php';
//     }
// add_filter( 'login_headerurl', 'login_logo_url_page' );

//##Customize name LOGO login
// function login_logo_url_title_page() {
//     return get_bloginfo( 'name' );
//     }
// add_filter( 'login_headertext', 'login_logo_url_title_page' );

