<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<? bloginfo('stylesheet_url') ?>">
    <? wp_head(); ?>
</head>
<body>
<?php get_header();?>
<main>
    <h1>The page title</h1>
    <p>
        <?
        if (have_posts()) {

            while (have_posts()) {

                the_post();

                the_content();
            }
        } ?>
    </p>
</main>
<footer>
    © copyright -Theme maker company inc.
</footer>
</body>
</html>
