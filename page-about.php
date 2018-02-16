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
      <div id="about-page">
        <div class="about__landing-page">
          <img src="<?php echo get_field('landing_image'); ?>" alt="">
          <div class="about__landing-page-overlay"></div>
          <div class="about__landing-page-text"><?php echo get_field('landing_text'); ?></div>
        </div>

        <div class="about-page-body">
          <div class="about__opening-text">
            <?php echo get_field('opening_text'); ?>
          </div>

          <div class="about__our-legacy">
            <?php
              if( have_rows('our_legacy') ):
                while( have_rows('our_legacy') ): the_row();
            ?>
            <img class="about__our-legacy-large-img" src="<?php echo get_sub_field('large_image'); ?>"/>
            <span><?php echo get_sub_field('section_title') ?></span>
            <div class="about__our-legacy-small-txt">
              <?php echo get_sub_field('small_text'); ?>
            </div>
            <img class="about__our-legacy-small-img" src="<?php echo get_sub_field('small_image'); ?>"/>
            <div class="about__our-legacy-large-txt">
              <?php echo get_sub_field('large_text'); ?>          
            </div>
            <?php
                endwhile;
              endif;
            ?>
          </div><!-- Our Legacy -->

          <div class="about__innovation">
            <?php
              if( have_rows('innovation') ):
                while( have_rows('innovation') ): the_row();
            ?>
            <span><?php echo get_sub_field('section_title') ?></span>
            <div class="about__innovation-large-txt"><?php echo get_sub_field('large_text'); ?></div>
            <div class="about__innovation-small-txt"><?php echo get_sub_field('small_text'); ?></div>
            <img class="about__innovation-small-img" src="<?php echo get_sub_field('image'); ?>"/>
            <?php
                endwhile;
              endif;
            ?>
          </div><!-- Innovation -->

          <div class="about__community">
            <?php
              if( have_rows('community') ):
                while( have_rows('community') ): the_row();
            ?>
            <span><?php echo get_sub_field('section_title') ?></span>
            <div class="about__community-large-txt"><?php echo get_sub_field('large_text'); ?></div>
            <div class="about__community-small-txt"><?php echo get_sub_field('small_text'); ?></div>
            <?php
                endwhile;
              endif;
            ?>
          </div><!-- Community -->

          <div class="about__partnerships-associations">
            <?php
              if( have_rows('partnerships_&_associations') ):
                while( have_rows('partnerships_&_associations') ): the_row();
            ?>
            <span><?php echo get_sub_field('section_title') ?></span>
            <div id="about__partnerships-associations-carousel">
              <?php
                $images = get_sub_field('partnership_&_association_logos');
                if( $images ): 
                  foreach( $images as $image ): ?>
                  <img class="" src="<?php echo $image['sizes']['thumbnail']; ?>"/>
                <?php
                  endforeach;
                endif;
              ?>
            </div>
            <?php
                endwhile;
              endif;
            ?>
          </div><!-- Partnerships & Associations -->

          <div class="about__featured-in">
            <?php
              if( have_rows('featured_in') ):
                while( have_rows('featured_in') ): the_row();
            ?>
            <span><?php echo get_sub_field('section_title') ?></span>
            <!-- REPEATER GOES HERE -->
            <div id="about__featured-in-carousel">            
            <?php
              if( have_rows('publications') ): 
                while( have_rows('publications') ): the_row();?>
                  <div class="about__publication-wrapper">

                  <?php 
                  if( have_rows('publication') ):
                    while( have_rows('publication') ): the_row(); ?>
                        <div class="publication-name"><?php echo get_sub_field('publication_name'); ?></div>
                        <a class="publication-headline" href="<?php get_sub_field('publication_url'); ?>"><?php echo get_sub_field('publication_headline'); ?></a>
                        <div class="publication-date"><?php echo get_sub_field('publication_date'); ?></div>
                  <?php endwhile;
                  endif; ?>

                  </div>
                <?php endwhile;
              endif;
            ?>
            </div>
            <?php
                endwhile;
              endif;
            ?>
          </div><!-- Featured In -->
        </div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
