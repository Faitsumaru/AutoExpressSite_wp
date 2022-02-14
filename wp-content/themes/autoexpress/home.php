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
            <div class="services__content-textbox">
              <h6 class="services__content-title">Почему ввоз авто из США?</h6>
              <p>
                Мы сравнили рынки США с Европейскими и поняли, что покупка автомобиля в Америке выгоднее 
                в несколько раз, как бы парадоксально это не звучало. Это вызвано продуманной логистикой, 
                уровнем развития сервисов по оцениванию состояния авто и самим процессом покупки автомобиля.
              </p>
              <p>
                Большинство граждан США берут автомобиль в лизинг на несколько лет и все время эксплуатации 
                сама лизинговая компания занимается постоянным ТО автомобиля, вследствие чего, машины из США 
                – один из лучших выборов для автолюбителей России.
              </p>
            </div>
            <div class="services__content-textbox">
              <h6 class="services__content-title">Из-за чего такая низкая цена?</h6>
              <p>
                Битые автомобили из США выкупаются с аукционов страховых компаний. На этих аукционах машина 
                теряет половину цены даже из-за минимальных повреждений. Если учитывать денежные затраты, 
                а именно выкуп, доставку, таможню и ремонт, то цена аналогичного по состоянию автомобиля 
                в России будет выше на 35-50%, а новые будут стоить космических денег.
              </p>
              <a href="#" class="button button--decor">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
            </div>
          </div>
          <ol class="services__list-box">
            <li class="services__item">
              <h3 class="services__item-title">Покупка авто</h3>
              <p class="services__item-text">Подбор автомобиля и экспертная проверка</p>
            </li>
            <li class="services__item">
              <h3 class="services__item-title">Доставка морем</h3>
              <p class="services__item-text">Расчет оптимальной стоимости доставки авто</p>
            </li>
            <li class="services__item">
              <h3 class="services__item-title">Растаможка авто</h3>
              <p class="services__item-text">Прохождение таможенного оформления (2-3 дня)</p>
            </li>
            <li class="services__item">
              <h3 class="services__item-title">Ремонт авто</h3>
              <p class="services__item-text">Комплексный ремонт автомобиля на  СТО</p>
            </li>
            <li class="services__item">
              <h3 class="services__item-title">Сертификация</h3>
              <p class="services__item-text">Услуга предоставляется по желанию</p>
            </li>
            <li class="services__item">
              <h3 class="services__item-title">Постановка на учет</h3>
              <p class="services__item-text">Оформление автомобиля в России</p>
            </li>
          </ol>
        </div>
      </section>

      <!--3 block-->
      <section class="benefits">
        <div class="benefits__inner">

          <img src="<?php bloginfo('template_url'); ?>/assets/images/benefits-auto.png" alt="benefits auto" class="benefits__img">
          <div class="benefits__content">
            <h2 class="benefits__title main-title">ПОЧЕМУ МЫ?</h2>
            <ul class="benefits__info">
              <li class="benefits__item">
                <h2 class="benefits__item-title">650</h2>
                <h3 class="benefits__item-subtitle">успешно доставленных авто</h3>
                <p>
                  большой опыт пригона автомобилей из США под ключ, все клиенты остались довольны на 100%
                </p>
              </li>
              <li class="benefits__item">
                <h2 class="benefits__item-title">5</h2>
                <h3 class="benefits__item-subtitle">лет на рынке России</h3>
                <p>
                  Работаем по всей территории России, работаем по договору с клиентами
                </p>
              </li>
              <li class="benefits__item">
                <h2 class="benefits__item-title">100 %</h2>
                <h3 class="benefits__item-subtitle">доверия клиентов</h3>
                <p>
                  Онлайн отчетность. Вы всегда в курсе статуса подбора вашего авто. Фото и видео отчет
                </p>
              </li>
            </ul>
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
                'numberposts' => -1, //-1 выводи все имеющиеся посты
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
                  Москва, ЮАО<br>
                  ул. Кантемировская, д.7, к.3
                </p>
              </li>
              <li class="contacts__item">
                <h6 class="contacts__item-title">Время работы</h6>
                <p class="contacts__item-text">
                  Пн-Сб: с 9:00 до 19:00,<br>
                  Вс: выходной
                </p>
              </li>
              <li class="contacts__item">
                <h6 class="contacts__item-title">Телефон</h6>
                <p class="contacts__item-text">
                  +7 (905) 555 66 77
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

