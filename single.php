<!--Register header-->
<?php get_header();?>

<!--Register blogpost-->
<div class="content project">

    <!--Register event image-->
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('largest');?>">
    <?php endif;?>
    
    <!--Register event information-->
    <div class="project__info">
        <span></span>
        <h1><?php the_title();?></h1>
    
        <!--Register a placeholder for at Facebook API-->
        <p class="facebook-event-api"> <strong>30</strong> personer deltager</p>
        
        <!--Register single blogposts and the content-->
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?> 
        <?php endwhile; endif;?>
    </div>
</div>

<!--Register header-->
<?php get_footer();?>

<!--
 * Expand text w. inspiration from this
 * https://www.w3schools.com/howto/howto_js_read_more.asp
-->
<script>
    function expandText() {
        let dots = document.getElementById("dots");
        let moreText = document.getElementById("more");
        let btnText = document.getElementById("readmoreBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Læs mere"; 
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Læs mindre"; 
            moreText.style.display = "inline";
        }
    };
</script>