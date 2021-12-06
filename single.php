<!--Register header-->
<?php get_header();?>

<!--Register blogpost-->
<div class="content project">
    
    <!--Register event information-->
    <div class="project__info">
        <h2><?php the_title();?></h2>
            
        <!--Register single blogposts and the content-->
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?> 
        <?php endwhile; endif;?>
    </div>
</div>

<!--Register footer-->
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