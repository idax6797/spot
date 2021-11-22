<?php get_header();?>

<div class="content">

<h1><?php the_title();?></h1>

<div><?php if (hav_posts()) : while(have_posts()) : the_posts();?>
    <?php the_content();?>
<?php endwhile; endif;?>
</div>




</div>



<?php get_footer();?>