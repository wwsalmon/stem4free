<?php get_header();
?>
<div class="home-hero-container">
<?php
$hero_images = get_posts(array("post_type" => "hero_images"));
foreach ($hero_images as $index=>$hero_image){
    ?>
    <div class="home-hero" id="home-hero-<?php echo $index ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($hero_image->ID) ?>');"></div>
    <?php
}

?>
</div>

    <div class="home-top container">
        <div class="home-block home-block-caption">
            <div class="hero-buttons">
                <div class="hero-button" id="hero-button-prev" onclick="changeHero(false)"><span>&lt;</span></div>
                <div class="hero-button"><span id="hero-button-counter"></span></div>
                <div class="hero-button" id="hero-button-next" onclick="changeHero(true)"><span>&gt;</span></div>
            </div>
            <div class="hero-captions">
                <?php
                foreach ($hero_images as $index=>$hero_image){
                    ?>
                    <div class="hero-caption" id="hero-caption-<?php echo $index ?>"><span><?php echo date("F j, Y", strtotime($hero_image->post_date)) . ": " . $hero_image->post_content ?></span></div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="home-block home-block-main">
            <?php the_post(); the_content() ?>
        </div>
    </div>

<script>
    const heroImages = document.querySelectorAll(".home-hero");
    const heroCaptions = document.querySelectorAll(".hero-caption");
    const heroCounter = document.getElementById("hero-button-counter");
    const numImages = heroImages.length;
    const sliderSpeed = <?php echo get_theme_mod("s4f-slider-speed", 3) * 1000; ?>

    let currInd = 0;
    heroImages[currInd].className += " show";
    heroCaptions[currInd].className += " show";
    heroCounter.innerHTML = (currInd + 1) + "/" + numImages;

    function changeHero(next){
        heroImages[currInd].classList.remove("show");
        heroCaptions[currInd].classList.remove("show");
        if (next){
            currInd++;
            if (currInd == numImages){
                currInd = 0;
            }
        }
        else{
            currInd--;
            if (currInd < 0){
                currInd = numImages - 1;
            }
        }
        heroCounter.innerHTML = (currInd + 1) + "/" + numImages;
        heroImages[currInd].className += " show";
        heroCaptions[currInd].className += " show";
    }

    setInterval(() => changeHero(true), sliderSpeed);

</script>

    <div class="home-sections">
        <?php
        $home_blocks = get_posts(array("post_type" => "home_blocks"));
        foreach ($home_blocks as $block){
            ?>
            <div class="home-section container">
                <div class="home-heading">
                    <div class="home-heading-topper"></div>
                    <h1><?php echo $block->post_title ?></h1>
                </div>
                <div class="home-block">
                    <?php echo $block->post_content ?>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="home-section container home-blog">
            <div class="home-heading">
                <div class="home-heading-topper"></div>
                <h1>Latest Posts</h1>
            </div>
            <div class="home-blog-posts">
                <?php
                $the_query = new WP_Query(array("posts_per_page"=>3));
                if ($the_query->have_posts()):
                    while ($the_query->have_posts()) : $the_query->the_post();
                        get_template_part("template_parts/article");
                    endwhile;
                endif;
                ?>
                <div class="home-blog-more">
                    <a href="<?php echo get_site_url()?>/blog"><div class="home-blog-button">More Posts ></div></a>
                </div>
            </div>
        </div>
        <div class="home-section container home-ig-section">
            <div class="home-heading">
                <div class="home-heading-topper"></div>
                <h1>Instagram</h1>
            </div>
            <div class="home-ig">
                <?php echo do_shortcode("[instagram-feed cols=3 num=6 imagepadding=0 showbutton=false showfollow=false]"); ?>
                <div class="home-blog-more" style="padding-top: 24px;">
                    <a href="https://www.instagram.com/stem4free/"><div class="home-blog-button">Follow Our Instagram ></div></a>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();