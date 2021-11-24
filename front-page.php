<?php get_header();?>


<div class="content">

    <h1><?php the_title();?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>
        
    <?php endwhile; endif;?>

    <div class="project-container">

        <h2>Mere end en festival</h2>
        <p>Se havd vi tilbyder resten af året</p>
        <div class="slider"></div>
        <a href="#" class="button">Læs mere</a>
    </div>

</div>




<?php get_footer();?>