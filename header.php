<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi' name='viewport'/>
    <title><?php echo wp_get_document_title(); ?></title>
<?php
date_default_timezone_set("America/New_York");
wp_head();
?>

</head>
<body>
<div class="sz-navbar s4f-navbar">
    <div class="sz-navbar-inner sz-navbar-right container-1200">
        <div class="navbar-logo">
            <a href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-small.png">
            </a>
            <a href="<?php echo get_home_url() ?>">
                <span class="font-bold font-24 ml-3"><?php echo get_bloginfo("name") ?></span>
            </a>
        </div>
        <input type="checkbox" id="sz-navbar-check">
        <label for="sz-navbar-check" class="sz-navbar-hamburger">☰</label>
        <div class="sz-navbar-items font-mono font-bold font-16">
            <?php
            foreach (get_menu_items_by_registered_slug("primary") as $item){
                echo "<div class=\"sz-navbar-item ml-3\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
            }
            ?>
        </div>
    </div>
</div>