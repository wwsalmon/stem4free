<footer>
    <div class="home-section container">
        <div class="footer-left">
            <a href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-large.png">
            </a></div>
        <div class="footer-right">
            <p>We are a non-profit organization dedicated to reducing food waste, donating food to those in need, and promoting healthy eating.</p>
            <div class="footer-menu">
                <?php
                foreach (get_menu_items_by_registered_slug("primary") as $item){
                    echo "<div class=\"footer-menu-item\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
                }
                ?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<?php
wp_footer();