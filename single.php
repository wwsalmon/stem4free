<?php get_header();
?>
    <div class="blog-top <?php if (catch_that_image(get_the_ID()) != false) echo "post-with-image" ?>">
        <div class="blog-top-inner">
            <div class="blog-back"><a href="<?php echo get_site_url() ?>/blog">< Back to All Posts</a></div>
        <?php
        while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="single-date"><?php echo the_date("F n, Y"); ?></div>
            <div class="single-author"><span><?php echo sz_author_with_link(get_the_author_meta("ID")); ?></span></div>
        </div>
    </div>
    <div class="container content-container single-container <?php if (catch_that_image(get_the_ID()) != false) echo "post-with-image" ?>">
    <?php
    the_content();
endwhile;
?>
    </div>
<?php
get_footer();