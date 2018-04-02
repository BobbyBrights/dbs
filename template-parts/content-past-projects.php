<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dbs
 */

?>

<?php
if ( get_field('project_is_completed') ) :
?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      $projectImages = get_field('project_images');
      if ( $projectImages ):
    ?>
      <div class="project__images-carousel">
        <?php  
          foreach( $projectImages as $projectImage ):
            if (get_field('project_is_clickable')) :
        ?>  
          <a href="<?php echo get_permalink(); ?>">
            <div class="project__image-wrap">
              <!-- <div class="image__overlay"></div> -->
              <img src="<?php echo $projectImage['url']; ?>" alt="">
            </div>
          </a>
        <?php
            else :
        ?>
          <div class="project__image-wrap">      
            <img src="<?php echo $projectImage['url']; ?>" alt="">
          </div>
        <?php 
          endif;
        endforeach; 
        ?>
      </div>

      <!-- <div class="project__status">
        <a href="<?php echo get_permalink(); ?>">
          <?php if ( get_field('project_is_on_going') ) :?>
            <div>
              <p>on going</p>
            </div>
          <?php endif ?>
          <?php if ( get_field('project_is_up_coming') ) :?>
            <div>
              <p>up coming</p>
            </div>
          <?php endif ?>
          <?php if ( get_field('project_is_completed') ) :?>
            <div>
              <p>completed</p>
            </div>
          <?php endif ?>
        </a>
      </div> -->
          
    <?php
      endif;
    ?>

    <div class="project__title">
      <?php
        the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
      ?>
    </div>
    <div class="project__address">
      <?php 
        the_field('project_address');
      ?>
    </div> 
    <!-- <div class="project__description">
      <?php 
        the_field('project_description');
      ?>
    </div>  -->
      
  <?php
    endif;
  ?>
</article><!-- #post-<?php the_ID(); ?> -->
  <?php endif; ?>


