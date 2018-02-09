<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dbs
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dbs-developments-toronto-skyline.jpg" alt="">
      <div class="main__overlay"></div>
      <div class="contact-form">
        <div class="contact-form__x-button-wrap">
          <div class="contact-form__x-button"></div>
        </div>

        <?php echo do_shortcode('[wpforms id="5" title="false" description="false"]') ?>

        <div class="contact-form__information">
          <a href="mailto:info@dbsdevelopments.ca" class="contact-form__information-email">info@dbsdevelopments.ca</a> <br>
          <a href="tel:416.429.0969" class="contact-form__information-phone">416.429.0969</a>
          <p>11 Curity Ave.,<br> Toronto, On <br> M4B 1X4</p>
        </div>
      </div>

      <header>
        <div class="header__logo">
          <object id="desktop-logo-svg" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/images/dbs-developments-logo.svg">Your browser does not support SVGs</object>
          <object id="mobile-logo-svg" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/images/dbs_developments-mobile-logo-green.svg">Your browser does not support SVGs</object>
        </div>
        <div class="header__hamburger">
          <div class="hamburger__line"></div>
          <div class="hamburger__line"></div>
          <div class="hamburger__line"></div>
        </div>  
        <div class="header__contact-us">
          <span>contact us</span>   
        </div>
      </header>

      <div class="slogans">
        <div class="slogan__innovation slogan">innovation.</div>
        <div class="slogan__community slogan">community.</div>
        <div class="slogan__legacy slogan">legacy.</div>
        <div class="slogan__comming-soon slogan">coming soon</div> 
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
