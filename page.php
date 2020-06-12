<?php get_header();
?>
    <div class="width-700 container mt-6 pt-6">
		<?php
		if (have_posts()):
			while (have_posts()): the_post();
				the_content();
			endwhile;
		endif;
		?>
    </div>
<?php
get_footer();
