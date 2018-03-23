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
          <img class="rellax" src="<?php echo get_field('landing_image'); ?>" alt="" data-rellax-speed="-3">
          <div class="about__landing-page-overlay"></div>
          <div class="about__landing-page-text"><?php echo get_field('landing_text'); ?></div>
        </div>

        <div class="about-page-body">
          <div class="about__our-legacy">
            <?php if( have_rows('our_legacy') ):
              while( have_rows('our_legacy') ): the_row(); ?>
                <div class="about__our-legacy-txt-wrap">
                  <span><?php echo get_sub_field('section_title') ?></span>
                  <div class="about__our-legacy-small-txt">
                    <?php echo get_sub_field('our_legacy_text'); ?> 
                  </div>
                </div>
                <div class="about__our-legacy-small-img-wrapper">
                  <img class="about__our-legacy-small-img rellax-about" src="<?php echo get_sub_field('our_legacy_image'); ?>" data-rellax-speed="-1"/>
                </div>
              <?php endwhile; 
            endif; ?>
          </div><!-- Our Legacy -->

          <div class="about__innovation">
            <?php if( have_rows('innovation') ):
                while( have_rows('innovation') ): the_row(); ?>
                <span><?php echo get_sub_field('section_title') ?></span>
                <div class="about__innovation-small-txt"><?php echo get_sub_field('innovation_text'); ?></div>
                <div class="about__innovation-small-img-wrapper">
                  <img class="about__innovation-small-img rellax-about" src="<?php echo get_sub_field('innovation_image'); ?>" data-rellax-speed="-1"/>
                </div>
              <?php endwhile;
            endif; ?>
          </div><!-- Innovation -->

          <div class="about__community">
            <?php if( have_rows('community') ):
                while( have_rows('community') ): the_row(); ?>
                  <span><?php echo get_sub_field('section_title') ?></span>
                  <div class="about__community-small-txt"><?php echo get_sub_field('community_text'); ?></div>
                  <div class="about__community-small-img-wrapper">
                    <img class="about__community-small-img rellax-about" src="<?php echo get_sub_field('community_image'); ?>" data-rellax-speed="-1"/>            
                  </div>
              <?php endwhile;
            endif; ?>
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
                $size = 'full';
                if( $images ): 
                  foreach( $images as $image ): ?>
                  <div class="about__partnerships-associations-img-wrap">
                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </div>
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
                        <a class="publication-headline" target="_blank" href="<?php echo get_sub_field('publication_url'); ?>"><?php echo get_sub_field('publication_headline'); ?></a>
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
