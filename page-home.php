<?php get_header();
?>
<div class="container-1200 mt-6 mb-6 pt-4">
    <p class="font-m-responsive width-700 text-center line-height-12"><?php echo get_theme_mod("s4f-hero-text", "Stem4Free is a nonprofit corporation dedicated to food rescue and food waste awareness.") ?></p>
    <h1 class="font-xl-responsive text-center"><span id="s4f-total-counter"><?php echo get_theme_mod("s4f-stat-total-fallback", "9,000+") ?></span> servings rescued</h1>
    <p class="width-700 text-center font-mono font-16-lt-600 link-underline" id="s4f-stats-last"><span class="opacity-20">in <span id="s4f-top-branch"><?php echo get_theme_mod("s4f-stat-state-1-fallback", "Texas (6,800+)") ?></span>, <span id="s4f-second-branch"><?php echo get_theme_mod("s4f-stat-state-2-fallback", "California (800+)") ?></span>, and <a href="./branches"><?php echo get_theme_mod("s4f-num-other-locations", "9") ?> other locations</a>, </span><span class="opacity-60">with <span id="s4f-past-week"><?php echo get_theme_mod("s4f-stat-last-week-fallback", "1,000+") ?></span> servings rescued, donated, or financially supported in the last week.</span></p>

    <script>
        fetch("https://docs.google.com/spreadsheets/d/1AiJWX3EvgGMYiRtnN_4aiAyNjbEKrM1Y7eq8-p-ASXw/gviz/tq?tqx=out:json")
        .then(res => res.text())
        .then(text => {
            const spreadsheetData = JSON.parse(text.substr(47).slice(0, -2))
            const spreadsheetEntries = spreadsheetData.feed.entry.map(el => [el.gs$cell.$t, +el.gs$cell.col, +el.gs$cell.row]);
            const allLabels = spreadsheetEntries.filter(el => el[2] === 1);

            const totalLabel = allLabels.find(el => el[0] === "All");
            const totalNum = spreadsheetEntries.find(el => el[1] === totalLabel[1] && el[2] === 2);
            const pastWeekNum = spreadsheetEntries.find(el => el[1] === totalLabel[1] && el[2] === 3);

            const otherLabels = allLabels.filter(el => el[0] !== "All");
            const otherNums = otherLabels.map(el => [el[0], +spreadsheetEntries.find(en => en[1] === el[1] && en[2] === 2)[0]]).sort((a, b) => b[1] - a[1]);

            const totalNumFormatted = d3.format(",")(totalNum[0]);
            document.getElementById("s4f-total-counter").textContent = totalNumFormatted;

            const pastWeekNumFormatted = d3.format(",")(pastWeekNum[0]);
            document.getElementById("s4f-past-week").textContent = pastWeekNumFormatted;

            const highestBranch = otherNums[0][0];
            const highestBranchNum = d3.format(",")(otherNums[0][1]);
            document.getElementById("s4f-top-branch").innerHTML = `<a href='./${highestBranch.replace(/\s+/g, '-').toLowerCase()}'>${highestBranch} (${highestBranchNum})</a>`;

            const secondBranch = otherNums[1][0];
            const secondBranchNum = d3.format(",")(otherNums[1][1]);
            document.getElementById("s4f-second-branch").innerHTML = `<a href='./${secondBranch.replace(/\s+/g, '-').toLowerCase()}'>${secondBranch} (${secondBranchNum})</a>`;

            const liveData = "<div class=\"width-120 margin-center font-12 p-1 bg-gray-3 text-center font-mono-uppercase opacity-20 mt-4\">Live Data</div>";
            document.getElementById("s4f-stats-last").insertAdjacentHTML("afterend", liveData);
        })
        .catch(err => console.log(err));
    </script>
</div>
<div class="width-full bg-gray-1">
    <div class="container-1200 pt-4 pb-4">
        <div class="grid-three-col grid-with-dividers">
            <div class="border-grid-child">
                <div class="font-mono-uppercase"><span><?php echo get_theme_mod("s4f-col1-header", "Completely Student Run") ?></span></div>
                <p><?php echo get_theme_mod("s4f-col1-text", "Run by high school students, from leadership down to volunteers. If you're a student, join us today!") ?></p>
                <a href="<?php echo get_permalink(get_theme_mod("s4f-col1-link-page","Branches")); ?>">
                    <div class="p-3 text-center font-mono font-16 bg-gray-3"><span><?php echo get_theme_mod("s4f-col1-link-text", "Join 100+ Student Volunteers") ?></span></div>
                </a>
            </div>
            <div class="border-grid-child">
                <div class="font-mono-uppercase"><span><?php echo get_theme_mod("s4f-col2-header", "For Business Partners") ?></span></div>
                <p><?php echo get_theme_mod("s4f-col2-text", "Businesses donate either regularly or whenever they have leftover food. Our volunteers pick up food from businesses and deliver it to food pantries, homeless shelters, and other organizations.") ?></p>
                <div class="text-right font-mono font-16"><a href="<?php echo get_permalink(get_theme_mod("s4f-col2-link-page")); ?>"><?php echo get_theme_mod("s4f-col2-link-text", "More info for businesses") ?> ></a></div>
            </div>
            <div class="border-grid-child">
                <div class="font-mono-uppercase"><span><?php echo get_theme_mod("s4f-col3-header", "Subscribe to our newsletter") ?></span></div>
                <p class="link-underline"><?php echo get_theme_mod("s4f-col2-text", "Get updates on our work and developments each month. (<a href='http://instagram.com/stem4free'>Follow us on <i class=\"fab fa-instagram font-16\"></i> Instagram</a> too!) ") ?></p>
                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup">
                    <form action="https://stem4free.us10.list-manage.com/subscribe/post?u=00e8bb567cb828945093b6386&amp;id=45ee875717" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll" class="flex">

                            <div class="mc-field-group flex-1">
                                <input type="email" placeholder="Enter your email" name="EMAIL" class="required email width-full height-48 border-none font-mono pl-2 pr-2" id="mce-EMAIL">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_00e8bb567cb828945093b6386_45ee875717" tabindex="-1" value=""></div>
                            <div class="clear">
                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="height-48 border-none pl-2 pr-2 bg-gray-3 font-mono"></div>
                        </div>
                    </form>
                </div>
                <!--End mc_embed_signup-->
<!--                <div class="text-right font-mono font-16"><a href="--><?php //echo get_permalink(get_theme_mod("s4f-col3-link-page")); ?><!--">--><?php //echo get_theme_mod("s4f-col3-link-text", "More posts") ?><!-- ></a></div>-->
            </div>
        </div>
    </div>
    <div class="container-1200 pt-6 pb-6"><?php
        $post = $mainpost;
        if (have_posts()):
        while (have_posts()): the_post();
        the_content();
        endwhile;
        endif;
        ?>
    </div>
</div>

<div class="width-full">
    <div class="width-700 container pt-6 pb-6">
        <hr class="mb-6"/>
        <h1 class="font-l-responsive text-center mb-6">The Latest from Stem4Free</h1>
        <?php get_template_part("template_parts/posts-list"); ?>
        <div class="text-center font-mono font-16"><a href="<?php echo get_home_url() . "/blog" ?>">More posts ></a></div>
        <hr class="mt-6"/>
    </div>
</div>

<?php
get_footer();