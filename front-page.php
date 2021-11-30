<!--Register header-->
<?php get_header();?>

<div class="content front-page">
   <h1><?php the_title();?></h1> 
   <img class="spot-festival-logo"src="http://localhost:8888/spot/wp-content/uploads/2021/11/landingpage-spot-logo.png" alt="SPOT festival 2022">
   
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
</div>

<!--Register footer-->
<?php get_footer();?>

