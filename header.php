<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php $home = get_template_directory_uri(); ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title> <?php wp_title(); ?> </title>
  <meta name="theme-color" content="#0c3446">

  <!-- Frameworks -->

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?= $home ?>/assets/css/main.css?<?php echo date('Dhms')?>">

  <!-- Google Tag Manager -->



  <!-- End Google Tag Manager -->

  <?php wp_head(); ?>
</head>

<body>