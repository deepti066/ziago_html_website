<?php
/**
 * The header for our theme
 *
 * @subpackage Expert Blogger
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'expert-blogger' ); ?></a>

<div id="header">
	<div class="main-header">
		<div class="tphead">
			<div class="container">
				<div class="row mr-0">
					<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-2 col-sm-2 col-2 pl-0 m-headbox">
						<div class="m-head">
							<div class="header-inner section-inner">
								<div class="header-titles-wrapper">
									<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
										<span class="toggle-inner">
											<span class="toggle-icon">
												<i class="fas fa-bars"></i>
											</span>
											<!-- <span class="toggle-text"><//?php _e( 'Menu', 'expert-blogger' ); ?></span> -->
										</span>
									</button><!-- .nav-toggle -->
								</div><!-- .header-titles-wrapper -->

								<div class="header-navigation-wrapper">
									<?php
									if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
										?>
										<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'expert-blogger' ); ?>">
											<ul class="primary-menu reset-list-style">
												<?php
												if ( has_nav_menu( 'primary' ) ) {

													wp_nav_menu(
														array(
															'container'  => '',
															'items_wrap' => '%3$s',
															'theme_location' => 'primary',
														)
													);

												} elseif ( ! has_nav_menu( 'expanded' ) ) {

													wp_list_pages(
														array(
															'match_menu_classes' => true,
															'show_sub_menu_icons' => true,
															'title_li' => false,
															'walker'   => new Expert_Blogger_Walker_Page(),
														)
													);

												}
												?>
											</ul>
										</nav><!-- .primary-menu-wrapper -->
									<?php } ?>
								</div><!-- .header-navigation-wrapper -->
							</div><!-- .header-inner -->
							<?php
								// Output the menu modal.
								get_template_part( '/inc/modal-menu' );
							?>
							<!-- </div> -->
						</div>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-10 col-sm-10 col-10 pd-0">
						<div class="s-media">
							<li>
								<?php 
									$twitter_link = get_theme_mod('luzuk_expert_blogger_twitterlink', '#');
									if ($twitter_link) { 
									?>
										<a href="<?php echo esc_html($twitter_link); ?>">
											<i class="fab fa-twitter"></i>
										</a>
								<?php } ?>
							</li> 
							<li>
								<?php 
									$fb_link = get_theme_mod('luzuk_expert_blogger_fblink', '#');
									if ($fb_link) { 
									?>
										<a href="<?php echo esc_html($fb_link); ?>">
											<i class="fab fa-facebook-f"></i>
										</a>
								<?php } ?>
							</li>
							<li>
								<?php 
									$linkedin_link = get_theme_mod('luzuk_expert_blogger_linkedinlink', '#');
									if ($linkedin_link) { 
									?>
										<a href="<?php echo esc_html($linkedin_link); ?>">
											<i class="fab fa-linkedin-in"></i>						
										</a>
								<?php } ?>
							</li>
							<li>
								<?php 
									$linkedin_link = get_theme_mod('luzuk_expert_blogger_instalink', '#');
									if ($linkedin_link) { 
									?>
										<a href="<?php echo esc_html($linkedin_link); ?>">
											<i class="fa-brands fa-instagram"></i>					
										</a>
								<?php } ?>
							</li>
							<li>
								<?php 
									$linkedin_link = get_theme_mod('luzuk_expert_blogger_ytlink', '#');
									if ($linkedin_link) { 
									?>
										<a href="<?php echo esc_html($linkedin_link); ?>">
											<i class="fa-brands fa-youtube"></i>				
										</a>
								<?php } ?>
							</li>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="bott-head">
			<div class="container">
				<div class="row mr-0">
					<div class="col-lg-4 col-md-5 col-sm-12">
						<div class="logo">
							<?php if ( has_custom_logo() ) : ?>
								<?php the_custom_logo(); ?>
							<?php endif; ?>
							<?php if (get_theme_mod('luzuk_expert_blogger_show_site_title',true)) {?>
								<?php $blog_info = get_bloginfo( 'name' ); ?>
								<?php if ( ! empty( $blog_info ) ) : ?>
									<?php if ( is_front_page() && is_home() ) : ?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php endif; ?>
								<?php endif; ?>
							<?php }?>
							<?php if (get_theme_mod('luzuk_expert_blogger_show_tagline',true)) {?>
								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description"><?php echo esc_html($description); ?></p>
								<?php endif; ?>
							<?php }?>
						</div>
					</div>
					<div class=" col-lg-4 col-md-7 col-sm-12 h-btnbox offset-lg-4">
						<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
							<?php //this prints out your search form 
								get_search_form(); 
							?>
							<div class="clearfix"></div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <//?php if(is_singular()) {?> -->
	<!-- <div id="inner-pages-header">
		<div class="header-overlay"></div>
	    <div class="header-content">
		    <div class="container"> 
		      	<h1><//?php single_post_title(); ?></h1>
		      	<div class="innheader-border"></div>
		      	<div class="theme-breadcrumb mt-2">
					<//?php luzuk_expert_blogger_breadcrumb();?>
				</div>
		    </div>
		</div>
	</div> -->
<!-- <//?php } ?> -->