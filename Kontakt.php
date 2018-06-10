<?php
/*  Template Name: Kontakt
* Desription: Kontaktsidan
*/

get_header();
?>

<main>


      <?php dynamic_sidebar('tider_widget') ?>
      <?php dynamic_sidebar('kontakt_widget') ?>
      <?php dynamic_sidebar('maps_widget') ?>


</main>

<?php
    get_footer();
?>
