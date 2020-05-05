<?php get_header();
?>
<div class="home-hero" style="background-image: url('<?php echo get_theme_mod('s4f-home-image'); ?>');"></div>
<div class="home-top container">

</div>
<div class="home-section container">
    <h1>Our Impact</h1>
</div>
    <div class="container">
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
                get_template_part("template_parts/article");
            endwhile;
        endif;
        ?>
    </div>
<?php
get_footer();