<?php get_header();

$args = array(
    "post_type" => "featureditem",
    "posts_per_page" => -1,
);

$my_query = new WP_Query( $args);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Vet att man inte ska ladda in jquery här, men fick det att fungera iaf.. -->
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<div id="slider">
    <?php

    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {

            $my_query->the_post();
            print"<div>";
            the_post_thumbnail(none,array('class'=>'sliderImage'));
            print"<div class='featuredtext'><p>";
            the_title();
            print"</p></div>";
            print"</div>";
        }

    }

    ?>
</div>
<main>


  <div class="information-container">
    <div class="flex">


    <?php dynamic_sidebar( 'tider_widget' ); ?>
    <?php dynamic_sidebar('lunch_widget') ?>

    </div>
  </div>
</main>
<?php get_footer(); ?>
<script>
    $(document).ready(function(){
        $("#slider").bxSlider();
    })
</script>
