<!--Register header-->
<?php get_header();?>

<div class="content front-page">
   <h1>SPOT festival 2022</h1> 

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
    <!--category ID and link is specified-->
    <?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'SPOT på Midten' );
    // Get the URL of this category
    $category_link = get_category_link( $category_id );
    ?>
    <h2 class="events-text"><?php echo get_cat_name( $category_id = 4 )?></h2>
    <div class="content archive">
        <div onclick="location.href='<?php echo esc_url( $category_link ); ?>';" class="category-pa-midten">
        <img src="<?php echo get_the_post_thumbnail_url(45, 'smallest');?>">
            <div class="container-category">
                <h3><?php echo get_cat_name( $category_id = 6 )?></h3>
                <div class="container-category__info">
                    <p><?php echo category_description(6);?></p>
                    <a href="<?php echo esc_url( $category_link ); ?>" title="SPOT på midten">Køb billet</a>
                </div>
            </div>
            <img class="spm-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/spm-spots.png" alt="SPOT på Midten grafik">
        </div>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <div class="blogs">
            <?php if(has_post_thumbnail(48)):?>
                <img src="<?php echo get_the_post_thumbnail_url(48, 'smallest');?>">
            <?php endif;?>
            
            <div class="blogs__content">
                <h3><?php echo get_the_title(48)?></h3>
                
                <div class="blog__excerpt">
                <p><?php echo get_the_excerpt(48)?></p>
                <a href="#"> Køb billet </a> 
                </div>
                <img class="sus-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/ufs-spots.png" alt="SPOT Udenfor Sæsonen grafik">
            </div>
            </div>

            <div class="blogs folk-spot-denmark">
            <?php if(has_post_thumbnail(171)):?>
                <img src="<?php echo get_the_post_thumbnail_url(171, 'smallest');?>">
            <?php endif;?>
            
            <div class="blogs__content">
                <h3><?php echo get_the_title(171)?></h3>
                
                <div class="blog__excerpt">
                <p><?php echo get_the_excerpt(171)?></p>
                <a href=#"> Køb billet </a> 
                </div>
                <img class="fsd-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/fsd-spots.png" alt="Folk SPOT Denmark grafik">
            </div>
            </div>

            <div class="blogs musik-pa-hjemmebanen">
            <?php if(has_post_thumbnail(175)):?>
                <img src="<?php echo get_the_post_thumbnail_url(175, 'smallest');?>">
            <?php endif;?>
            
            <div class="blogs__content">
                <h3><?php echo get_the_title(175)?></h3>
                
                <div class="blog__excerpt">
                <p><?php echo get_the_excerpt(175)?></p>
                <a href="#"> Køb billet </a> 
                </div>
                <img class="fsd-spots"src="http://localhost:8888/spot/wp-content/uploads/2021/12/mph-spots.png" alt="Musik på hjemmebanen grafik">
            </div>
            </div>
        </div>
        </div>
        <?php endwhile; endif;?>
    </div>
</div>

<!--Register footer-->
<?php get_footer();?>



