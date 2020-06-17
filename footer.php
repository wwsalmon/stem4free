<footer class="width-full bg-gray-3 pt-3 pb-3">
    <div class="container-1200 grid-three-col grid-with-dividers">
        <div class="border-grid-child">
            <img class="height-48" src="<?php echo get_template_directory_uri() ?>/img/logo-small.png">
            <p><?php echo get_theme_mod("s4f-footer-blurb", "Stem4Free is a nonprofit corporation dedicated to food rescue and food waste awareness.") ?></p>
        </div>
        <div class="border-grid-child">
            <?php
            foreach (get_menu_items_by_registered_slug("footer") as $item){
                echo "<div class=\"font-mono-uppercase mb-1\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
            }
            ?>
        </div>
        <div class="border-grid-child">
            <div class="font-mono-uppercase mb-1"><span><a href="<?php echo get_home_url() ?>/branches">Branches</a></span></div>
	        <?php
	        foreach (get_menu_items_by_registered_slug("branches") as $item){
		        echo "<div class=\"font-mono mb-1 opacity-20 hover-opacity-100\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
	        }
	        ?>
        </div>
    </div>
</footer>
</body>
</html>
<?php
wp_footer();