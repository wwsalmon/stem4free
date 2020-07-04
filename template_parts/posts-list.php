<?php

if ( is_front_page() ) {
	$args       = array(
		"posts_per_page" => 3,
	);
	$this_query = new WP_Query($args);
} else {
    $this_query = $GLOBALS['wp_the_query'];
}

if ( $this_query->have_posts() ):
	while ( $this_query->have_posts() ): $this_query->the_post(); ?>
		<div class="flex">
			<a class="width-120 bg-gray-1 mr-3 flex-0" href="<?php echo get_the_permalink() ?>">
				<?php
				$first_image = catch_that_image(get_the_ID());
				if (!$first_image){
					?>
					<img class="height-48 margin-center center-vert" src="<?php echo get_template_directory_uri() ?>/img/logo-small.png">
					<?php
				} else{
					echo "<img src=\"" . $first_image . "\">";
				}
				?>
			</a>
			<div class="">
				<div class="font-mono font-12 opacity-20">
					<?php
					$cats = get_the_category();
					foreach ( $cats as $cat ) {
						echo "<span class=\"font-mono-uppercase font-12\"><a href=\"" . get_category_link( $cat ) . "\" class='font-no-underline'>" . $cat->name . "</a></span>";
					}
					echo "  " . get_the_time( "M d, Y" );
					?>
				</div>
				<h3 class="mt-1 mb-1"><a class="font-no-underline" href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
				<div class="font-mono opacity-40"><span><a href="<?php echo get_author_posts_url(get_the_author_meta("id")) ?>" class="font-no-underline"><?php echo get_the_author_meta("display_name") ?></a></span></div>
			</div>
		</div>
		<hr class="mt-3 mb-3 opacity-20"/>
	<?php
	endwhile;
endif;
echo "<div class='pt-4 font-no-underline'>" . paginate_links() . "</div>";
?>