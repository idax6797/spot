<!--Register header-->
<?php get_header();?>

<!--category ID and link is specified-->
<?php
// Get the ID of a given category
$category_id = get_cat_ID( 'SPOT på Midten' );
// Get the URL of this category
$category_link = get_category_link( $category_id );
?>

<!--Register if statement - changes content depending on the category-->
<?php if ( is_category( 'Events' )) : ?>
<div class="content archive">
  <h1><?php single_cat_title();?></h1>
  <h2><?php the_archive_description();?></h2>
  <iframe class="video-projects" src="https://www.youtube.com/embed/iQosI9gM18g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <p>SPOT er meget mere end en festival. Se hvilke projekter vi laver resten af året.</p>

    <div class="category-pa-midten">
      <img src="<?php the_post_thumbnail_url('smallest');?>">
      <div class="container-category">
        <h3><?php echo get_cat_name( $category_id = 6 )?></h3>
          <div class="container-category__info">
            <p><?php echo category_description(6);?></p>
            <a href="<?php echo esc_url( $category_link ); ?>" title="SPOT på midten">Køb billet</a>
          </div>
      </div>
    </div>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

      <div class="blogs">
          <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('smallest');?>">
          <?php endif;?>
          
          <div class="blogs__content">
            <h3><?php the_title();?></h3>
            
            <div class="blog__excerpt">
              <p><?php the_excerpt();?></p>
              <a href="<?php the_permalink()?>"> Køb billet </a> 
            </div>
          </div>
      </div>
  </div>
  <?php endwhile; endif;?>

  <!--Register else statement - changes content depending on the category-->
  <?php else : ?>
    <div class="content archive">
      <h1><?php single_cat_title();?></h1>
      <h2><?php the_archive_description();?></h2>
      <iframe class="video-projects" src="https://www.youtube.com/embed/_qmu0SslyvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      <p>SPOT på Midten yay</p>

      <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <div class="blogs">
        <?php if(has_post_thumbnail()):?>
          <img src="<?php the_post_thumbnail_url('smallest');?>">
        <?php endif;?>
        
        <div class="blogs__content">
          <h3><?php the_title();?></h3>
          
          <div class="blog__excerpt">
            <p><?php the_excerpt();?></p>
            <a href="<?php the_permalink()?>"> Køb billet </a> 
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif;?>
  <?php endif;  ?>
</div>

<!--Register footer-->
<?php get_footer();?>