<?php get_header();?>


<div class="content archive">

    <h1><?php single_cat_title();?></h1>
    <h2><?php the_archive_description();?></h2>
    <iframe class="video-projects" src="https://www.youtube.com/embed/iQosI9gM18g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p>SPOT er meget mere end en festival. Se hvilke projekter vi laver resten af året.</p>
      <?php if (have_posts()) : while(have_posts()) : the_post();?>
      
      <div class="blogs">
          <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('smallest');?>">
          <?php endif;?>
          
          <div class="blogs__content">
            <h3><?php the_title();?></h3>
           
            <div class="blog__excerpt">
              <p><?php the_excerpt();?></p>
              <a href="<?php the_permalink()?>"> Læs mere </a> 
            </div>
          </div>
      </div>
        
    <?php endwhile; endif;?>

    <p>Øvrige projekter</p>


</div>




<?php get_footer();?>