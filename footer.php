<footer class="width-full bg-gray-3 pt-3 pb-3">
    <div class="container-1200 grid-three-col grid-with-dividers">
        <div class="border-bottom-lt-1200">
            <img class="height-48" src="<?php echo get_template_directory_uri() ?>/img/logo-small.png">
            <p>Stem4Free is a nonprofit corporation dedicated to food rescue and food waste awareness.</p>
        </div>
        <div class="border-bottom-lt-1200">
            <?php
            foreach (get_menu_items_by_registered_slug("footer") as $item){
                echo "<div class=\"font-mono-uppercase mb-1\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
            }
            ?>
        </div>
        <div class="border-bottom-lt-1200">

        </div>
    </div>
</footer>
</body>
</html>
<?php
wp_footer();