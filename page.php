<?php get_header();
?>
    <div class="width-700 container mt-6 pt-6 pb-6 page-container">
        <h1 class="font-l-responsive text-center">The Latest from Stem4Free</h1>
		<?php
		if (have_posts()):
			while (have_posts()): the_post();
				if (!(has_block("s4f-plugin/branch-header"))){
					echo "<h1>" . get_the_title() . "</h1>";
				}
				the_content();
			endwhile;
		endif;
		?>
    </div>
<?php
get_footer();
