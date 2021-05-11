<?php
	
	/*---------------------------First highlight color-------------------*/
	$fitness_gymhouse_theme_color_1 = get_theme_mod('fitness_gymhouse_theme_color_1');
	$fitness_gymhouse_custom_css = '';

	if($fitness_gymhouse_theme_color_1 != false){
		$fitness_gymhouse_custom_css .='.top-header, .slide-button a, .slide-button a, .about-btn a, button, input[type="button"], input[type="submit"],.site-info, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .next.page-numbers, #sidebox .tagcloud a,.site-footer .tagcloud a,.prev.page-numbers, .prev.page-numbers, .next.page-numbers, .next.page-numbers, a.page-numbers,.scrollup i, .post-navigation .nav-next a, .post-navigation .nav-previous a,.tags p a,.comment-reply-link, #sidebox .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebox .widget_price_filter .ui-slider .ui-slider-handle, .site-footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, .site-footer .widget_price_filter .ui-slider .ui-slider-handle, .nav-links .nav-previous a, .nav-links .nav-next a, .wp-block-button a{';
			$fitness_gymhouse_custom_css .='background-color: '.esc_attr($fitness_gymhouse_theme_color_1).';';
		$fitness_gymhouse_custom_css .='}';
	}
	if($fitness_gymhouse_theme_color_1 != false){
		$fitness_gymhouse_custom_css .='a,.page-numbers, .post-info i,.main-navigation li li:focus > a{';
			$fitness_gymhouse_custom_css .='color: '.esc_attr($fitness_gymhouse_theme_color_1).';';
		$fitness_gymhouse_custom_css .='}';
	}
	if($fitness_gymhouse_theme_color_1 != false){
		$fitness_gymhouse_custom_css .='.scrollup i{';
			$fitness_gymhouse_custom_css .='border-color: '.esc_attr($fitness_gymhouse_theme_color_1).';';
		$fitness_gymhouse_custom_css .='}';
	}
	
	/*---------------------------Second highlight color-------------------*/
	$fitness_gymhouse_theme_color_2 = get_theme_mod('fitness_gymhouse_theme_color_2');
	if($fitness_gymhouse_theme_color_2 != false){
		$fitness_gymhouse_custom_css .='button:hover,button:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,.slide-button a:hover,#sidebox .tagcloud a:hover, .site-footer .tagcloud a:hover, .about-btn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.slide-button a:hover,.post-navigation .nav-next a:hover, .post-navigation .nav-previous a:hover{';
			$fitness_gymhouse_custom_css .='background-color: '.esc_attr($fitness_gymhouse_theme_color_2).';';
		$fitness_gymhouse_custom_css .='}';
	}
	if($fitness_gymhouse_theme_color_2 != false){
		$fitness_gymhouse_custom_css .='.page-template-home-custom .navigation-top .current-menu-item > a, .page-template-home-custom .navigation-top .current_page_item > a, .navigation-top .current-menu-item > a,.navigation-top .current_page_item > a, .main-navigation a:hover, .blogger a:hover, .category a:hover, .post-info a:hover,#sidebox ul li a:hover, .site-footer ul li a:hover,.page-template-home-custom .navigation-top ul ul a,.main-navigation ul ul li a,.main-navigation li li:hover > a{';
			$fitness_gymhouse_custom_css .='color: '.esc_attr($fitness_gymhouse_theme_color_2).';';
		$fitness_gymhouse_custom_css .='}';
	}
	if($fitness_gymhouse_theme_color_2 != false){
		$fitness_gymhouse_custom_css .='.page-template-home-custom .navigation-top .current-menu-item > a, .page-template-home-custom .navigation-top .current_page_item > a,.navigation-top .current-menu-item > a, .navigation-top .current_page_item > a,  .top-header{';
			$fitness_gymhouse_custom_css .='border-bottom-color: '.esc_attr($fitness_gymhouse_theme_color_2).';';
		$fitness_gymhouse_custom_css .='}';
	}
