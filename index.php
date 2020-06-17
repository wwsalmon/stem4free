<?php get_header();
?>
    <div class="width-700 container mt-6 pt-6 pb-6 page-container">
        <?php if (is_home()): ?>
        <h1 class="font-l-responsive text-center mb-6">The Latest from Stem4Free</h1>
        <? endif;
        get_template_part("template_parts/posts-list"); ?>
    </div>
<?php
get_footer();
