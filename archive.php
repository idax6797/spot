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

    <div onclick="location.href='<?php echo esc_url( $category_link ); ?>';" class="category-pa-midten">
      <img src="<?php the_post_thumbnail_url('smallest');?>">
      <div class="container-category">
        <h3><?php echo get_cat_name( $category_id = 6 )?></h3>
          <div class="container-category__info">
            <p><?php echo category_description(6);?></p>
            <a href="<?php echo esc_url( $category_link ); ?>" title="SPOT på midten">Køb billet</a>
          </div>
          <img class="spm-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/spm-spots.png" alt="SPOT på Midten grafik">
      </div>
    </div>

       <div class="blogs spot-udenfor-saesonen">
            <?php if(has_post_thumbnail(48)):?>
                <img src="<?php echo get_the_post_thumbnail_url(48, 'smallest');?>">
            <?php endif;?>
            
            <div class="blogs__content">
                <h3><?php echo get_the_title(48)?></h3>
                
                <div class="blog__excerpt">
                <p><?php echo get_the_excerpt(48)?></p>
                <a href="#"> Køb billet </a> 
                </div>
                <img class="sus-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/ufs-spots.png" alt="SPOT Udenfor Sæsonen grafik">
            </div>
            </div>

            <div class="blogs folk-spot-denmark">
            <?php if(has_post_thumbnail(171)):?>
                <img src="<?php echo get_the_post_thumbnail_url(171, 'smallest');?>">
            <?php endif;?>
            
            <div class="blogs__content">
                <h3><?php echo get_the_title(171)?></h3>
                
                <div class="blog__excerpt">
                <p><?php echo get_the_excerpt(171)?></p>
                <a href=#"> Køb billet </a> 
                </div>
                <img class="fsd-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/fsd-spots.png" alt="Folk SPOT Denmark grafik">
            </div>
            </div>

            <div class="blogs musik-pa-hjemmebanen">
            <?php if(has_post_thumbnail(175)):?>
                <img src="<?php echo get_the_post_thumbnail_url(175, 'smallest');?>">
            <?php endif;?>
            
            <div class="blogs__content">
                <h3><?php echo get_the_title(175)?></h3>
                
                <div class="blog__excerpt">
                <p><?php echo get_the_excerpt(175)?></p>
                <a href="#"> Køb billet </a> 
                </div>
                <img class="fsd-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/mph-spots.png" alt="Musik på hjemmebanen grafik">
            </div>
            </div>
        </div>
  </div>
  <!--Register else statement - changes content depending on the category-->
  <?php else : ?>
    <div class="content archive">
      <h1><?php single_cat_title();?></h1>
      <h2><?php the_archive_description();?></h2>
      <iframe class="video-projects" src="https://www.youtube.com/embed/_qmu0SslyvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p>SPOT på Midten yay</p>

      <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <div onclick="location.href='<?php the_permalink()?>';" class="blogs">
        <?php if(has_post_thumbnail()):?>
          <img src="<?php the_post_thumbnail_url('smallest');?>">
        <?php endif;?>
        
        <div class="blogs__content">
          <h3><?php the_title();?></h3>
          
          <div class="blog__excerpt">
            <p><?php the_excerpt();?></p>
            <a href="<?php the_permalink()?>"> Køb billet </a> 
          </div>
          <img class="spm-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/spm-spots.png" alt="SPOT på Midten grafik">
        </div>
      </div>
    </div>
  <?php endwhile; endif;?>
  <?php endif;  ?>
</div>

<!--Register footer-->
<?php get_footer();?>