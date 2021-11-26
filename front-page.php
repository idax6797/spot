<?php get_header();?>

<div class="content front-page">

    <img class="spot-festival-logo"src="http://localhost:8888/spot/wp-content/uploads/2021/11/landingpage-spot-logo.png" alt="SPOT festival 2022">

    <div class="container-count">
        <p class="countdown" id="demo"></p>
        <p>Dage</p>
        <p>Timer</p>
        <p>Minutter</p>
        <p>Sekunder</p>
    </div>

    <h2><?php the_title();?></h2>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>


        <?php the_content();?>
        
    <?php endwhile; endif;?>

</div>

<?php get_footer();?>