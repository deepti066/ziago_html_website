<?php 

	$luzuk_expert_blogger_custom_style = '';

	// Logo Size
	$luzuk_expert_blogger_logo_top_padding = get_theme_mod('luzuk_expert_blogger_logo_top_padding');
	$luzuk_expert_blogger_logo_bottom_padding = get_theme_mod('luzuk_expert_blogger_logo_bottom_padding');
	$luzuk_expert_blogger_logo_left_padding = get_theme_mod('luzuk_expert_blogger_logo_left_padding');
	$luzuk_expert_blogger_logo_right_padding = get_theme_mod('luzuk_expert_blogger_logo_right_padding');

	if( $luzuk_expert_blogger_logo_top_padding != '' || $luzuk_expert_blogger_logo_bottom_padding != '' || $luzuk_expert_blogger_logo_left_padding != '' || $luzuk_expert_blogger_logo_right_padding != ''){
		$luzuk_expert_blogger_custom_style .=' .logo {';
			$luzuk_expert_blogger_custom_style .=' padding-top: '.esc_attr($luzuk_expert_blogger_logo_top_padding).'px; padding-bottom: '.esc_attr($luzuk_expert_blogger_logo_bottom_padding).'px; padding-left: '.esc_attr($luzuk_expert_blogger_logo_left_padding).'px; padding-right: '.esc_attr($luzuk_expert_blogger_logo_right_padding).'px;';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	// Header Image
	$header_image_url = luzuk_expert_blogger_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$luzuk_expert_blogger_custom_style .=' #inner-pages-header {';
			$luzuk_expert_blogger_custom_style .=' background-image: url('. esc_url( $header_image_url ).') !important; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$luzuk_expert_blogger_custom_style .=' }';

		$luzuk_expert_blogger_custom_style .='  #header .top-head {';
			$luzuk_expert_blogger_custom_style .=' background: none ';
		$luzuk_expert_blogger_custom_style .=' }';
	} else {
		$luzuk_expert_blogger_custom_style .=' #inner-pages-header {';
			$luzuk_expert_blogger_custom_style .=' background: radial-gradient(circle at center, rgba(0,0,0,0) 0%, #000000 100%); ';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_slider_hide_show = get_theme_mod('luzuk_expert_blogger_slider_hide_show',false);
	if( $luzuk_expert_blogger_slider_hide_show == true){
		$luzuk_expert_blogger_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$luzuk_expert_blogger_custom_style .=' display:none;';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_headertopbg_col = get_theme_mod('luzuk_expert_blogger_headertopbg_col');
	if ( $luzuk_expert_blogger_headertopbg_col != '') {
		$luzuk_expert_blogger_custom_style .=' #header .tphead {';
			$luzuk_expert_blogger_custom_style .=' background-color:'.esc_attr($luzuk_expert_blogger_headertopbg_col).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_headerbottombg_col = get_theme_mod('luzuk_expert_blogger_headerbottombg_col');
	if ( $luzuk_expert_blogger_headerbottombg_col != '') {
		$luzuk_expert_blogger_custom_style .='#header .bott-head {';
			$luzuk_expert_blogger_custom_style .=' background-color:'.esc_attr($luzuk_expert_blogger_headerbottombg_col).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_headertopsocialicon_col = get_theme_mod('luzuk_expert_blogger_headertopsocialicon_col');
	if ( $luzuk_expert_blogger_headertopsocialicon_col != '') {
		$luzuk_expert_blogger_custom_style .=' #header .s-media a i {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_headertopsocialicon_col).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_headertopsocialicon_col = get_theme_mod('luzuk_expert_blogger_headertopsocialicon_col');
	if ( $luzuk_expert_blogger_headertopsocialicon_col != '') {
		$luzuk_expert_blogger_custom_style .=' #header .s-media a i {';
			$luzuk_expert_blogger_custom_style .=' border-color:'.esc_attr($luzuk_expert_blogger_headertopsocialicon_col).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_headertopsocialiconhover_col = get_theme_mod('luzuk_expert_blogger_headertopsocialiconhover_col');
	if ( $luzuk_expert_blogger_headertopsocialiconhover_col != '') {
		$luzuk_expert_blogger_custom_style .=' #header .s-media a:hover i {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_headertopsocialiconhover_col).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}


	$luzuk_expert_blogger_menu_color = get_theme_mod('luzuk_expert_blogger_menu_color');
	if ( $luzuk_expert_blogger_menu_color != '') {
		$luzuk_expert_blogger_custom_style .=' .primary-menu a, .primary-menu li .icon{';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_menu_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_menuhover_color = get_theme_mod('luzuk_expert_blogger_menuhover_color');
	if ( $luzuk_expert_blogger_menuhover_color != '') {
		$luzuk_expert_blogger_custom_style .='.primary-menu li:hover .icon, .primary-menu li a:hover{';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_menuhover_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_submenu_color = get_theme_mod('luzuk_expert_blogger_submenu_color');
	if ( $luzuk_expert_blogger_submenu_color != '') {
		$luzuk_expert_blogger_custom_style .='.primary-menu ul a{';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_submenu_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_submenubg_color = get_theme_mod('luzuk_expert_blogger_submenubg_color');
	if ( $luzuk_expert_blogger_submenubg_color != '') {
		$luzuk_expert_blogger_custom_style .='.primary-menu li ul.sub-menu{';
			$luzuk_expert_blogger_custom_style .=' background:'.esc_attr($luzuk_expert_blogger_submenubg_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_header_searchbg_color = get_theme_mod('luzuk_expert_blogger_header_searchbg_color');
	if ( $luzuk_expert_blogger_header_searchbg_color != '') {
		$luzuk_expert_blogger_custom_style .='.search-form .search-field {';
			$luzuk_expert_blogger_custom_style .=' background:'.esc_attr($luzuk_expert_blogger_header_searchbg_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_header_searchtext_color = get_theme_mod('luzuk_expert_blogger_header_searchtext_color');
	if ( $luzuk_expert_blogger_header_searchtext_color != '') {
		$luzuk_expert_blogger_custom_style .=' .search-form .search-field::placeholder, .search-form input {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_header_searchtext_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_header_searchicon_color = get_theme_mod('luzuk_expert_blogger_header_searchicon_color');
	if ( $luzuk_expert_blogger_header_searchicon_color != '') {
		$luzuk_expert_blogger_custom_style .=' .search-form:after {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_header_searchicon_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_header_searchiconbg_color = get_theme_mod('luzuk_expert_blogger_header_searchiconbg_color');
	if ( $luzuk_expert_blogger_header_searchiconbg_color != '') {
		$luzuk_expert_blogger_custom_style .=' .search-form:after {';
			$luzuk_expert_blogger_custom_style .=' background:'.esc_attr($luzuk_expert_blogger_header_searchiconbg_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}



	//blogs settings
	$luzuk_expert_blogger_blogs_font_size = get_theme_mod('luzuk_expert_blogger_blogs_font_size');
	if ( $luzuk_expert_blogger_blogs_font_size != '') {
		$luzuk_expert_blogger_custom_style .='.article_content h3{';
			$luzuk_expert_blogger_custom_style .=' font-size:'.esc_attr($luzuk_expert_blogger_blogs_font_size).'px;';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogs_text_font_size = get_theme_mod('luzuk_expert_blogger_blogs_text_font_size');
	if ( $luzuk_expert_blogger_blogs_text_font_size != '') {
		$luzuk_expert_blogger_custom_style .='.article_content p{';
			$luzuk_expert_blogger_custom_style .=' font-size:'.esc_attr($luzuk_expert_blogger_blogs_text_font_size).'px;';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogstitlecolor = get_theme_mod('luzuk_expert_blogger_blogstitlecolor');
	if ( $luzuk_expert_blogger_blogstitlecolor != '') {
		$luzuk_expert_blogger_custom_style .='.article_content h3, .single-post .article-text h2 {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_blogstitlecolor).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogsdescriptioncolor = get_theme_mod('luzuk_expert_blogger_blogsdescriptioncolor');
	if ( $luzuk_expert_blogger_blogsdescriptioncolor != '') {
		$luzuk_expert_blogger_custom_style .=' .article_content p {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_blogsdescriptioncolor).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogsbtntextcolor = get_theme_mod('luzuk_expert_blogger_blogsbtntextcolor');
	if ( $luzuk_expert_blogger_blogsbtntextcolor != '') {
		$luzuk_expert_blogger_custom_style .=' #post_section .read-btn a {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_blogsbtntextcolor).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogsbtnbgcolor = get_theme_mod('luzuk_expert_blogger_blogsbtnbgcolor');
	if ( $luzuk_expert_blogger_blogsbtnbgcolor != '') {
		$luzuk_expert_blogger_custom_style .=' #post_section .read-btn a {';
			$luzuk_expert_blogger_custom_style .=' background:'.esc_attr($luzuk_expert_blogger_blogsbtnbgcolor).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogsshareiconcolor = get_theme_mod('luzuk_expert_blogger_blogsshareiconcolor');
	if ( $luzuk_expert_blogger_blogsshareiconcolor != '') {
		$luzuk_expert_blogger_custom_style .=' #post_section .socialMedia ul li a.site-button i,
		#post_section .socialMedia ul li a.site-button {';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_blogsshareiconcolor).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogsshareiconbgcolor = get_theme_mod('luzuk_expert_blogger_blogsshareiconbgcolor');
	if ( $luzuk_expert_blogger_blogsshareiconbgcolor != '') {
		$luzuk_expert_blogger_custom_style .='  #post_section .socialMedia ul li a.site-button {';
			$luzuk_expert_blogger_custom_style .=' background:'.esc_attr($luzuk_expert_blogger_blogsshareiconbgcolor).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_blogscontentbgcolor = get_theme_mod('luzuk_expert_blogger_blogscontentbgcolor');
	if ( $luzuk_expert_blogger_blogscontentbgcolor != '') {
		$luzuk_expert_blogger_custom_style .='  #post_section .article_content {';
			$luzuk_expert_blogger_custom_style .=' background:'.esc_attr($luzuk_expert_blogger_blogscontentbgcolor).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}



	//site title tagline
	$luzuk_expert_blogger_site_title_color = get_theme_mod('luzuk_expert_blogger_site_title_color');
	if ( $luzuk_expert_blogger_site_title_color != '') {
		$luzuk_expert_blogger_custom_style .=' h1.site-title a, p.site-title a{';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_site_title_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_site_tagline_color = get_theme_mod('luzuk_expert_blogger_site_tagline_color');
	if ( $luzuk_expert_blogger_site_tagline_color != '') {
		$luzuk_expert_blogger_custom_style .=' p.site-description{';
			$luzuk_expert_blogger_custom_style .=' color:'.esc_attr($luzuk_expert_blogger_site_tagline_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	//layout width
	$luzuk_expert_blogger_boxfull_width = get_theme_mod('luzuk_expert_blogger_boxfull_width');
	if ($luzuk_expert_blogger_boxfull_width !== '') {
		switch ($luzuk_expert_blogger_boxfull_width) {
			case 'container':
				$luzuk_expert_blogger_custom_style .= ' body, #header, .bottom-header {
					max-width: 1140px;
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'container-fluid':
				// $luzuk_expert_blogger_custom_style .= ' body, #header, .bottom-header { 
				// 	width: 100%;
				// 	padding-right: 15px;
				// 	padding-left: 15px;
				// 	margin-right: auto;
				// 	margin-left: auto;
				// 	}';
				break;
			case 'none':
				// No specific width specified, so no additional style needed.
				break;
			default:
				// Handle unexpected values.
				break;
		}
	}

	//Menu animation
	$luzuk_expert_blogger_dropdown_anim = get_theme_mod('luzuk_expert_blogger_dropdown_anim');

	if ( $luzuk_expert_blogger_dropdown_anim != '') {
		$luzuk_expert_blogger_custom_style .=' .primary-menu ul{';
			$luzuk_expert_blogger_custom_style .=' animation:'.esc_attr($luzuk_expert_blogger_dropdown_anim).' 1s ease;';
		$luzuk_expert_blogger_custom_style .=' }';
	}


	//footer colors
	$luzuk_expert_blogger_footercopy_font_size = get_theme_mod('luzuk_expert_blogger_footercopy_font_size');
	if ( $luzuk_expert_blogger_footercopy_font_size != '') {
		$luzuk_expert_blogger_custom_style .='#colophon p{';
			$luzuk_expert_blogger_custom_style .=' font-size:'.esc_attr($luzuk_expert_blogger_footercopy_font_size).'px;';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_footertext_color = get_theme_mod('luzuk_expert_blogger_footertext_color');
	if ( $luzuk_expert_blogger_footertext_color != '') {
		$luzuk_expert_blogger_custom_style .=' #colophon h1, #colophon h2, #colophon h3, #colophon h4, #colophon h5,
		 #colophon h6,#colophon,#colophon p,.site-footer a, .site-footer p, #colophon caption, .site-footer .widget_rss .rss-date,
		  .site-footer .widget_rss li cite {';
			$luzuk_expert_blogger_custom_style .=' color: '.esc_attr($luzuk_expert_blogger_footertext_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}	

	$luzuk_expert_blogger_footeractivemenu_color = get_theme_mod('luzuk_expert_blogger_footeractivemenu_color');
	if ( $luzuk_expert_blogger_footeractivemenu_color != '') {
		$luzuk_expert_blogger_custom_style .=' .site-footer .current-menu-item a {';
			$luzuk_expert_blogger_custom_style .=' color: '.esc_attr($luzuk_expert_blogger_footeractivemenu_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}	

	$luzuk_expert_blogger_footerbg_color = get_theme_mod('luzuk_expert_blogger_footerbg_color');
	if ( $luzuk_expert_blogger_footerbg_color != '') {
		$luzuk_expert_blogger_custom_style .=' .footer-overlay {';
			$luzuk_expert_blogger_custom_style .=' background: '.esc_attr($luzuk_expert_blogger_footerbg_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}


	$luzuk_expert_blogger_footercopyright_color = get_theme_mod('luzuk_expert_blogger_footercopyright_color');
	if ( $luzuk_expert_blogger_footercopyright_color != '') {
		$luzuk_expert_blogger_custom_style .=' #colophon .site-info p {';
			$luzuk_expert_blogger_custom_style .=' color: '.esc_attr($luzuk_expert_blogger_footercopyright_color).' !important;';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_footercopyrightbrd_color = get_theme_mod('luzuk_expert_blogger_footercopyrightbrd_color');
	if ( $luzuk_expert_blogger_footercopyrightbrd_color != '') {
		$luzuk_expert_blogger_custom_style .=' .copyright {';
			$luzuk_expert_blogger_custom_style .=' border-color: '.esc_attr($luzuk_expert_blogger_footercopyrightbrd_color).' !important;';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_footerscrolltotoptext_color = get_theme_mod('luzuk_expert_blogger_footerscrolltotoptext_color');
	if ( $luzuk_expert_blogger_footerscrolltotoptext_color != '') {
		$luzuk_expert_blogger_custom_style .=' .back-to-top i {';
			$luzuk_expert_blogger_custom_style .=' color: '.esc_attr($luzuk_expert_blogger_footerscrolltotoptext_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}

	$luzuk_expert_blogger_footerscrolltotopbg_color = get_theme_mod('luzuk_expert_blogger_footerscrolltotopbg_color');
	if ( $luzuk_expert_blogger_footerscrolltotopbg_color != '') {
		$luzuk_expert_blogger_custom_style .=' .back-to-top {';
			$luzuk_expert_blogger_custom_style .=' background: '.esc_attr($luzuk_expert_blogger_footerscrolltotopbg_color).';';
		$luzuk_expert_blogger_custom_style .=' }';
	}