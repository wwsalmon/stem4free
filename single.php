<?php get_header();
?>
    <div class="width-full mt-6 bg-gray-1 height-300"></div>
    <div class="width-700 container font-mono opacity-20 relative top-neg-240 mb-2"><a href="<?php echo get_home_url() ?>/blog" class="font-no-underline">&lt; All Posts</a></div>
	<div class="width-700 container pt-3 pb-6 page-container relative top-neg-240 bg-white">
		<?php
		if (have_posts()):
			while (have_posts()): the_post();
		        $cats = get_the_category();
		        echo "<div class='flex'>";
		        foreach ($cats as $cat){
			        echo "<div class=\"font-mono-uppercase opacity-20 mr-2\"><span><a href=\"" . get_category_link($cat) . "\" class='font-no-underline'>" . $cat->name . "</a></span></div>";
                }
		        echo "</div>";
				echo "<h1>" . get_the_title() . "</h1>";
				echo "<div class='font-mono opacity-40'><span><a href='" . get_author_posts_url(get_the_author_meta("id")) . "'>" . get_the_author() . "</a></span></div>";
				echo "<div class='font-mono opacity-20'><span>" . get_the_time("M j, Y") . "</span></div>";
				echo "<div class='mt-6'>" . get_the_content() . "</div>";
			endwhile;
		endif;
		?>
	</div>
<?php
get_footer();
