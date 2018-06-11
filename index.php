<?php get_header();
$args = array(
        "post_type" => "project",
    "posts_per_page" => -1
);
$my_query = new WP_Query($args);
?>
<main>
<h1>Something seems to be wrong here</h1>
</main>
<?php
    get_footer();
?>
