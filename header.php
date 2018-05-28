<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name')?></title>
</head>
<body>
  <?php get_template_part('partials/sitehead');
wp_head();
?>