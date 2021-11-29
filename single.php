<?php get_header();?>


<div class="content project">

    <?php if(has_post_thumbnail()):?>
        
        <img src="<?php the_post_thumbnail_url('largest');?>">

    <?php endif;?>

    <div class="project__info">
        <span></span>
        <h1><?php the_title();?></h1>

        <p class="facebook-event-api"> <strong>30</strong> personer deltager</p>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>
            
        <?php endwhile; endif;?>
    </div>
</div>

<?php get_footer();?>

<!--

 * Inspiration from this
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