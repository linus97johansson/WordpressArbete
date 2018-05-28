<?php
get_header();
?>
<main>
    <?php
    print"hellot there";
    if (have_posts()) {

    while (have_posts()) {

    the_post();
    echo the_title();
    the_content();
    }
    }else {
    echo"no found";
    } ?>

</main>
<?php
get_footer();
?>
