<?php
/**
 * Expert Blogger: Customizer
 *
 * @subpackage Expert Blogger
 * @since 1.0
 */

use WPTRT\Customize\Section\Luzuk_Expert_Blogger_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Luzuk_Expert_Blogger_Button::class );

	$manager->add_section(
		new Luzuk_Expert_Blogger_Button( $manager, 'luzuk_expert_blogger_pro', [
			'title' => __( 'Expert Blogger Pro', 'expert-blogger' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'expert-blogger' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/premium-blog-expert-wordpress-theme/', 'expert-blogger')
		] )
	);

} );


// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'expert-blogger-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'expert-blogger-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function luzuk_expert_blogger_customize_register( $wp_customize ) {

	$wp_customize->add_setting('luzuk_expert_blogger_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('luzuk_expert_blogger_logo_padding',array(
		'label' => __('Logo Margin','expert-blogger'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('luzuk_expert_blogger_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_float'
	));
	$wp_customize->add_control('luzuk_expert_blogger_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','expert-blogger'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_float'
	));
	$wp_customize->add_control('luzuk_expert_blogger_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','expert-blogger'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_float'
	));
	$wp_customize->add_control('luzuk_expert_blogger_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','expert-blogger'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_float'
 	));
 	$wp_customize->add_control('luzuk_expert_blogger_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','expert-blogger'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('luzuk_expert_blogger_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_checkbox'
	));
	$wp_customize->add_control('luzuk_expert_blogger_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','expert-blogger'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'luzuk_expert_blogger_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('luzuk_expert_blogger_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_checkbox'
	));
	$wp_customize->add_control('luzuk_expert_blogger_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','expert-blogger'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'luzuk_expert_blogger_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'luzuk_expert_blogger_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'expert-blogger' ),
		'description' => __( 'Description of what this panel does.', 'expert-blogger' ),
	) );

	$wp_customize->add_section( 'luzuk_expert_blogger_theme_options_section', array(
    	'title'      => __( 'General Settings', 'expert-blogger' ),
		'priority'   => 30,
		'panel' => 'luzuk_expert_blogger_panel_id'
	) );

	$wp_customize->add_setting('luzuk_expert_blogger_theme_options',array(
		'default' => 'One Column',
		'sanitize_callback' => 'luzuk_expert_blogger_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_expert_blogger_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','expert-blogger'),
		'section' => 'luzuk_expert_blogger_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-blogger'),
		   'Right Sidebar' => __('Right Sidebar','expert-blogger'),
		   'One Column' => __('One Column','expert-blogger')
		),
	));

	$wp_customize->add_setting('luzuk_expert_blogger_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'luzuk_expert_blogger_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_expert_blogger_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','expert-blogger'),
        'section' => 'luzuk_expert_blogger_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-blogger'),
            'Right Sidebar' => __('Right Sidebar','expert-blogger'),
            'One Column' => __('One Column','expert-blogger')
        ),
	));

	$wp_customize->add_setting('luzuk_expert_blogger_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'luzuk_expert_blogger_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_expert_blogger_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','expert-blogger'),
        'section' => 'luzuk_expert_blogger_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-blogger'),
            'Right Sidebar' => __('Right Sidebar','expert-blogger'),
            'One Column' => __('One Column','expert-blogger')
        ),
	));

	$wp_customize->add_setting('luzuk_expert_blogger_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'luzuk_expert_blogger_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_expert_blogger_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','expert-blogger'),
        'section' => 'luzuk_expert_blogger_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-blogger'),
            'Right Sidebar' => __('Right Sidebar','expert-blogger'),
            'One Column' => __('One Column','expert-blogger')
        ),
	));

	$wp_customize->add_setting( 'luzuk_expert_blogger_boxfull_width', array(
		'default'           => '',
		'sanitize_callback' => 'luzuk_expert_blogger_sanitize_choices'
	));
	
	$wp_customize->add_control( 'luzuk_expert_blogger_boxfull_width', array(
		'label'    => __( 'Section Width', 'expert-blogger' ),
		'section'  => 'luzuk_expert_blogger_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'container'  => __('Box Width', 'expert-blogger'),
			'container-fluid' => __('Full Width', 'expert-blogger'),
			'none' => __('None', 'expert-blogger')
		),
	));

	$wp_customize->add_setting( 'luzuk_expert_blogger_dropdown_anim', array(
		'default'           => 'None',
		'sanitize_callback' => 'luzuk_expert_blogger_sanitize_choices'
	));
	$wp_customize->add_control( 'luzuk_expert_blogger_dropdown_anim', array(
		'label'    => __( 'Menu Dropdown Animations', 'expert-blogger' ),
		'section'  => 'luzuk_expert_blogger_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInUp'  => __('bounceInUp', 'expert-blogger'),
			'fadeInUp' => __('fadeInUp', 'expert-blogger'),
			'zoomIn'    => __('zoomIn', 'expert-blogger'),
			'None'    => __('None', 'expert-blogger')
		),
	));
 
	//Header
	$wp_customize->add_section( 'luzuk_expert_blogger_header' , array(
    	'title'    => __( 'Header Settings', 'expert-blogger' ),
		'priority' => null,
		'panel' => 'luzuk_expert_blogger_panel_id'
	) );

	$wp_customize->add_setting('luzuk_expert_blogger_twitterlink',array(
    	'default' => '#',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('luzuk_expert_blogger_twitterlink',array(
	   	'type' => 'url',
	   	'label' => __('Twitter Icon Link','expert-blogger'),
	   	'section' => 'luzuk_expert_blogger_header',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_fblink',array(
    	'default' => '#',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('luzuk_expert_blogger_fblink',array(
	   	'type' => 'url',
	   	'label' => __('Facebook Icon Link','expert-blogger'),
	   	'section' => 'luzuk_expert_blogger_header',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_linkedinlink',array(
    	'default' => '#',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('luzuk_expert_blogger_linkedinlink',array(
	   	'type' => 'url',
	   	'label' => __('Linkedin Icon Link','expert-blogger'),
	   	'section' => 'luzuk_expert_blogger_header',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_instalink',array(
    	'default' => '#',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('luzuk_expert_blogger_instalink',array(
	   	'type' => 'url',
	   	'label' => __('Instagram Icon Link','expert-blogger'),
	   	'section' => 'luzuk_expert_blogger_header',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_ytlink',array(
    	'default' => '#',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('luzuk_expert_blogger_ytlink',array(
	   	'type' => 'url',
	   	'label' => __('Youtube Icon Link','expert-blogger'),
	   	'section' => 'luzuk_expert_blogger_header',
	));

	
	
	$wp_customize->add_setting( 'luzuk_expert_blogger_headertopbg_col', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_headertopbg_col', array(
		'label' => 'Top Head BG Color',
		'section' => 'luzuk_expert_blogger_header',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_headerbottombg_col', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_headerbottombg_col', array(
		'label' => 'Bottom Head BG Color',
		'section' => 'luzuk_expert_blogger_header',
	)));


	$wp_customize->add_setting( 'luzuk_expert_blogger_headertopsocialicon_col', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_headertopsocialicon_col', array(
		'label' => 'Social Icon Color',
		'section' => 'luzuk_expert_blogger_header',
	)));


	$wp_customize->add_setting( 'luzuk_expert_blogger_headertopsocialiconhover_col', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_headertopsocialiconhover_col', array(
		'label' => 'Social Icon Hover Color',
		'section' => 'luzuk_expert_blogger_header',
	)));


	$wp_customize->add_setting( 'luzuk_expert_blogger_menu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_menu_color', array(
		'label' => 'Menu Color',
		'section' => 'luzuk_expert_blogger_header',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_menuhover_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_menuhover_color', array(
		'label' => 'Menu Hover Color',
		'section' => 'luzuk_expert_blogger_header',
	)));


	$wp_customize->add_setting( 'luzuk_expert_blogger_submenu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_submenu_color', array(
		'label' => 'Submenu Text Color',
		'section' => 'luzuk_expert_blogger_header',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_submenubg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_submenubg_color', array(
		'label' => 'Submenu BG Color',
		'section' => 'luzuk_expert_blogger_header',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_header_searchbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_header_searchbg_color', array(
		'label' => 'Search BG Color',
		'section' => 'luzuk_expert_blogger_header',
	)));

	
	$wp_customize->add_setting( 'luzuk_expert_blogger_header_searchtext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_header_searchtext_color', array(
		'label' => 'Search Text Color',
		'section' => 'luzuk_expert_blogger_header',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_header_searchicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_header_searchicon_color', array(
		'label' => 'Search Icon Color',
		'section' => 'luzuk_expert_blogger_header',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_header_searchiconbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_header_searchiconbg_color', array(
		'label' => 'Search Icon BG Color',
		'section' => 'luzuk_expert_blogger_header',
	)));


	//home page blogs
	$wp_customize->add_section( 'luzuk_expert_blogger_blogs_section' , array(
    	'title'    => __( 'Blog Settings', 'expert-blogger' ),
		'priority' => null,
		'panel' => 'luzuk_expert_blogger_panel_id'
	) );

	$wp_customize->add_setting('luzuk_expert_blogger_blogs_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_float'
	));
	$wp_customize->add_control('luzuk_expert_blogger_blogs_font_size',array(
		'type' => 'number',
		'description' => __('Title Font Size','expert-blogger'),
		'section' => 'luzuk_expert_blogger_blogs_section',
	));

	$wp_customize->add_setting('luzuk_expert_blogger_blogs_text_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_float'
	));
	$wp_customize->add_control('luzuk_expert_blogger_blogs_text_font_size',array(
		'type' => 'number',
		'description' => __('Text Font Size','expert-blogger'),
		'section' => 'luzuk_expert_blogger_blogs_section',
	));

	$wp_customize->add_setting( 'luzuk_expert_blogger_blogstitlecolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_blogstitlecolor', array(
		'label' => 'Title Color',
		'section' => 'luzuk_expert_blogger_blogs_section',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_blogsdescriptioncolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_blogsdescriptioncolor', array(
		'label' => 'Description Color',
		'section' => 'luzuk_expert_blogger_blogs_section',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_blogsbtntextcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_blogsbtntextcolor', array(
		'label' => 'Button Text Color',
		'section' => 'luzuk_expert_blogger_blogs_section',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_blogsbtnbgcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_blogsbtnbgcolor', array(
		'label' => 'Button BG Color',
		'section' => 'luzuk_expert_blogger_blogs_section',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_blogsshareiconcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_blogsshareiconcolor', array(
		'label' => 'Share Icons Color',
		'section' => 'luzuk_expert_blogger_blogs_section',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_blogsshareiconbgcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_blogsshareiconbgcolor', array(
		'label' => 'Share Icons BG Color',
		'section' => 'luzuk_expert_blogger_blogs_section',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_blogscontentbgcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_blogscontentbgcolor', array(
		'label' => 'Content BG Color',
		'section' => 'luzuk_expert_blogger_blogs_section',
	)));



	//Footer
    $wp_customize->add_section( 'luzuk_expert_blogger_footer', array(
    	'title'  => __( 'Footer Settings', 'expert-blogger' ),
		'priority' => null,
		'panel' => 'luzuk_expert_blogger_panel_id'
	) );

	$wp_customize->add_setting('luzuk_expert_blogger_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'luzuk_expert_blogger_sanitize_checkbox'
    ));
    $wp_customize->add_control('luzuk_expert_blogger_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','expert-blogger'),
       'section' => 'luzuk_expert_blogger_footer'
    ));

    $wp_customize->add_setting('luzuk_expert_blogger_footer_copy',array(
		'default' => 'Expert Blogger WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('luzuk_expert_blogger_footer_copy',array(
		'label'	=> __('Copyright Text','expert-blogger'),
		'section' => 'luzuk_expert_blogger_footer',
		'setting' => 'luzuk_expert_blogger_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('luzuk_expert_blogger_footercopy_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('luzuk_expert_blogger_footercopy_font_size',array(
		'label'	=> __('Copyright Font Size','expert-blogger'),
		'section' => 'luzuk_expert_blogger_footer',
		'setting' => 'luzuk_expert_blogger_footercopy_font_size',
		'type' => 'number'
	));

	$wp_customize->add_setting( 'luzuk_expert_blogger_footertext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_footertext_color', array(
		'label' => 'Text Color',
		'section' => 'luzuk_expert_blogger_footer',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_footeractivemenu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_footeractivemenu_color', array(
		'label' => 'Active Menu Color',
		'section' => 'luzuk_expert_blogger_footer',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_footerbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_footerbg_color', array(
		'label' => 'BG Color',
		'section' => 'luzuk_expert_blogger_footer',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_footercopyright_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_footercopyright_color', array(
		'label' => 'Copyright Color',
		'section' => 'luzuk_expert_blogger_footer',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_footercopyrightbrd_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_footercopyrightbrd_color', array(
		'label' => 'Border Color',
		'section' => 'luzuk_expert_blogger_footer',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_footerscrolltotoptext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_footerscrolltotoptext_color', array(
		'label' => 'Scroll To Top Icon Color',
		'section' => 'luzuk_expert_blogger_footer',
	)));

	$wp_customize->add_setting( 'luzuk_expert_blogger_footerscrolltotopbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_expert_blogger_footerscrolltotopbg_color', array(
		'label' => 'Scroll To Top BG Color',
		'section' => 'luzuk_expert_blogger_footer',
	)));

	

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'luzuk_expert_blogger_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'luzuk_expert_blogger_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'luzuk_expert_blogger_customize_register' );

function luzuk_expert_blogger_customize_partial_blogname() {
	bloginfo( 'name' );
}

function luzuk_expert_blogger_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if (class_exists('WP_Customize_Control')) {

   	class Luzuk_Expert_Blogger_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="expert-blogger-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="expert-blogger-icon-list clearfix">
	                <?php
	                $luzuk_expert_blogger_font_awesome_icon_array = luzuk_expert_blogger_font_awesome_icon_array();
	                foreach ($luzuk_expert_blogger_font_awesome_icon_array as $luzuk_expert_blogger_font_awesome_icon) {
	                   $icon_class = $this->value() == $luzuk_expert_blogger_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($luzuk_expert_blogger_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function luzuk_expert_blogger_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'luzuk_expert_blogger_customizer_script' );