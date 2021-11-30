<!--Register header-->
<?php get_header();?>

<!--Register pages and the content-->
<div class="content">
    <h1><?php the_title();?></h1>
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>

<!--Register footer-->
<?php get_footer();?>