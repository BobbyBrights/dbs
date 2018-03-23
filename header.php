<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dbs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114593525-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-114593525-1');
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="loader">
		<div id="loader-letters">
			<div class="loader-letters-box">
				<div id="loader-d">D<br/>D</div>
				<div id="loader-b">B<br/>B</div>
				<div id="loader-s">S<br/>S</div>	
			</div>	 
		</div>
	</div>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dbs' ); ?></a>

		<header id="masthead" class="site-header">
			<section class="site-branding">
				<div class="header-logo">
					<object class="header-logo-image-white" data="<?php echo get_stylesheet_directory_uri(); ?>/images/dbs_developments-mobile-logo-white.svg"></object>
					<object class="header-logo-image-desktop-white" data="<?php echo get_stylesheet_directory_uri(); ?>/images/dbs-developments-logo-white.svg"></object>						
					<a href="/" class="header-logo-button"></a>	
				</div>
				<div class="header__hamburger" onclick="openMenu()">
						<div class="hamburger__line"></div>
						<div class="hamburger__line"></div>
						<div class="hamburger__line"></div>
				</div>  
				<div class="header__desktop-nav">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
					<a href="/contact" class="menu-contact-button">Contact</a>					
				</div>
			</section><!-- .site-branding -->

			<section id="menu-overlay" class="main-navigation">
				<div id="menu-overlay-content">
					<div id="menu-close-wrapper">
						<a href="javascript:void(0)" class="menu-close" onclick="closeMenu()"></a>
					</div>
					<div id="menu-content">
						<div class="menu-top-wrap">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
							?>
							<a href="/contact" class="menu-contact-button">Contact</a>
						</div>

						<div class="menu-bottom-wrap">
							<div class="menu-social">
								<span>Follow Us</span>
								<div class="menu-social-icons">
									<a href="https://www.instagram.com/dbsdevelopments/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DBS_social_icons-instagram.svg"/></a>
									<a href="https://www.linkedin.com/company/dbs-developments" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DBS_social_icons-linkedin.svg"/></a>				
								</div>
							</div>
							<div class="menu-contact">
								<a class="menu-contact-email" href="mailto:info@dbsdevelopments.com">info@dbsdevelopments.ca</a>
								<a class="menu-contact-phone" href="tel:4164290969">416.429.0969</a>
								<div class="menu-contact-address" href="">11 Curity Ave.,<br>Toronto, On<br>M4B 1X4</div>
							</div>
						</div>

					</div>
				</div>
			</section><!-- #menu-overlay -->

			<section id="contact-form">
				<div id="contact-form-content">
					<div id="contact-close-wrapper">
						<a href="javascript:void(0)" class="contact-close" onclick="closeForm()"></a>
					</div>
					<?php echo do_shortcode('[wpforms id="101"]') ?>
				</div>
			</section><!-- #contact-form -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
