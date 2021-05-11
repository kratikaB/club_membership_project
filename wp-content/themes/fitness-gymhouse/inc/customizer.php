<?php
/**
 * Fitness Gymhouse: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function fitness_gymhouse_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'fitness_gymhouse_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'fitness-gymhouse' ),
	    'description' => __( 'Description of what this panel does.', 'fitness-gymhouse' ),
	) );

	// font array
	$fitness_gymhouse_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'fitness_gymhouse_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'fitness-gymhouse' ),
		'panel' => 'fitness_gymhouse_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_paragraph_color', array(
		'label' => __('Paragraph Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_paragraph_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( 'Paragraph Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	$wp_customize->add_setting('fitness_gymhouse_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_typography',
		'setting'	=> 'fitness_gymhouse_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_atag_color', array(
		'label' => __('"a" Tag Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_atag_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( '"a" Tag Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_li_color', array(
		'label' => __('"li" Tag Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_li_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( '"li" Tag Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_h1_color', array(
		'label' => __('H1 Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_h1_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( 'H1 Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('fitness_gymhouse_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_h1_font_size',array(
		'label'	=> __('H1 Font Size','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_typography',
		'setting'	=> 'fitness_gymhouse_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_h2_color', array(
		'label' => __('h2 Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_h2_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( 'h2 Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('fitness_gymhouse_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_h2_font_size',array(
		'label'	=> __('h2 Font Size','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_typography',
		'setting'	=> 'fitness_gymhouse_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_h3_color', array(
		'label' => __('h3 Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_h3_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( 'h3 Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('fitness_gymhouse_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_h3_font_size',array(
		'label'	=> __('h3 Font Size','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_typography',
		'setting'	=> 'fitness_gymhouse_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_h4_color', array(
		'label' => __('h4 Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_h4_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( 'h4 Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('fitness_gymhouse_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_h4_font_size',array(
		'label'	=> __('h4 Font Size','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_typography',
		'setting'	=> 'fitness_gymhouse_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_h5_color', array(
		'label' => __('h5 Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_h5_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( 'h5 Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('fitness_gymhouse_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_h5_font_size',array(
		'label'	=> __('h5 Font Size','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_typography',
		'setting'	=> 'fitness_gymhouse_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'fitness_gymhouse_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_h6_color', array(
		'label' => __('h6 Color', 'fitness-gymhouse'),
		'section' => 'fitness_gymhouse_typography',
		'settings' => 'fitness_gymhouse_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('fitness_gymhouse_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control(
	    'fitness_gymhouse_h6_font_family', array(
	    'section'  => 'fitness_gymhouse_typography',
	    'label'    => __( 'h6 Fonts','fitness-gymhouse'),
	    'type'     => 'select',
	    'choices'  => $fitness_gymhouse_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('fitness_gymhouse_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_h6_font_size',array(
		'label'	=> __('h6 Font Size','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_typography',
		'setting'	=> 'fitness_gymhouse_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('fitness_gymhouse_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','fitness-gymhouse'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','fitness-gymhouse'),
            'Background' => __('Background','fitness-gymhouse'),
        ),
	) );

	// Add the Global Color typography section.
	$wp_customize->add_section( 'fitness_gymhouse_theme_color_option', array( 
		'panel' => 'fitness_gymhouse_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'fitness-gymhouse' )
	) );

  	$wp_customize->add_setting( 'fitness_gymhouse_theme_color_1', array(
	    'default' => '#554c86',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_theme_color_1', array(
  		'label' => __( 'Color Option', 'fitness-gymhouse' ),
	    'description' => __('One can change complete theme color on just one click.', 'fitness-gymhouse'),
	    'section' => 'fitness_gymhouse_theme_color_option',
	    'settings' => 'fitness_gymhouse_theme_color_1',
  	)));

  	$wp_customize->add_setting( 'fitness_gymhouse_theme_color_2', array(
	    'default' => '#e21b58',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_theme_color_2', array(
  		'label' =>__( 'Color Option', 'fitness-gymhouse' ),
	    'description' => __('One can change complete theme color on just one click.', 'fitness-gymhouse'),
	    'section' => 'fitness_gymhouse_theme_color_option',
	    'settings' => 'fitness_gymhouse_theme_color_2',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'fitness_gymhouse_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'fitness-gymhouse' ),
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	$wp_customize->add_setting('fitness_gymhouse_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_shop_page_options',
    ));

    $wp_customize->add_setting('fitness_gymhouse_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_shop_page_options',
    ));

	$wp_customize->add_setting( 'fitness_gymhouse_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_gymhouse_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_gymhouse_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'fitness-gymhouse' ),
		'section'  => 'fitness_gymhouse_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('fitness_gymhouse_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));	
	$wp_customize->add_control('fitness_gymhouse_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control( 'fitness_gymhouse_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control( 'fitness_gymhouse_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'fitness_gymhouse_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'fitness_gymhouse_shop_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

  	//Layout Settings
	$wp_customize->add_section( 'fitness_gymhouse_width_layout', array(
    	'title'      => __( 'Layout Settings', 'fitness-gymhouse' ),
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	//Sticky Header
	$wp_customize->add_setting( 'fitness_gymhouse_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ) );
    $wp_customize->add_control('fitness_gymhouse_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','fitness-gymhouse' ),
        'section' => 'fitness_gymhouse_width_layout'
    ));

	$wp_customize->add_setting('fitness_gymhouse_loader_setting',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_width_layout'
    ));

    $wp_customize->add_setting('fitness_gymhouse_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_width_layout',
        'choices' => array(
            'Default' => __('Default','fitness-gymhouse'),
            'Circle' => __('Circle','fitness-gymhouse'),
            'Two Circle' => __('Two Circle','fitness-gymhouse')
        ),
	) );

    $wp_customize->add_setting( 'fitness_gymhouse_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'fitness-gymhouse'),
	    'section' => 'fitness_gymhouse_width_layout',
	    'settings' => 'fitness_gymhouse_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'fitness_gymhouse_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'fitness-gymhouse'),
	    'section' => 'fitness_gymhouse_width_layout',
	    'settings' => 'fitness_gymhouse_loader_background_color',
  	)));

	$wp_customize->add_setting('fitness_gymhouse_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','fitness-gymhouse'),
        'description' => __('Here you can change the Width layout. ','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_width_layout',
        'choices' => array(
            'Default' => __('Default','fitness-gymhouse'),
            'Wide Layout' => __('Wide Layout','fitness-gymhouse'),
            'Box Layout' => __('Box Layout','fitness-gymhouse'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'fitness_gymhouse_button_option', array(
		'title' => __('Button', 'fitness-gymhouse' ),
		'panel' => 'fitness_gymhouse_panel_id',
	));

	//Show /Hide border
	$wp_customize->add_setting( 'fitness_gymhouse_button_border',array(
		'default' => false,
      	'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ) );
    $wp_customize->add_control('fitness_gymhouse_button_border',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Border for Blog page','fitness-gymhouse' ),
        'section' => 'fitness_gymhouse_button_option'
    ));

	$wp_customize->add_setting('fitness_gymhouse_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float'
	));
	$wp_customize->add_control('fitness_gymhouse_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','fitness-gymhouse'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'fitness_gymhouse_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('fitness_gymhouse_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float'
	));
	$wp_customize->add_control('fitness_gymhouse_left_right_padding',array(
		'label'	=> __('Left and Right Padding','fitness-gymhouse'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'fitness_gymhouse_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float'
	) );
	$wp_customize->add_control( 'fitness_gymhouse_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','fitness-gymhouse' ),
		'section'     => 'fitness_gymhouse_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_section( 'fitness_gymhouse_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'fitness-gymhouse' ),
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('fitness_gymhouse_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','fitness-gymhouse'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','fitness-gymhouse'),
            'Right Sidebar' => __('Right Sidebar','fitness-gymhouse'),
            'One Column' => __('One Column','fitness-gymhouse'),
            'Three Columns' => __('Three Columns','fitness-gymhouse'),
            'Four Columns' => __('Four Columns','fitness-gymhouse'),
            'Grid Layout' => __('Grid Layout','fitness-gymhouse')
        ),
	) );

	$wp_customize->add_setting('fitness_gymhouse_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','fitness-gymhouse'),
            'Right Sidebar' => __('Right Sidebar','fitness-gymhouse'),
            'One Column' => __('One Column','fitness-gymhouse')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('fitness_gymhouse_topbar',array(
		'title'	=> __('Topbar Section','fitness-gymhouse'),
		'description' => __('Here you can add email address, phone number and timings.','fitness-gymhouse'),
		'priority'	=> null,
		'panel' => 'fitness_gymhouse_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'fitness_gymhouse_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ) );
    $wp_customize->add_control('fitness_gymhouse_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','fitness-gymhouse' ),
        'section' => 'fitness_gymhouse_topbar'
    ));

	$wp_customize->add_setting('fitness_gymhouse_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_phone_number'
	));	
	$wp_customize->add_control('fitness_gymhouse_contact',array(
		'label'	=> __('Add Phone Number','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_topbar',
		'setting'	=> 'fitness_gymhouse_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('fitness_gymhouse_email',array(
		'label'	=> __('Add Email Address','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_topbar',
		'setting'	=> 'fitness_gymhouse_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_timming',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('fitness_gymhouse_timming',array(
		'label'	=> __('Add Time','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_topbar',
		'setting'	=> 'fitness_gymhouse_timming',
		'type'		=> 'text'
	));

	// navigation menu 
	$wp_customize->add_section( 'fitness_gymhouse_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'fitness-gymhouse' ),
		'priority'   => null,
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	$wp_customize->add_setting('fitness_gymhouse_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('fitness_gymhouse_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
    ));
    $wp_customize->add_control('fitness_gymhouse_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_navigation_menu',
        'choices' => array(
            'Default' => __('Default','fitness-gymhouse'),
            'Uppercase' => __('Uppercase','fitness-gymhouse'),
        ),
	) );

	$wp_customize->add_setting('fitness_gymhouse_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
    ));
    $wp_customize->add_control('fitness_gymhouse_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_navigation_menu',
        'choices' => array(
            'Default' => __('Default','fitness-gymhouse'),
            'Normal' => __('Normal','fitness-gymhouse'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'fitness_gymhouse_slider' , array(
    	'title'      => __( 'Slider Section', 'fitness-gymhouse' ),
    	'description'	=> __('Here you can select pages which you have created for slider.','fitness-gymhouse'),
		'priority'   => null,
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	$wp_customize->add_setting('fitness_gymhouse_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_slider',
    ));

    $wp_customize->add_setting('fitness_gymhouse_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_slider'
    ));

    $wp_customize->add_setting('fitness_gymhouse_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_slider'
    ));

    $wp_customize->add_setting('fitness_gymhouse_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'fitness_gymhouse_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'fitness_gymhouse_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'fitness_gymhouse_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'fitness-gymhouse' ),
			'section'  => 'fitness_gymhouse_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'fitness_gymhouse_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_number_range',
	));
	$wp_customize->add_control( 'fitness_gymhouse_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('fitness_gymhouse_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_slider_height_option',array(
		'label'	=> __('Slider Height Option','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('fitness_gymhouse_slider_content_option',array(
    'default' => 'Center',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_slider',
        'choices' => array(
            'Center' => __('Center','fitness-gymhouse'),
            'Left' => __('Left','fitness-gymhouse'),
            'Right' => __('Right','fitness-gymhouse'),
        ),
	) );

	$wp_customize->add_setting('fitness_gymhouse_slider_button_text',array(
		'default'=> __('READ MORE','fitness-gymhouse'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_slider_button_text',array(
		'label'	=> __('Slider Button Text','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_number_range',
	) );
	$wp_customize->add_control( 'fitness_gymhouse_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','fitness-gymhouse' ),
		'section'     => 'fitness_gymhouse_slider',
		'type'        => 'range',
		'settings'    => 'fitness_gymhouse_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('fitness_gymhouse_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control( 'fitness_gymhouse_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','fitness-gymhouse' ),
	'section'     => 'fitness_gymhouse_slider',
	'type'        => 'select',
	'settings'    => 'fitness_gymhouse_slider_opacity_color',
	'choices' => array(
		'0' =>  esc_attr('0','fitness-gymhouse'),
		'0.1' =>  esc_attr('0.1','fitness-gymhouse'),
		'0.2' =>  esc_attr('0.2','fitness-gymhouse'),
		'0.3' =>  esc_attr('0.3','fitness-gymhouse'),
		'0.4' =>  esc_attr('0.4','fitness-gymhouse'),
		'0.5' =>  esc_attr('0.5','fitness-gymhouse'),
		'0.6' =>  esc_attr('0.6','fitness-gymhouse'),
		'0.7' =>  esc_attr('0.7','fitness-gymhouse'),
		'0.8' =>  esc_attr('0.8','fitness-gymhouse'),
		'0.9' =>  esc_attr('0.9','fitness-gymhouse')
	),
	));

	//About
	$wp_customize->add_section('fitness_gymhouse_about_section',array(
		'title'	=> __('About Section','fitness-gymhouse'),
		'description'	=> __('Here you can select post which you have created for About section.','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$posts[]='Select';	
	foreach($post_list as $post){
	$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('fitness_gymhouse_about',array(
		'sanitize_callback' => 'fitness_gymhouse_sanitize_choices',
	));
	$wp_customize->add_control('fitness_gymhouse_about',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','fitness-gymhouse'),
		'section' => 'fitness_gymhouse_about_section',
	));

	//no Result Setting
	$wp_customize->add_section('fitness_gymhouse_no_result_setting',array(
		'title'	=> __('No Results Settings','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));	

	$wp_customize->add_setting('fitness_gymhouse_no_search_result_title',array(
		'default'=> __('Nothing Found','fitness-gymhouse'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_no_search_result_title',array(
		'label'	=> __('No Search Results Title','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','fitness-gymhouse'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_no_search_result_content',array(
		'label'	=> __('No Search Results Content','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('fitness_gymhouse_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));	

	$wp_customize->add_setting('fitness_gymhouse_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('fitness_gymhouse_mobile_media',array(
		'title'	=> __('Mobile Media Settings','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));

	$wp_customize->add_setting('fitness_gymhouse_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_mobile_media'
    ));

	$wp_customize->add_setting('fitness_gymhouse_enable_disable_topbar',array(
       'default' => false,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_mobile_media'
    ));

    $wp_customize->add_setting('fitness_gymhouse_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_mobile_media'
    ));

    $wp_customize->add_setting('fitness_gymhouse_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_mobile_media'
    ));

    $wp_customize->add_setting('fitness_gymhouse_enable_disable_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('fitness_gymhouse_blog_post',array(
		'title'	=> __('Post Settings','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));	

	$wp_customize->add_setting('fitness_gymhouse_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_blog_post'
    ));

    $wp_customize->add_setting('fitness_gymhouse_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_blog_post'
    ));

    $wp_customize->add_setting('fitness_gymhouse_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_blog_post'
    ));

    $wp_customize->add_setting( 'fitness_gymhouse_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'fitness_gymhouse_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','fitness-gymhouse' ),
		'section'     => 'fitness_gymhouse_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','fitness-gymhouse'),
		'type'        => 'text',
		'settings'    => 'fitness_gymhouse_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('fitness_gymhouse_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
    ));
    $wp_customize->add_control('fitness_gymhouse_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_blog_post',
        'choices' => array(
            'Default' => __('Default','fitness-gymhouse'),
            'Left' => __('Left','fitness-gymhouse'),
            'Image and Content' => __('Image and Content','fitness-gymhouse'),
        ),
	) );

	$wp_customize->add_setting('fitness_gymhouse_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_blog_post',
        'choices' => array(
            'None' => __('None','fitness-gymhouse'),
            'Post Excerpt' => __('Post Excerpt','fitness-gymhouse'),
            'Post Content' => __('Post Content','fitness-gymhouse'),
        ),
	) );

    $wp_customize->add_setting( 'fitness_gymhouse_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_float',
	) );
	$wp_customize->add_control( 'fitness_gymhouse_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','fitness-gymhouse' ),
		'section'     => 'fitness_gymhouse_blog_post',
		'type'        => 'number',
		'settings'    => 'fitness_gymhouse_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'fitness_gymhouse_post_excerpt_suffix', array(
		'default'   => __('{...}','fitness-gymhouse'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'fitness_gymhouse_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','fitness-gymhouse' ),
		'section'     => 'fitness_gymhouse_blog_post',
		'type'        => 'text',
		'settings'    => 'fitness_gymhouse_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('fitness_gymhouse_button_text',array(
		'default'=> __('Continue Reading....','fitness-gymhouse'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_button_text',array(
		'label'	=> __('Add Button Text','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_blog_post'
    ));

	$wp_customize->add_setting( 'fitness_gymhouse_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'fitness_gymhouse_sanitize_choices'
    ));
    $wp_customize->add_control( 'fitness_gymhouse_pagination_option', array(
        'section' => 'fitness_gymhouse_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'fitness-gymhouse' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'fitness-gymhouse' ),
            'next-prev' => __( 'Next / Previous', 'fitness-gymhouse' ),
    )));

    // Single post setting
    $wp_customize->add_section('fitness_gymhouse_single_post_section',array(
		'title'	=> __('Single Post Settings','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));	

	$wp_customize->add_setting('fitness_gymhouse_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_single_post_section'
    ));

    $wp_customize->add_setting('fitness_gymhouse_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_single_post_section'
    ));

    $wp_customize->add_setting( 'fitness_gymhouse_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'fitness_gymhouse_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','fitness-gymhouse' ),
		'section'     => 'fitness_gymhouse_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','fitness-gymhouse'),
		'type'        => 'text',
		'settings'    => 'fitness_gymhouse_seperator_metabox',
	) );

	$wp_customize->add_setting('fitness_gymhouse_comment_form_heading',array(
       'default' => __('Leave a Reply','fitness-gymhouse'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('fitness_gymhouse_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_single_post_section'
    ));

    $wp_customize->add_setting('fitness_gymhouse_comment_button_text',array(
       'default' => __('Post Comment','fitness-gymhouse'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('fitness_gymhouse_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_single_post_section'
    ));

    $wp_customize->add_setting( 'fitness_gymhouse_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_number_range',
	));
	$wp_customize->add_control('fitness_gymhouse_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','fitness-gymhouse' ),
		'section' => 'fitness_gymhouse_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('fitness_gymhouse_related_post_section',array(
		'title'	=> __('Related Post Settings','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));	

	$wp_customize->add_setting('fitness_gymhouse_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_gymhouse_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_related_post_section',
    ));

	$wp_customize->add_setting( 'fitness_gymhouse_show_related_post', array(
        'default' => 'By categories',
        'sanitize_callback'	=> 'fitness_gymhouse_sanitize_choices'
    ));
    $wp_customize->add_control( 'fitness_gymhouse_show_related_post', array(
        'section' => 'fitness_gymhouse_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'fitness-gymhouse' ),
        'choices' => array(
            'categories'  => __('By Categories', 'fitness-gymhouse'),
            'tags' => __( 'By Tags', 'fitness-gymhouse' ),
    )));

    $wp_customize->add_setting('fitness_gymhouse_change_related_post_title',array(
		'default'=> __('Related Posts','fitness-gymhouse'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('fitness_gymhouse_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));
	
	//Footer
	$wp_customize->add_section('fitness_gymhouse_footer' , array(
    	'title'      => __( 'Footer Section', 'fitness-gymhouse' ),
		'priority'   => null,
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	$wp_customize->add_setting('fitness_gymhouse_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices',
    ));
    $wp_customize->add_control('fitness_gymhouse_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'fitness-gymhouse'),
        'section'     => 'fitness_gymhouse_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'fitness-gymhouse'),
        'choices' => array(
            '1'     => __('One', 'fitness-gymhouse'),
            '2'     => __('Two', 'fitness-gymhouse'),
            '3'     => __('Three', 'fitness-gymhouse'),
            '4'     => __('Four', 'fitness-gymhouse')
        ),
    ));

    $wp_customize->add_setting( 'fitness_gymhouse_footer_widget_background', array(
	    'default' => '#eee',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_footer_widget_background', array(
  		'label' => __('Footer Widget Background','fitness-gymhouse'),
	    'section' => 'fitness_gymhouse_footer',
  	)));

  	$wp_customize->add_setting('fitness_gymhouse_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'fitness_gymhouse_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_footer'
	)));

	$wp_customize->add_setting('fitness_gymhouse_hide_show_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'fitness_gymhouse_sanitize_checkbox'
	));
	$wp_customize->add_control('fitness_gymhouse_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','fitness-gymhouse'),
      	'section' => 'fitness_gymhouse_footer',
	));

	$wp_customize->add_setting('fitness_gymhouse_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'
	));
	$wp_customize->add_control('fitness_gymhouse_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','fitness-gymhouse'),
        'description' => __('Here you can change the Footer layout. ','fitness-gymhouse'),
        'section' => 'fitness_gymhouse_footer',
        'choices' => array(
            'Left align' => __('Left align','fitness-gymhouse'),
            'Right align' => __('Right align','fitness-gymhouse'),
            'Center align' => __('Center align','fitness-gymhouse'),
        ),
	) );

	$wp_customize->add_setting('fitness_gymhouse_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_number_range',
	));
	$wp_customize->add_control('fitness_gymhouse_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','fitness-gymhouse'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'fitness_gymhouse_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('fitness_gymhouse_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','fitness-gymhouse'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'fitness_gymhouse_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('fitness_gymhouse_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','fitness-gymhouse'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'fitness_gymhouse_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'fitness_gymhouse_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_float',
	) );
	$wp_customize->add_control( 'fitness_gymhouse_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','fitness-gymhouse' ),
		'section'     => 'fitness_gymhouse_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('fitness_gymhouse_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_gymhouse_footer_text',array(
		'label'	=> __('Add Copyright Text','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_footer',
    	'description'	=> __('Here you can add copyright text.','fitness-gymhouse'),
		'setting'	=> 'fitness_gymhouse_footer_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','fitness-gymhouse'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'fitness_gymhouse_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('fitness_gymhouse_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'fitness_gymhouse_sanitize_float',
	));
	$wp_customize->add_control('fitness_gymhouse_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','fitness-gymhouse'),
		'section'=> 'fitness_gymhouse_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'fitness_gymhouse_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'fitness_gymhouse_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'fitness_gymhouse_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Fitness Gymhouse 1.0
 * @see fitness-gymhouse_customize_register()
 *
 * @return void
 */
function fitness_gymhouse_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Fitness Gymhouse 1.0
 * @see fitness-gymhouse_customize_register()
 *
 * @return void
 */
function fitness_gymhouse_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function fitness_gymhouse_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Fitness_Gymhouse_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Fitness_Gymhouse_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
		 	new Fitness_Gymhouse_Customize_Section_Pro(
				$manager,
		 		'fitness_gymhouse_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Fitness Gymhouse Pro', 'fitness-gymhouse' ),
					'pro_text' => esc_html__( 'Go Pro', 'fitness-gymhouse' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/premium-fitness-wordpress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'fitness-gymhouse-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'fitness-gymhouse-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Fitness_Gymhouse_Customize::get_instance();