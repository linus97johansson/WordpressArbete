<?php get_header();
$args = array(
    "post_type" => "project",
    "posts_per_page" => -1
);
$my_query = new WP_Query($args);
?>
<main>
    <h1>The page title</h1>
    <p>
        <?
        if ($my_query->have_posts()) {
            print"<h2>";
            print"categori";
            print"</h2>";
            print"<ol style='margin-left:50px;'>";
            while ($my_query->have_posts()) {

                $my_query->the_post();
                print"<li>";
                the_title();
                print"</li><p>";
                the_content();
                print"</p>";
            }
            print"</ol>";
        }else {
            echo"no found- index";

        }

        ?>
    </p>
    <h1>hello there, single</h1>
</main>
<?php
get_footer();
?>
