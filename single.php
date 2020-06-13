<?php get_header();
?>
	<div class="width-700 container mt-6 pt-6 pb-6 page-container">
        <div class="font-mono opacity-20"><a href="<?php echo get_home_url() ?>/blog" class="font-no-underline">&lt; All Posts</a></div>
		<?php
		if (have_posts()):
			while (have_posts()): the_post();
				echo "<h1 class='font-l-responsive'>" . get_the_title() . "</h1>";
				echo "<div class='font-mono opacity-40'><span><a href='" . get_author_posts_url(get_the_author_meta("id")) . "'>" . get_the_author() . "</a></span></div>";
				echo "<div class='font-mono opacity-20'><span>" . get_the_time("M j, Y") . "</span></div>";
				echo "<hr class='mt-3 mb-3 opacity-20'/>";
				the_content();
			endwhile;
		endif;
		?>
	</div>
<?php
get_footer();
