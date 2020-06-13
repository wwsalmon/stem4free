<?php get_header();
?>
	<div class="width-700 container mt-6 pt-6 pb-6 page-container">
		<div class="font-mono opacity-20 text-center"><span><a href="<?php echo get_home_url() ?>/blog" class="font-no-underline    ">&lt; All posts</a></span></div>
		<h1 class="font-l-responsive text-center mb-6"><?php the_archive_title(); ?></h1>
		<?php get_template_part("template_parts/posts_list"); ?>
	</div>
<?php
get_footer();
