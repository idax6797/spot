<!--Register header-->
<?php get_header();?>

<div class="content front-page">
   <h1><?php the_title();?></h1> 

   <!--Register countdown on front-page-->
   <div class="container-count">
        <p class="countdown" id="display-countdown"></p>
        <p>Dage</p>
        <p>Timer</p>
        <p>Minutter</p>
        <p>Sekunder</p>
    </div>

    <!--Register posts and the content-->
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>

    <!--spots graphic-->
    <img class="spot-graphic" src="http://localhost:8888/spot/wp-content/uploads/2021/12/Mere-end-en-festival.png" alt="Mere end en festival - grafik">
    
    <h2><?php echo get_cat_name( $category_id = 4 )?></h2>
</div>




<!--Register footer-->
<?php get_footer();?>

