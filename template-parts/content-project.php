<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dbs
 */

?>

<article class='single-project' id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="single-project__title">
    <?php
      the_title();
    ?>
  </div>
  <div class="single-project__address">
    <?php 
      the_field('project_address');
    ?>
  </div> 
  <?php
    $singleProjectImages = get_field('project_images');
    if ( $singleProjectImages ):
  ?>
      <div class="single-project__images-carousel">
        <?php  
          foreach( $singleProjectImages as $singleProjectImage ):
        ?>  
          <div class="single-project__image-wrap">
            <div class="single-image__overlay"></div>
            <img src="<?php echo $singleProjectImage['url']; ?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
  <?php 
    endif 
  ?>

  <div class="single-project__specs-and-about">
    <div class="single-project__specs">
      <span class="spec-title">detail.</span>
      <?php 
        the_field('project_specs');
      ?>
    </div> 
    <div class="single-project__description">
      <span>about.</span>
      <?php 
        the_field('project_description');
      ?>
    </div> 
  </div>
  <div class="single-project__featured-in">
    <?php 
      if ( have_rows('project_featured_in') ):    
    ?>
    <div class="single-project__featured-in-title">featured in.</div>
    <div class="single-project__featued-in-articles">
      <?php
          while ( have_rows('project_featured_in') ) : the_row();
      ?>    
            <div class="single-project__featured-in-article">
              <div class="single-project__featured-in-article-newspaper-name">
                <?php echo the_sub_field('newspaper_name'); ?>
              </div>
              <div class="single-project__featured-in-article-title">
                <a href="<?php echo the_sub_field('article_link'); ?>" target="_blank">
                  <?php echo the_sub_field('article_title'); ?>
                </a>
              </div>
              <div class="single-project__featured-in-article-date">
                <?php echo the_sub_field('article_date'); ?>
              </div>
            </div>
            
      <?php
          endwhile;
        endif;
      ?>
    </div>
  </div>
  
</article><!-- #post-<?php the_ID(); ?> -->
