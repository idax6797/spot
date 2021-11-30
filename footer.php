<!--Register content-->
<?php wp_footer();?>

<!--Register content form wordpress and the sidebar from functions.php-->
<footer>
    <div id="footer-sidebar" class="footer-spot">
    <?php
    if(is_active_sidebar('footer-sidebar')){
    dynamic_sidebar('footer-sidebar');
    }
    ?>
    </div>
</footer>

<!--Register graphic content-->
<section class="graphics-bottom">
    <div class="borders">
        <span></span>
        <span></span>
    </div>
    <div class="borders-2">
        <span></span>
        <span></span>
    </div>
    <img class="footer-spot-logo"src="http://localhost:8888/spot/wp-content/uploads/2021/11/Spot-logo.png" alt="SPOT logo">
</section>
</body>
</html>