  <!--6 block-->
  <footer class="footer" id="footer">
    <div class="container">
      <div class="footer__inner">

        <?php the_custom_logo(); ?>  <!--logotype-->
        <div class="social">
          <a class="social-item" href="<?php the_field('instagram-link');?>" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/instagram.svg" alt="instagram icon" class="social-img">
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
        <a href="<?php echo get_page_link(111); ?>" class="footer__link" target="_blank">Политика конфиденциальности</a> <!--111-record page's id-->

      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script> -->
</body>
</html>