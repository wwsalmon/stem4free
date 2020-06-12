<?php get_header();
?>
<div class="container-1200 mt-6 mb-6 pt-4">
    <p class="font-l-responsive width-700 text-center line-height-12">Stem4Free is a nonprofit corporation dedicated to food rescue and food waste awareness.</p>
    <h1 class="font-xl-responsive text-center">8,243 meals rescued</h1>
    <p class="width-700 text-center font-mono font-16-lt-600"><span class="opacity-20">in Massachusetts (1,240), Hong Kong (942), and 9 other locations, </span><span class="opacity-60">with 1,234 meals rescued in the last week.</span></p>
</div>
<div class="width-full bg-gray-1">
    <div class="container-1200 pt-4 pb-4">
        <div class="grid-three-col grid-with-dividers">
            <div class="border-bottom-lt-1200">
                <div class="font-mono-uppercase"><span>Completely Student Run</span></div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum.</p>
                <a href="">
                    <div class="p-3 text-center font-mono font-16 bg-gray-2"><span>Join 300+ Student Volunteers</span></div>
                </a>
            </div>
            <div class="border-bottom-lt-1200">
                <div class="font-mono-uppercase"><span>25 Business Partners</span></div>
                <p>Businesses donate either regularly or whenever they have leftover food. Our volunteers pick up food from businesses and deliver it to food pantries, homeless shelters, and other organizations.</p>
                <div class="text-right font-mono font-16"><a href="">More info for businesses ></a></div>
            </div>
            <div class="border-bottom-lt-1200">
                <div class="font-mono-uppercase"><span>Latest Updates & Blog Posts</span></div>
                <div class="mt-4">
                    <?php
                    $posts = get_posts(array("posts_per_page"=>4));
                    foreach ($posts as $post){
                        get_template_part("template_parts/home-post");
                    }
                    ?>
                </div>
                <div class="text-right font-mono font-16"><a href="">More Posts ></a></div>
            </div>
        </div>
    </div>
    <div class="container-1200"><!--IMAGE GALLERY--></div>
</div>

<?php
get_footer();