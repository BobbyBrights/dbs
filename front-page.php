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
      
      <div class="front-page__landing-page">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dbs-developments-toronto-skyline.jpg" alt="">
        <div class="front-page__landing-page-overlay"></div>
   
        <div class="front-page__landing-page-slogans">
          <div class="front-page__landing-page-slogan front-page__landing-page-slogan-innovation">innovation.</div>
          <div class="front-page__landing-page-slogan front-page__landing-page-slogan-community">community.</div>
          <div class="front-page__landing-page-slogan front-page__landing-page-slogan-legacy">legacy.</div>
          <a href="" class="front-page__landing-page-slogan front-page__landing-page-slogan-view-projects">view projects +</a>
        </div>
      </div>
      
      <div class="front-page__content">
        <?php
          $aboutUsContent = get_field('front_page_about_us');

          if ( $aboutUsContent ):
        ?>

        <div class="front-page__content-image">
          <img src="<?php echo $aboutUsContent['front_page_about_us_image']?>" alt="">
        </div>
        <div class="front-page__content-description">
          <div class="front-page__content-description-header">
            <?php echo $aboutUsContent['front_page_about_us_header']?>
          </div>
          <div class="front-page__content-description-detail">
            <?php echo $aboutUsContent['front_page_about_us_detail']?>
          </div>
          <div class="front-page__content-description-link">
            <a href="">about us +</a>
          </div>
         
        </div>

        <?php endif; ?>
      </div>

      <div class="front-page__content">
        <?php
          $contactUsContent = get_field('front_page_contact_us');

          if ( $contactUsContent ):
        ?>

        <div class="front-page__content-image">
          <img src="<?php echo $contactUsContent['front_page_contact_us_image']?>" alt="">
        </div>
        <div class="front-page__content-description">
          <div class="front-page__content-description-header">
            <?php echo $contactUsContent['front_page_contact_us_header']?>
          </div>
          <div class="front-page__content-description-detail">
            <?php echo $contactUsContent['front_page_contact_us_detail']?>
          </div>
          <div class="front-page__content-description-link">
            <a href="">contact us +</a>
          </div>
        </div>

        <?php endif; ?>
      </div>
      
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
