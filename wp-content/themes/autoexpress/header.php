<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auto Express</title>

    <?php wp_head(); ?>

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css"> -->  
</head>

<body>
  
  <!--1 block-->
  <header class="header" id="header">
    <div class="container">

      <div class="header__top">
        <?php the_custom_logo(); ?> <!--logotype-->
        <a href="tel:<?php the_field('phone-number'); ?>">
          <h2><?php the_field('phone'); ?></h2>
        </a>
      </div>

      <div class="header__content">
        <h1 class="header__title"><?php the_field('main-title'); ?></h1>
        <h2 class="header__subtitle"><?php the_field('main-subtitle'); ?></h2>
        <p class="header__text">
          <?php the_field('main-text'); ?>
        </p>
        <a href="#" class="button">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        <div class="social">
          <a class="social-item" href="<?php the_field('instagram-link');?>" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/instagram.svg" alt="instagram icon" class="social-img">
             <!--bloginfo() - выводит информацию о сайте (подр: https://wp-kama.ru/function/bloginfo)-->
          </a>
          <a class="social-item" href="<?php the_field('telegram-link');?>" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/telegram.svg" alt="telegram icon" class="social-img">
          </a>
          <a class="social-item" href="<?php the_field('whatsapp-link');?>" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/whatsapp.svg" alt="whatsapp icon" class="social-img">
          </a>
          <a class="social-item" href="<?php the_field('facebook-link');?>" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/facebook.svg" alt="facebook icon" class="social-img">
          </a>
        </div>
        <img src="<?php the_field('main-img'); ?>" alt="ford mustang" class="header__image">
      </div>

    </div>
  </header>