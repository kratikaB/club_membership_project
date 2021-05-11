<?php

/**
 * guten-blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package guten_blog
 */


if ( !defined( 'GUTEN_BLOG_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'GUTEN_BLOG_VERSION', '1.0.0' );
}
if ( !function_exists( 'guten_blog_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function guten_blog_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on guten-blog, use a find and replace
         * to change 'guten-blog' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'guten-blog', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main-menu' => esc_html__( 'Main menu', 'guten-blog' ),
        ) );
        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ) );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'guten_blog_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
        add_editor_style( get_stylesheet_uri() );
    }

}
add_action( 'after_setup_theme', 'guten_blog_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function guten_blog_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'guten_blog_content_width', 640 );
}

add_action( 'after_setup_theme', 'guten_blog_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function guten_blog_widgets_init()
{
    for ( $i = 1 ;  $i < 5 ;  $i++ ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Widget', 'guten-blog' ) . " " . $i,
            'id'            => 'footer-' . $i . '',
            'description'   => esc_html__( 'Add widgets here.', 'guten-blog' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    register_sidebar( array(
        'name'          => esc_html__( 'Right Sidebar', 'guten-blog' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Left Sidebar', 'guten-blog' ),
        'id'            => 'left-sidebar',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'guten_blog_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function guten_blog_scripts()
{
    $font_family = get_theme_mod( 'font_family', 'Montserrat' );
    $heading_font_family = get_theme_mod( 'heading_font_family', 'Poppins' );
    $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Montserrat' ) );
    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello.css' );
    wp_enqueue_style( 'guten-blog-googlefonts', 'https://fonts.googleapis.com/css?family=' . esc_attr( $font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $heading_font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $site_identity_font_family ) . ':200,300,400,500,600,700,800,900|' );
    wp_enqueue_style(
        'guten-blog-style',
        get_stylesheet_uri(),
        array(),
        GUTEN_BLOG_VERSION
    );
    wp_style_add_data( 'guten-blog-style', 'rtl', 'replace' );
    wp_enqueue_script(
        'guten-blog-script',
        get_template_directory_uri() . '/js/script.js',
        array( 'jquery' ),
        GUTEN_BLOG_VERSION,
        true
    );
    wp_enqueue_script(
        'guten-blog-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        GUTEN_BLOG_VERSION,
        true
    );
    wp_enqueue_script(
        'guten-blog-skip-link-focus-fix',
        get_template_directory_uri() . '/js/skip-link-focus-fix.js',
        array(),
        GUTEN_BLOG_VERSION,
        true
    );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'guten_blog_scripts' );
// add async and defer attributes to enqueued scripts
function guten_blog_script_loader_tag( $tag, $handle, $src )
{
    
    if ( $handle === 'all-fontawesome' ) {
        if ( false === stripos( $tag, 'async' ) ) {
            $tag = str_replace( ' src', ' async="async" src', $tag );
        }
        if ( false === stripos( $tag, 'defer' ) ) {
            $tag = str_replace( '<script ', '<script defer ', $tag );
        }
    }
    
    return $tag;
}

add_filter(
    'script_loader_tag',
    'guten_blog_script_loader_tag',
    10,
    3
);
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/custom-controls/custom-control.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';
/**
 * Customizer changes css
 */
require get_template_directory() . '/inc/dynamic-css.php';
/**
 * Recommended Plugins
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';
// Breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';
/**
 * For Admin Page
 */

if ( is_admin() ) {
    require get_template_directory() . '/inc/getting-started/getting-started.php';
    require get_template_directory() . '/inc/about/about.php';
}

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
function guten_blog_excerpt( $limit )
{
    $excerpt = explode( ' ', get_the_excerpt(), $limit );
    if ( count( $excerpt ) >= $limit ) {
        array_pop( $excerpt );
    }
    $excerpt = implode( " ", $excerpt ) . '...';
    $excerpt = preg_replace( '`[[^]]*]`', '', $excerpt );
    return esc_html( $excerpt );
}

//Stop Gutentor redirect on activation
function gutentor_no_redirect_on_activation()
{
    update_option( '__gutentor_do_redirect', false );
}

add_action( 'init', 'gutentor_no_redirect_on_activation' );