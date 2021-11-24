<?php get_header();?>


<div class="content">

    <h1><?php single_cat_title();?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>
       
        <h3><?php the_title();?></h3>
        <?php if(has_post_thumbnail()):?>
          <img src="<?php the_post_thumbnail_url('smallest');?>">
        <?php endif;?>
        <?php the_excerpt();?>
        <a href="<?php the_permalink()?>"> Læs mere </a> 
        
    <?php endwhile; endif;?>

</div>




<?php get_footer();?>