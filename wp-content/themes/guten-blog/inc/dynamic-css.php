<?php
function guten_blog_dynamic_css() {
	wp_enqueue_style( 'guten-blog-style', get_stylesheet_uri(), array(), GUTEN_BLOG_VERSION );
        $site_title_size = absint( get_theme_mod( 'site_title_size', 20) );
        $logo_size = absint( $site_title_size * 3 );
        $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Frank Ruhl Libre') );
        $container_width = absint ( get_theme_mod('container_width', 1140) );


        $site_title_color = esc_attr( get_theme_mod( 'site_title_color_option', '#1F2D3D' ) );
        
        $primary_color = esc_attr( get_theme_mod( 'primary_color', '#52A5AD' ) );
        $secondary_color = esc_attr( get_theme_mod( 'secondary_color', '#52AD87' ) );
        $text_color = esc_attr( get_theme_mod( 'text_color', '#757575' ) );
        $accent_color = esc_attr( get_theme_mod( 'accent_color', '#5278AD' ) );
        $light_color = esc_attr( get_theme_mod( 'light_color', '#ffffff ' ) );
        $dark_color = esc_attr( get_theme_mod( 'dark_color', '#111111 ' ) );
        $grey_color = esc_attr( get_theme_mod( 'grey_color', '#999999 ' ) );

        $footer_font_family = esc_attr( get_theme_mod( 'footer_font_family', 'Frank Ruhl Libre' ) );
        $font_family = esc_attr( get_theme_mod( 'font_family', 'Poppins' ) );
        $font_size = esc_attr( get_theme_mod( 'font_size', '16px' ) );
        $body_font_weight = esc_attr( get_theme_mod( 'body_font_weight', 400 ) );
        $body_line_height = ( get_theme_mod( 'body_line_height', '1.5') );


        $heading_font_family = esc_attr( get_theme_mod( 'heading_font_family', 'Frank Ruhl Libre' ) );
        $heading_font_weight = esc_attr( get_theme_mod( 'heading_font_weight', 700 ) );
        $header_line_height = absint (  get_theme_mod( 'header_line_height', '1.5') );
        $default_size = array(
                '1' =>  32,
                '2' =>  28,
                '3' =>  24,
                '4' =>  21,
                '5' =>  15,
                '6' =>  12,
        );

	    for( $i = 1; $i <= 6 ; $i++ ) {
	    	$heading[$i] = absint( get_theme_mod( 'guten_blog_heading_' . $i . '_size', absint( $default_size[$i] ) ) );
	    }

        $dynamic_css = "

                :root {
                        --primary-color: $primary_color;
                        --secondary-color: $secondary_color;
                        --text-color: $text_color;
                        --accent-color: $accent_color;
                        --light-color: $light_color;
                        --dark-color: $dark_color;
                        --grey-color: $grey_color;
                }
                
                /* font family */
                body{ font: $body_font_weight"." $font_size"." $font_family; line-height: {$body_line_height};}

                h1{ font: $heading_font_weight {$heading[1]}"."px $heading_font_family }
                h2{ font: $heading_font_weight {$heading[2]}"."px $heading_font_family }
                h3{ font: $heading_font_weight {$heading[3]}"."px $heading_font_family }
                h4{ font: $heading_font_weight {$heading[4]}"."px $heading_font_family }
                h5{ font: $heading_font_weight {$heading[5]}"."px $heading_font_family }
                h6{ font: $heading_font_weight {$heading[6]}"."px $heading_font_family }

                h1,h2,h3,h4,h5,h6{
                        line-height: {$header_line_height};
                }


                /* site title size */
                .site-title a{color: $site_title_color;}
                .site-title{font-size: $site_title_size"."px; font-family: {$site_identity_font_family}; }

                header .custom-logo{ width: {$logo_size}"."px; }

                /* container width */
                .grid-container{max-width: {$container_width}"."px; }


                /* Footer widget font Colors */
                .site-footer .widget-title{font-family: $footer_font_family;}

                
        ";
        wp_add_inline_style( 'guten-blog-style', $dynamic_css );
}
add_action( 'wp_enqueue_scripts', 'guten_blog_dynamic_css' );
