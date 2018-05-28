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
