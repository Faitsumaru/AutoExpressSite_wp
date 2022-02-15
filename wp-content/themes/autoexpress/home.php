<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

  <main class="main">
    <div class="container">

      <!--2 block-->
      <section class="services">
        <h2 class="services__title main-title">НАШИ УСЛУГИ</h2>
        <div class="services__inner">
          <div class="services__content-box">
            <?php the_field('service-text'); ?>
            <a href="#" class="button button--decor">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
          </div>
          <?php the_field('services-list'); ?>
        </div>
      </section>

      <!--3 block-->
      <section class="benefits">
        <div class="benefits__inner">

          <img src="<?php the_field('benefits-img'); ?>" alt="benefits auto" class="benefits__img">
          <div class="benefits__content">
            <h2 class="benefits__title main-title">ПОЧЕМУ МЫ?</h2>
            <?php the_field('benefits-list-title'); ?>
          </div>

        </div>
      </section>

      <!--4 block-->
      <section class="auto">
        <div class="auto__inner">

          <h2 class="auto__title main-title">ПРИГНАННЫЕ НАМИ АВТО</h2>
          <div class="auto__slider">
            
            <?php //Цикл (the loop), проверяющий, есть ли посты и выводящий их
              global $post;

              $myposts = get_posts([ 
                'numberposts' => -1, //-1 вывод все имеющиеся посты
                'category'    => 3
              ]);

              if( $myposts ){
                foreach( $myposts as $post ){
                  setup_postdata( $post );
            ?>
            
            <!-- Вывод постов, функции цикла: the_title() и т.д. -->
            <div class="slider__item">
                <div class="slider__item-box">

                  <?php the_post_thumbnail(
                    array(380, 250), //img size
                    array(
                      'class' => 'slider-img'
                    )
                  ); ?>
                  
                  <p class="slider__name"><?php the_title(); ?></p>
                  <p class="slider__text"><?php the_content(); ?></p>
                </div>
            </div>

            <?php } } wp_reset_postdata(); /*Сбрасываем $post*/ ?>

          </div>

        </div>
      </section>

      <!--5 block-->
      <section class="contacts">
        <div class="contancts__inner">

          <div class="contacts__info">
            <h2 class="contancts__title main-title">КОНТАКТЫ</h2>
            <ul class="contancts__list">
              <li class="contacts__item">
                <h6 class="contacts__item-title">Адрес</h6>
                <p class="contacts__item-text">
                  <?php the_field('address'); ?>
                </p>
              </li>
              <li class="contacts__item">
                <h6 class="contacts__item-title">Время работы</h6>
                <p class="contacts__item-text">
                  <?php the_field('working-hours'); ?>
                </p>
              </li>
              <li class="contacts__item">
                <h6 class="contacts__item-title">Телефон</h6>
                <p class="contacts__item-text">
                <a href="tel:<?php the_field('phone-number'); ?>">
                  <?php the_field('phone'); ?>
                </a>
                </p>
              </li>
            </ul>
          </div>

          <form action="" class="contacts__form">
            <h2 class="contacts__form-title main-title">Оставить заявку</h2>
            <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form"]') ?>
          </form>

        </div>
      </section>

    </div>
  </main>

<?php get_footer(); ?>

