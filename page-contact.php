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
      <div id="contact-page">
        <div class="contact__text">
          <div class="contact__title">Contact</div>
          <div class="contact__head-office">Head Office</div>
          <div class="contact__address">11 Curity Avenue, Unit 1</br>Toronto, On M4B 1X4</div>
          <a href="tel:14164290969" class="contact__phone">(416) 429.0969</a>
          <a href="mailto:info@dbsdevelopments.ca" class="contact__email">info@dbsdevelopments.ca</a>
        </div>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf_Wlb9xy9a6gg2xvZ2Wt03-rDM-JzQR4"></script>	 -->
        <div class="contact__map">
          <?php $location = get_field('map'); 
          if( !empty($location) ): ?>
            <div class="acf-map">
              <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
          <?php endif; ?>
        </div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
