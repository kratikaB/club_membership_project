<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'woo_shop_page_layout_id' => 'wooshop_layout3',
		'woo_single_product_layout_id' => 'woosingle_layout3',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout2',
		'center_width' => 83.50,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '0',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('&copy; Copyright 2019. SKT White Lite. All Rights Reserved. Designed by SKT Themes', 'complete'),
		'phntp_text_id' => __('<i class="fa fa-phone" aria-hidden="true"></i> 12 8888 6666', 'complete'),
		'emltp_text' => __('<i class="fa fa-envelope" aria-hidden="true"></i> info@sitename.com', 'complete'),
		'sintp_text' => __('', 'complete'),
		'suptp_text' => __('[social_area]
			[social icon="facebook" link="#"]
			[social icon="twitter" link="#"]
			[social icon="google-plus" link="#"]
			[social icon="linkedin" link="#"]
			[social icon="pinterest" link="#"]
		[/social_area]', 'complete'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'search_box_hide' => '1',
		
		'custom_slider' => '',		
		'slider_type_id' => 'static',
		
		'slideefect' => 'fade',
		'slideanim' => '700',
		'slidepause' => '4000',
		'slidenav' => 'false',
		'slidepage' => 'true',
		
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',
		
		'slide_image1' => ''.get_template_directory_uri().'/images/slides/slider1.jpg',
        'slide_title1' => 'Minimal',
        'slide_desc1' => 'The Sign of Success',
        'slide_link1' => '#',
        'slide_btn1' => 'Read More',
        
        'slide_image2' => ''.get_template_directory_uri().'/images/slides/slider2.jpg',
        'slide_title2' => 'Minimal',
        'slide_desc2' => 'The Sign of Success',
        'slide_link2' => '#',
        'slide_btn2' => 'Read More',
        
        'slide_image3' => ''.get_template_directory_uri().'/images/slides/slider3.jpg',
        'slide_title3' => 'Minimal',
        'slide_desc3' => 'The Sign of Success',
        'slide_link3' => '#',
        'slide_btn3' => 'Read More',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#545556',
		'pageheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#545556',
		'postheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#009cff',
		'submnu_textcolor_id' => '#282828',
		'submnbg_color_id' => '#ffffff',
		'mnshvr_color_id' => '#282828',
		'mobbg_color_id' => '#282828',
		'mobbgtop_color_id' => '#009cff',
		'mobmenutxt_color_id' => '#ffffff',
		'mobmenutxt_active_color_id' => '#009cff',
		
		'mobtoggle_color_id' => '#009cff',
		'mobtoggleinner_color_id' => '#ffffff',
		
		'sectxt_color_id' => '#ffffff',
		'content_font_id' =>  array('font-family' => 'Assistant', 'font-size' => '15px'),
		'primtxt_color_id' => '#2b2b2b',
		'logo_image_id' => array('url'=>''.get_template_directory_uri().'/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Assistant', 'font-size' => '40px'),
		'logo_color_id' => '#282828',
		
		'logo_image_height' => '67px;',
		'logo_image_width' => '160px;',
		'logo_margin_top' => '20px;',
		
		'tpbt_font_id' => array('font-family' => 'Assistant', 'font-size' => '16px'),
		'tpbt_color_id' => '#ffffff',
		'tpbt_hvcolor_id' => '#edecec',	
		
		'sldtitle_font_id' => array('font-family' => 'PlayfairDisplay', 'font-size' => '104px'),
		'slddesc_font_id' => array('font-family' => 'Assistant', 'font-size' => '34px'),
		'sldbtn_font_id' => array('font-family' => 'Assistant', 'font-size' => '18px'),
		
		'slidetitle_color_id' => '#ffffff',	
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#ffffff',
		'sldbtn_color_id' => '#009cff',
		'sldbtn_hvtextcolor_id' => '#ffffff',
		'sldbtn_hvcolor_id' => '#282828',
		
		'slide_pager_color_id' => '#ffffff',	
		'slide_active_pager_color_id' => '#009cff',
			
		'global_link_color_id' => '#009cff',
		'global_link_hvcolor_id' => '#685031',		
		
		'global_h1_color_id' => '#282828',
		'global_h1_hvcolor_id' => '#009cff',	
		'global_h2_color_id' => '#282828',
		'global_h2_hvcolor_id' => '#009cff',
		'global_h3_color_id' => '#282828',
		'global_h3_hvcolor_id' => '#009cff',
		'global_h4_color_id' => '#282828',
		'global_h4_hvcolor_id' => '#009cff',
		'global_h5_color_id' => '#282828',
		'global_h5_hvcolor_id' => '#009cff',
		'global_h6_color_id' => '#282828',
		'global_h6_hvcolor_id' => '#009cff',	
		
		'post_meta_color_id' => '#282828',
		'team_box_color_id' => '#f7f7f7',
		
		
		'features_text_color' => '#ffffff',
		'features_text_hover_color' => '#d4d4d4',
		'features_ordernumber_color' => '#000000',
		'features_bottom_border_color' => '#000000',
		
		
		
		
		
		
		
		
		
		
		'social_text_color_id' => '#ffffff',
		'social_icon_color_id' => '#1c1c1c',
		'social_hover_icon_color_id' => '#ffffff',
		'testimonialbox_color_id' => '#ffffff',		
		'testimonialbox_txt_color' => '#000000',
		'testimonial_pager_color_id' => '#009cff',
		'testimonialbox_border_color' => '#e8e7e7',
		'testimonial_activepager_color_id' => '#009cff',
		'gallery_filtertxt_color_id' => '#909090',
		'gallery_activefiltertxt_color_id' => '#f1b500',
		'gallery_title_color_id' => '#fff',
		'gallery_title_bg_color_id' => '#f1b500',
		'skillsbar_bgcolor_id' => '#f8f8f8',
		'skillsbar_text_color_id' => '#ffffff',								
		'global_h1_font_id' => array('font-family' => 'Assistant', 'font-size' => '32px'),
		'global_h2_font_id' => array('font-family' => 'Assistant', 'font-size' => '28px'),
		'global_h3_font_id' => array('font-family' => 'Assistant', 'font-size' => '22px'),
		'global_h4_font_id' => array('font-family' => 'Assistant', 'font-size' => '13px'),
		'global_h5_font_id' => array('font-family' => 'Assistant', 'font-size' => '11px'),
		'global_h6_font_id' => array('font-family' => 'Assistant', 'font-size' => '9px'),
		
		'contact_title' => 'Contact Info',
		'contact_address' => 'Donec ultricies mattis nulla Australia',
		'contact_phone' => '0789 256 321',
		'contact_email' => 'info@companyname.com',
		'contact_company_url' => 'http://demo.com',
		'contact_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336003.6066860609!2d2.349634820486094!3d48.8576730786213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x040b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1433482358672',
		
		'head_bg_trans' => '0',
		'head_color_id' => '#ffffff',
		'head_info_color_id' => '#282828',
		'head_info_bg_trans' => '1',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#282828',
		'menutxt_color_hover' => '#009cff',
		'menutxt_color_active' => '#009cff',
		'menu_size_id' => '17px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebarborder_color_id' => '#eeeff5',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'sidebarlink_color_id' => '#009cff',
		'sidebarlink_hover_color_id' => '#999999',
		'flipbg_front_color_id' => '#ffffff',
		'flipbg_back_color_id' => '#f7f7f7',
		'flipborder_front_color_id' => '#e0e0e0',
		'flipborder_back_color_id' => '#000000',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '16px',
		'timebox_color_id' => '#ffffff',
		'timeboxborder_color_id' => '#dedede',
		'gridbox_color_id' => '#ffffff',
		'gridboxborder_color_id' => '#cccccc',
		
		'service_box_bg' => '#009cff',
		'service_box_bg_hover' => '#685031',
		'box_color_text' => '#ffffff',
		'go_bg_color' => '#ffffff',
		'box_right_border' => '#30a0fd',
		
		'expand_bg_color' => '#009cff',
		'expand_text_color' => '#000000',
		
		'h_seprator_color' => '#009cff',
		'h_seprator_text_color' => '#000000',
		
		'square_bg_color' => '#ffffff',
		'square_bg_hover_color' => '#79ab9f',
		'square_title_color' => '#000000',
		
		'style3_bg_color' => '#ffffff',
		'style3_hover_bg_color' => '#9f9f9f',
		'style3_border_color' => '#eaeaea',
		
		'style4_title_color' => '#222',
		'style4_title_hover_color' => '#009afc',
		'style4_link_color' => '#009afc',
		'style4_first_post_content_color' => '#fff',
		'style4_first_post_pattern_border_color' => '#009afc',
		'style4_first_post_title_color' => '#fff',
		'style4_first_post_title_hover_color' => '#009afc',
		'style4_first_post_link_color' => '#fff',
		'style4_first_post_btnbg_color' => '#fff',
		'style4_first_post_btn_color' => '#222',
		'style4_first_post_hoverbtnbg_color' => '#009afc',
		'style4_first_post_hoverbtn_color' => '#fff',
		
		'perfect_bg_color' => '#ffffff',
		'perfect_border_color' => '#eaeaea',
		'perfect_hover_border_color' => '#009cff',
 
		'foot_layout_id' => '4',
		'footer_color_id' => '#505050',
		'footer_bg_image' => ''.get_template_directory_uri().'/images/footer-bg.jpg',
		'footwdgtxt_color_id' => '#bcbbbb',
		'footer_title_color' => '#ffffff',
		'footer_title_border_color' => '#ffffff',
		'ptitle_font_id' =>  array('font-family' => 'Assistant', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Assistant', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '',
		'mnutxt_upcase_id' => '0',
		'copyright_bg_color' => '',
		'copyright_txt_color' => '#bcbbbb',
		
		//Footer Info Box
		'footer_infobox_border_color' => '#435f8e',
		
		'footer_menu_color' => '#bcbbbb',
		'footer_menu_hover_color' => '#009cff',
		
		//Featured Box
		'featured_section_title' => __('Featured Boxes', 'complete'),
		'homeblock_bg_setting' => '',
		'ftd_bg_video' => '',
		'homeblock_title_color' => '#000000',
		'homeblock_color_id' => '#f2f2f2',
		'featured_image_height' => '70px;',
		'featured_image_width' => '70px;',
		'featured_excerpt' => '35',
		'featured_block_bg' => '#ffffff',
		'featured_block_button' => __('Read More', 'complete'),
		'recentpost_block_button' => __('Read More', 'complete'),
		
		'featured_block_button_bg' => '#009cff',
		'featured_block_hover_button_bg' => '#393939',
		
		//Footer Column 1
		'foot_cols1_title' => __('SKT WHITE', 'complete'),
		'foot_cols1_content' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames turpis egestas. Vivamus condimentum mauris a quam sodales rutrum. Donec non placerat urna.[space height="20"][social_area]
	[social icon="facebook" link="#"]
	[social icon="twitter" link="#"]
	[social icon="instagram" link="#"]
	[social icon="linkedin" link="#"]
	[social icon="pinterest" link="#"] 
[/social_area]',
		//Footer Column 1
		
		//Footer Column 2
		'foot_cols2_title' => __('LATEST NEWS', 'complete'),
		'foot_cols2_content' => '[footerposts show="6"]',
		//Footer Column 2
		
		//Footer Column 3
		'foot_cols3_title' => __('QUICK LINKS', 'complete'),
		'foot_cols3_content' => '[footermenu menu="footer"]',
		//Footer Column 3
		
		//Footer Column 4
		'foot_cols4_title' => __('CONTACT INFO', 'complete'),
		'foot_cols4_content' => 'Street 238,52 tempor<br>Donec ultricies mattis nulla, suscipit risus tristique ut.[space height="45"]<p style="margin-bottom: 5px;"><span style="margin-right: 24px;">Phone:</span> 1.800.555.6789</p><p style="margin-bottom: 5px;"><span style="margin-right: 28px;">E-mail:</span>info@sktthemes.org</a></p><p style="margin-bottom: 5px;"><span style="margin-right: 17px;">Website:</span>https://sktthemes.org</a></p>',
		//Footer Column 4
		
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => 'span.desc{display: none;}',
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>