<?php get_header();
$args = array(
        "post_type" => "project",
    "posts_per_page" => -1
);
$my_query = new WP_Query($args);
?>
<main>
    <h1>The page title - index</h1>
    <p>
        <?
        if ($my_query->have_posts()) {

            while ($my_query->have_posts()) {

                $my_query->the_post();
                echo the_title();
                the_content();
            }
        }else {
            echo"no found- index";

        }

        ?>
    </p>

</main>
<?php
    get_footer();
?>
