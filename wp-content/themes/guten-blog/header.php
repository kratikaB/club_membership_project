<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package guten_blog
 */
?>
<!doctype html>
<html <?php 
language_attributes();
?>>

<head>
    <meta charset="<?php 
bloginfo( 'charset' );
?>">
    <meta name="description" content="<?php 
echo  esc_attr( get_bloginfo( 'description', 'display' ) ) ;
?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php 
wp_head();
?>
</head>

<?php 
$contact_button = get_theme_mod( 'hide_show_contact_responsive' );
$cta_button1 = get_theme_mod( 'hide_show_header1_responsive' );
$cta_button2 = get_theme_mod( 'hide_show_header2_responsive' );

if ( $contact_button || $cta_button1 || $cta_button2 ) {
    $class = 'cta';
} else {
    $class = '';
}

?>
<body <?php 
body_class( $class );
?>>
    <?php 
wp_body_open();
?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php 
esc_html_e( 'Skip to content', 'guten-blog' );
?></a>

        <header id="masthead" class="site-header" style="background-image:url('<?php 
header_image();
?>')" >
            <?php 
$layout = get_theme_mod( 'guten_blog_header_layouts', 'one' );
get_template_part( 'layouts/header/header-layout', 'one' );
?>
        </header><!-- #masthead -->
        
    </div>

    <div id="primary">