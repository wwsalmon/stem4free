<div class="article-item">
    <?php

    $first_image = catch_that_image(get_the_ID());
    if ($first_image != false) {
        ?>
        <div class="article-image"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo $first_image ?>"></a></div>
        <?php
    }

    ?>

    <div class="article-text">

        <h3><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3>

        <?php

        if (sizeof(get_the_category()) > 0) {
            echo "<div class=\"article-categories\">";
            foreach (get_the_category() as $cat) {
                ?>
                <div class="article-category"><span><a
                                href="<?php echo get_category_link($cat) ?>"><?php echo $cat->name ?></a></span></div>
                <?php
            }
            echo "</div>";
        }

        ?>

        <div class="article-author"><span><?php echo sz_author_with_link(get_the_author_meta("ID")); ?></span></div>
        <div class="article-date"><span><?php the_time("F n, Y"); ?></span></div>
        <div class="article-content"><?php echo sz_get_snippet(sz_stripall(get_the_content()), 100) ?></div>
    </div>
</div>