if($fitness_gymhouse_theme_color_2 != false){
		$fitness_gymhouse_custom_css .='.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.comment-reply-link:hover, .wp-block-button a:hover{';
			$fitness_gymhouse_custom_css .='background-color: '.esc_attr($fitness_gymhouse_theme_color_2).'!important;';
		$fitness_gymhouse_custom_css .='}';
	}
	if($fitness_gymhouse_theme_color_2 != false){
		$fitness_gymhouse_custom_css .='.main-navigation ul ul li:hover{';
			$fitness_gymhouse_custom_css .='border-left-color: '.esc_attr($fitness_gymhouse_theme_color_2).';';
		$fitness_gymhouse_custom_css .='}';
	}
	if($fitness_gymhouse_theme_color_2 != false){
		$fitness_gymhouse_custom_css .='.blogger a.post-link, .related-posts a.post-link{';
			$fitness_gymhouse_custom_css .='border-color: '.esc_attr($fitness_gymhouse_theme_color_2).';';
		$fitness_gymhouse_custom_css .='}';
	}
	/*---------------------------Width Layout -------------------*/
	$fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_theme_options','Default');
    if($fitness_gymhouse_theme_lay == 'Default'){
		$fitness_gymhouse_custom_css .='body{';
			$fitness_gymhouse_custom_css .='max-width: 100%;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.page-template-custom-home-page .middle-header{';
			$fitness_gymhouse_custom_css .='width: 97.3%';
		$fitness_gymhouse_custom_css .='}';
	}else if($fitness_gymhouse_theme_lay == 'Wide Layout'){
		$fitness_gymhouse_custom_css .='body{';
			$fitness_gymhouse_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.page-template-custom-home-page .middle-header{';
			$fitness_gymhouse_custom_css .='width: 97.7%';
		$fitness_gymhouse_custom_css .='}';
	}else if($fitness_gymhouse_theme_lay == 'Box Layout'){
		$fitness_gymhouse_custom_css .='body{';
			$fitness_gymhouse_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$fitness_gymhouse_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$fitness_gymhouse_slider_layout = get_theme_mod( 'fitness_gymhouse_slider_opacity_color','0.7');
	if($fitness_gymhouse_slider_layout == '0'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.1'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.1';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.2'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.2';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.3'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.3';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.4'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.4';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.5'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.5';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.6'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.6';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.7'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.7';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.8'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.8';
		$fitness_gymhouse_custom_css .='}';
		}else if($fitness_gymhouse_slider_layout == '0.9'){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='opacity:0.9';
		$fitness_gymhouse_custom_css .='}';
		}

	/*---------------Slider Content Layout -------------------*/
	$fitness_gymhouse_slider_layout = get_theme_mod( 'fitness_gymhouse_slider_content_option','Center');
    if($fitness_gymhouse_slider_layout == 'Left'){
		$fitness_gymhouse_custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .inner_carousel p, #slider-section .readbutton{';
			$fitness_gymhouse_custom_css .='text-align:left; left:15%; right:45%;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		#slider-section .inner_carousel h1 a{';
		$fitness_gymhouse_custom_css .='font-size:36px;';
		$fitness_gymhouse_custom_css .='} }';
	}else if($fitness_gymhouse_slider_layout == 'Center'){
		$fitness_gymhouse_custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1 a, #slider-section .inner_carousel p, #slider-section .readbutton{';
			$fitness_gymhouse_custom_css .='text-align:center; left:25%; right:25%;';
		$fitness_gymhouse_custom_css .='}';
	}else if($fitness_gymhouse_slider_layout == 'Right'){
		$fitness_gymhouse_custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .inner_carousel p, #slider-section .readbutton{';
			$fitness_gymhouse_custom_css .='text-align:right; left:45%; right:15%;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		#slider-section .inner_carousel h1 a{';
		$fitness_gymhouse_custom_css .='font-size:36px;';
		$fitness_gymhouse_custom_css .='} }';
	}

	/*------------------- Button Settings option ------------------*/
	$fitness_gymhouse_top_bottom_padding = get_theme_mod('fitness_gymhouse_top_bottom_padding');
	$fitness_gymhouse_left_right_padding = get_theme_mod('fitness_gymhouse_left_right_padding');
	if($fitness_gymhouse_top_bottom_padding != false || $fitness_gymhouse_left_right_padding != false){
		$fitness_gymhouse_custom_css .='.slide-button a, .form-submit input[type="submit"], a.post-link, .about-btn a{';
			$fitness_gymhouse_custom_css .='padding-top: '.esc_attr($fitness_gymhouse_top_bottom_padding).'px; padding-bottom: '.esc_attr($fitness_gymhouse_top_bottom_padding).'px; padding-left: '.esc_attr($fitness_gymhouse_left_right_padding).'px; padding-right: '.esc_attr($fitness_gymhouse_left_right_padding).'px; display: inline-block;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_border_radius = get_theme_mod('fitness_gymhouse_border_radius');
	$fitness_gymhouse_custom_css .='.slide-button a, .form-submit input[type="submit"],a.post-link, .about-btn a{';
		$fitness_gymhouse_custom_css .='border-radius: '.esc_attr($fitness_gymhouse_border_radius).'px;';
	$fitness_gymhouse_custom_css .='}';
	

	$fitness_gymhouse_show_border = get_theme_mod( 'fitness_gymhouse_button_border', false);
	if($fitness_gymhouse_show_border == true){
		$fitness_gymhouse_custom_css .='a.post-link{';
			$fitness_gymhouse_custom_css .='border:2px solid #e21b58;margin:10px 0;';
		$fitness_gymhouse_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$fitness_gymhouse_loader_color_setting = get_theme_mod('fitness_gymhouse_loader_color_setting');

	if($fitness_gymhouse_loader_color_setting != false){
		$fitness_gymhouse_custom_css .=' .circle .inner{';
			$fitness_gymhouse_custom_css .='border-color: '.esc_attr($fitness_gymhouse_loader_color_setting).';';
		$fitness_gymhouse_custom_css .='} ';
	}

	$fitness_gymhouse_loader_background_color = get_theme_mod('fitness_gymhouse_loader_background_color');

	if($fitness_gymhouse_loader_background_color != false){
		$fitness_gymhouse_custom_css .=' #pre-loader{';
			$fitness_gymhouse_custom_css .='background-color: '.esc_attr($fitness_gymhouse_loader_background_color).';';
		$fitness_gymhouse_custom_css .='} ';
	}

	$fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_preloader_types','Default');
    if($fitness_gymhouse_theme_lay == 'Default'){
		$fitness_gymhouse_custom_css .='{';
			$fitness_gymhouse_custom_css .='';
		$fitness_gymhouse_custom_css .='}';
	}elseif($fitness_gymhouse_theme_lay == 'Circle'){
		$fitness_gymhouse_custom_css .='.circle .inner{';
			$fitness_gymhouse_custom_css .='width:unset;';
		$fitness_gymhouse_custom_css .='}';
	}elseif($fitness_gymhouse_theme_lay == 'Two Circle'){
		$fitness_gymhouse_custom_css .='.circle .inner{';
			$fitness_gymhouse_custom_css .='width:80%;
    border-right: 5px;';
		$fitness_gymhouse_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/
	$fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_blog_post_layout','Default');
    if($fitness_gymhouse_theme_lay == 'Default'){
		$fitness_gymhouse_custom_css .='.blogger{';
			$fitness_gymhouse_custom_css .='';
		$fitness_gymhouse_custom_css .='}';
	}else if($fitness_gymhouse_theme_lay == 'Left'){
		$fitness_gymhouse_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$fitness_gymhouse_custom_css .='text-align:left;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.post-info{';
			$fitness_gymhouse_custom_css .='margin-top:10px;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.blogger .post-link{';
			$fitness_gymhouse_custom_css .='margin-top:25px;';
		$fitness_gymhouse_custom_css .='}';
	}else if($fitness_gymhouse_theme_lay == 'Image and Content'){
		$fitness_gymhouse_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$fitness_gymhouse_custom_css .='text-align:Left;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.blogger .post-link{';
			$fitness_gymhouse_custom_css .='text-align:right;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.blogger .post-info a{';
			$fitness_gymhouse_custom_css .='font-size:14px;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.blogger .post-info .entry-comments{';
			$fitness_gymhouse_custom_css .='font-size:14px; padding:5px;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='.blogger .post-info{';
			$fitness_gymhouse_custom_css .='margin:5px 0;';
		$fitness_gymhouse_custom_css .='}';
	}

	// Responsive Media
	$fitness_gymhouse_sidebar = get_theme_mod( 'fitness_gymhouse_enable_disable_sidebar',true);
    if($fitness_gymhouse_sidebar == true){
    	$fitness_gymhouse_custom_css .='@media screen and (max-width:575px) {';
		$fitness_gymhouse_custom_css .='#sidebox{';
			$fitness_gymhouse_custom_css .='display:block;';
		$fitness_gymhouse_custom_css .='} }';
	}else if($fitness_gymhouse_sidebar == false){
		$fitness_gymhouse_custom_css .='@media screen and (max-width:575px) {';
		$fitness_gymhouse_custom_css .='#sidebox{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} }';
	}

	$fitness_gymhouse_topbar = get_theme_mod( 'fitness_gymhouse_enable_disable_topbar',false);
	if($fitness_gymhouse_topbar == true && get_theme_mod( 'fitness_gymhouse_show_hide_topbar', false) == false){
    	$fitness_gymhouse_custom_css .='.top-header{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} ';
	}
    if($fitness_gymhouse_topbar == true){
    	$fitness_gymhouse_custom_css .='@media screen and (max-width:575px) {';
		$fitness_gymhouse_custom_css .='.top-header{';
			$fitness_gymhouse_custom_css .='display:block;';
		$fitness_gymhouse_custom_css .='} }';
	}else if($fitness_gymhouse_topbar == false){
		$fitness_gymhouse_custom_css .='@media screen and (max-width:575px) {';
		$fitness_gymhouse_custom_css .='.top-header{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} }';
	}

	$fitness_gymhouse_slider = get_theme_mod( 'fitness_gymhouse_enable_disable_slider',false);
	if($fitness_gymhouse_slider == true && get_theme_mod( 'fitness_gymhouse_slider_hide', false) == false){
    	$fitness_gymhouse_custom_css .='#slider-section{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} ';
	}
    if($fitness_gymhouse_slider == true){
    	$fitness_gymhouse_custom_css .='@media screen and (max-width:575px) {';
		$fitness_gymhouse_custom_css .='#slider-section{';
			$fitness_gymhouse_custom_css .='display:block;';
		$fitness_gymhouse_custom_css .='} }';
	}else if($fitness_gymhouse_slider == false){
		$fitness_gymhouse_custom_css .='@media screen and (max-width:575px){';
		$fitness_gymhouse_custom_css .='#slider-section{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} }';
	}

	$fitness_gymhouse_sliderbutton = get_theme_mod( 'fitness_gymhouse_show_hide_slider_button',true);
	if($fitness_gymhouse_sliderbutton == true && get_theme_mod( 'fitness_gymhouse_slider_button',true) != true){
    	$fitness_gymhouse_custom_css .='#slider-section .slide-button{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} ';
	}
    if($fitness_gymhouse_sliderbutton == true){
    	$fitness_gymhouse_custom_css .='@media screen and (max-width:575px) {';
		$fitness_gymhouse_custom_css .='#slider-section .slide-button{';
			$fitness_gymhouse_custom_css .='display:block;';
		$fitness_gymhouse_custom_css .='} }';
	}else if($fitness_gymhouse_sliderbutton == false){
		$fitness_gymhouse_custom_css .='@media screen and (max-width:575px){';
		$fitness_gymhouse_custom_css .='#slider-section .slide-button{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} }';
	}

	$fitness_gymhouse_scroll = get_theme_mod( 'fitness_gymhouse_enable_disable_scrolltop',true);
	if($fitness_gymhouse_scroll == true && get_theme_mod( 'fitness_gymhouse_hide_show_scroll',true) != true){
    	$fitness_gymhouse_custom_css .='.scrollup i{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} ';
	}
    if($fitness_gymhouse_scroll == true){
    	$fitness_gymhouse_custom_css .='@media screen and (max-width:575px) {';
		$fitness_gymhouse_custom_css .='.scrollup i{';
			$fitness_gymhouse_custom_css .='display:block;';
		$fitness_gymhouse_custom_css .='} }';
	}else if($fitness_gymhouse_scroll == false){
		$fitness_gymhouse_custom_css .='@media screen and (max-width:575px){';
		$fitness_gymhouse_custom_css .='.scrollup i{';
			$fitness_gymhouse_custom_css .='display:none;';
		$fitness_gymhouse_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$fitness_gymhouse_copyright_top_bottom_padding = get_theme_mod('fitness_gymhouse_copyright_top_bottom_padding');
	if($fitness_gymhouse_copyright_top_bottom_padding != false){
		$fitness_gymhouse_custom_css .='.site-info{';
			$fitness_gymhouse_custom_css .='padding-top: '.esc_attr($fitness_gymhouse_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($fitness_gymhouse_copyright_top_bottom_padding).'px;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_footer_text_font_size = get_theme_mod('fitness_gymhouse_footer_text_font_size', 16);
	$fitness_gymhouse_custom_css .='.site-info{';
		$fitness_gymhouse_custom_css .='font-size: '.esc_attr($fitness_gymhouse_footer_text_font_size).'px;';
	$fitness_gymhouse_custom_css .='}';

	// Slider Height 
	$fitness_gymhouse_slider_height_option = get_theme_mod('fitness_gymhouse_slider_height_option');
	if($fitness_gymhouse_slider_height_option != false){
		$fitness_gymhouse_custom_css .='#slider-section img{';
			$fitness_gymhouse_custom_css .='height: '.esc_attr($fitness_gymhouse_slider_height_option).'px;';
		$fitness_gymhouse_custom_css .='}';
	}

	// css
	$fitness_gymhouse_show_slider = get_theme_mod( 'fitness_gymhouse_slider_hide', false);
		if($fitness_gymhouse_show_slider == false){
			$fitness_gymhouse_custom_css .='.page-template-home-custom #masthead{';
				$fitness_gymhouse_custom_css .='position:relative; color:#000; background-color: #fafafa; border-bottom: solid 2px #bbb;';
			$fitness_gymhouse_custom_css .='}';
		}
		else if($fitness_gymhouse_show_slider == false){
			$fitness_gymhouse_custom_css .='.page-template-home-custom .navigation-top a,.page-template-home-custom .logo h1 a, .page-template-home-custom .site-title a, .page-template-home-custom .logo p, .page-template-home-custom .site-title a:hover{';
				$fitness_gymhouse_custom_css .='color:#000;';
			$fitness_gymhouse_custom_css .='}';
		}

	// scroll to top setting
	$fitness_gymhouse_scroll_border_radius = get_theme_mod('fitness_gymhouse_scroll_border_radius');
	if($fitness_gymhouse_scroll_border_radius != false){
		$fitness_gymhouse_custom_css .='.scrollup i{';
			$fitness_gymhouse_custom_css .='border-radius: '.esc_attr($fitness_gymhouse_scroll_border_radius).'px;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_scroll_top_fontsize = get_theme_mod('fitness_gymhouse_scroll_top_fontsize');
	if($fitness_gymhouse_scroll_top_fontsize != false){
		$fitness_gymhouse_custom_css .='.scrollup i{';
			$fitness_gymhouse_custom_css .='font-size: '.esc_attr($fitness_gymhouse_scroll_top_fontsize).'px;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_scroll_top_bottom_padding = get_theme_mod('fitness_gymhouse_scroll_top_bottom_padding');
	$fitness_gymhouse_scroll_left_right_padding = get_theme_mod('fitness_gymhouse_scroll_left_right_padding');
	if($fitness_gymhouse_scroll_top_bottom_padding != false || $fitness_gymhouse_scroll_left_right_padding != false){
		$fitness_gymhouse_custom_css .='.scrollup i{';
			$fitness_gymhouse_custom_css .='padding-top: '.esc_attr($fitness_gymhouse_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($fitness_gymhouse_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($fitness_gymhouse_scroll_left_right_padding).'px; padding-right: '.esc_attr($fitness_gymhouse_scroll_left_right_padding).'px;';
		$fitness_gymhouse_custom_css .='}';
	}

	// comment settings
	$fitness_gymhouse_comment_button_text = get_theme_mod('fitness_gymhouse_comment_button_text', 'Post Comment');
	if($fitness_gymhouse_comment_button_text == ''){
		$fitness_gymhouse_custom_css .='#comments p.form-submit {';
			$fitness_gymhouse_custom_css .='display: none;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_comment_form_heading = get_theme_mod('fitness_gymhouse_comment_form_heading', 'Leave a Reply');
	if($fitness_gymhouse_comment_form_heading == ''){
		$fitness_gymhouse_custom_css .='#comments h2#reply-title {';
			$fitness_gymhouse_custom_css .='display: none;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_comment_form_size = get_theme_mod( 'fitness_gymhouse_comment_form_size',100);
	$fitness_gymhouse_custom_css .='#comments textarea{';
		$fitness_gymhouse_custom_css .='width: '.esc_attr($fitness_gymhouse_comment_form_size).'%;';
	$fitness_gymhouse_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$fitness_gymhouse_shop_button_padding_top = get_theme_mod('fitness_gymhouse_shop_button_padding_top', 9);
	$fitness_gymhouse_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$fitness_gymhouse_custom_css .='padding-top: '.esc_attr($fitness_gymhouse_shop_button_padding_top).'px; padding-bottom: '.esc_attr($fitness_gymhouse_shop_button_padding_top).'px;';
	$fitness_gymhouse_custom_css .='}';

	$fitness_gymhouse_shop_button_padding_left = get_theme_mod('fitness_gymhouse_shop_button_padding_left', 16);
	$fitness_gymhouse_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$fitness_gymhouse_custom_css .='padding-left: '.esc_attr($fitness_gymhouse_shop_button_padding_left).'px; padding-right: '.esc_attr($fitness_gymhouse_shop_button_padding_left).'px;';
	$fitness_gymhouse_custom_css .='}';

	$fitness_gymhouse_shop_button_border_radius = get_theme_mod('fitness_gymhouse_shop_button_border_radius',0);
	$fitness_gymhouse_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$fitness_gymhouse_custom_css .='border-radius: '.esc_attr($fitness_gymhouse_shop_button_border_radius).'px;';
	$fitness_gymhouse_custom_css .='}';

	$fitness_gymhouse_display_related_products = get_theme_mod('fitness_gymhouse_display_related_products',true);
	if($fitness_gymhouse_display_related_products == false){
		$fitness_gymhouse_custom_css .='.related.products{';
			$fitness_gymhouse_custom_css .='display: none;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_shop_products_border = get_theme_mod('fitness_gymhouse_shop_products_border', true);
	if($fitness_gymhouse_shop_products_border == false){
		$fitness_gymhouse_custom_css .='.woocommerce .products li{';
			$fitness_gymhouse_custom_css .='border: none;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_shop_page_top_padding = get_theme_mod('fitness_gymhouse_shop_page_top_padding',10);
	$fitness_gymhouse_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fitness_gymhouse_custom_css .='padding-top: '.esc_attr($fitness_gymhouse_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($fitness_gymhouse_shop_page_top_padding).'px !important;';
	$fitness_gymhouse_custom_css .='}';

	$fitness_gymhouse_shop_page_left_padding = get_theme_mod('fitness_gymhouse_shop_page_left_padding',10);
	$fitness_gymhouse_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fitness_gymhouse_custom_css .='padding-left: '.esc_attr($fitness_gymhouse_shop_page_left_padding).'px !important; padding-right: '.esc_attr($fitness_gymhouse_shop_page_left_padding).'px !important;';
	$fitness_gymhouse_custom_css .='}';

	$fitness_gymhouse_shop_page_border_radius = get_theme_mod('fitness_gymhouse_shop_page_border_radius',0);
	$fitness_gymhouse_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fitness_gymhouse_custom_css .='border-radius: '.esc_attr($fitness_gymhouse_shop_page_border_radius).'px;';
	$fitness_gymhouse_custom_css .='}';

	$fitness_gymhouse_shop_page_box_shadow = get_theme_mod('fitness_gymhouse_shop_page_box_shadow',0);
	$fitness_gymhouse_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fitness_gymhouse_custom_css .='box-shadow: '.esc_attr($fitness_gymhouse_shop_page_box_shadow).'px '.esc_attr($fitness_gymhouse_shop_page_box_shadow).'px '.esc_attr($fitness_gymhouse_shop_page_box_shadow).'px #e4e4e4;';
	$fitness_gymhouse_custom_css .='}';

	// footer widget background
	$fitness_gymhouse_footer_widget_background = get_theme_mod('fitness_gymhouse_footer_widget_background', '#eee');
	$fitness_gymhouse_custom_css .='.site-footer{';
		$fitness_gymhouse_custom_css .='background-color: '.esc_attr($fitness_gymhouse_footer_widget_background).';';
	$fitness_gymhouse_custom_css .='}';

	$fitness_gymhouse_footer_widget_image = get_theme_mod('fitness_gymhouse_footer_widget_image');
	if($fitness_gymhouse_footer_widget_image != false){
		$fitness_gymhouse_custom_css .='.site-footer{';
			$fitness_gymhouse_custom_css .='background: url('.esc_attr($fitness_gymhouse_footer_widget_image).');';
		$fitness_gymhouse_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$fitness_gymhouse_navigation_menu_font_size = get_theme_mod('fitness_gymhouse_navigation_menu_font_size');{
		$fitness_gymhouse_custom_css .='.main-navigation a, .navigation-top a{';
			$fitness_gymhouse_custom_css .='font-size: '.esc_attr($fitness_gymhouse_navigation_menu_font_size).'px;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_menu_text_tranform','Default');
	if($fitness_gymhouse_theme_lay == 'Uppercase'){
		$fitness_gymhouse_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a,.main-navigation ul ul li a{';
			$fitness_gymhouse_custom_css .='text-transform:Uppercase;';
		$fitness_gymhouse_custom_css .='}';
	}

	$fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_menu_font_weight','Default');
	if($fitness_gymhouse_theme_lay == 'Normal'){
		$fitness_gymhouse_custom_css .='.main-navigation a, .navigation-top a{';
			$fitness_gymhouse_custom_css .='font-weight: normal;';
		$fitness_gymhouse_custom_css .='}';
	}

	// site title font size option
	$fitness_gymhouse_site_title_font_size = get_theme_mod('fitness_gymhouse_site_title_font_size', 35);{
	$fitness_gymhouse_custom_css .='.logo h1, .site-title a{';
	$fitness_gymhouse_custom_css .='font-size: '.esc_attr($fitness_gymhouse_site_title_font_size).'px;';
		$fitness_gymhouse_custom_css .='}';
	}

	/*------------------ Background Skin Option  -------------------*/
	$fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_background_image_type','Transparent');
    if($fitness_gymhouse_theme_lay == 'Background'){
		$fitness_gymhouse_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$fitness_gymhouse_custom_css .='background-color: #fff;';
		$fitness_gymhouse_custom_css .='}';
		$fitness_gymhouse_custom_css .='#sidebox .widget{';
			$fitness_gymhouse_custom_css .='padding:10px;';
		$fitness_gymhouse_custom_css .='}';
	}else if($fitness_gymhouse_theme_lay == 'Transparent'){
		$fitness_gymhouse_custom_css .='{';
			$fitness_gymhouse_custom_css .='background-color: transparent;';
		$fitness_gymhouse_custom_css .='}';
	}








