<?php get_header();
?>
    <div class="home-section container home-blog archive-page">
        <div class="home-heading">
            <div class="home-heading-topper"></div>
            <h1><?php the_archive_title() ?></h1>
            <div class="blog-back"><a href="<?php echo get_site_url()?>/blog">< Back to All Posts</a></div>
        </div>
        <div class="home-blog-posts">
            <?php
            if (have_posts()):
                while (have_posts()) : the_post();
                    get_template_part("template_parts/article");
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <div class="container paginate-links">
        <?php echo paginate_links(); ?>
    </div>
<?php
get_footer();