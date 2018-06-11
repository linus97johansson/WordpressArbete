<?php
/*  Template Name: Kontakt
* Desription: Kontaktsidan
*/

get_header();
?>

<main>

    <div class="information-container">

      <?php dynamic_sidebar('kontakt_widget') ?>
      <?php dynamic_sidebar('tider_widget') ?>
      <?php dynamic_sidebar('maps_widget') ?>
    </div>

</main>

<?php
    get_footer();
?>
