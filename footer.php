<footer class="l-footer">
  <div class="l-footer__inner">
    <div class="l-footer__linkArea">
      <h3 class="l-footer__title">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-logo.png" alt="フッターの会社ロゴ">
        <span>株式会社TEN&nbsp;10</span>
      </h3>
      <div class="l-footer__linkArea--middle">
        <p class="l-footer__address">
          〒530-0015<br />
          大阪市北区中崎西4-3-9-204
        </p>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/footer/mail-logo.svg" alt="メールのロゴ">
            メールアドレス
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/footer/tel-logo.svg" alt="電話のロゴ">
            <a href="tel:06-7897-3878">06-7897-3878</a>
          </li>
        </ul>
      </div>
      <nav class="c-display--pc">
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-fasebook.png" alt="Facebookのロゴ"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-instagram.png" alt="Instagramのロゴ"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-x.png" alt="Xのロゴ" class="l-footer__image--x"></li>
        </ul>
      </nav>
    </div>
    <div class="l-footer__inner--bottom">
      <div class="l-footer__sitemap">
        <h3>サイトマップ</h3>
        <nav>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">・トップ</a></li>
            <li><a href="<?php echo esc_url(home_url('/company')); ?>">・会社概要</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>">・サービス</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">・お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
      <nav class="c-display--sp">
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-fasebook.png" alt="Facebookのロゴ"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-instagram.png" alt="Instagramのロゴ"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-x.png" alt="Xのロゴ" class="l-footer__image--x"></li>
        </ul>
      </nav>
      <div class="l-footer__images">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-tenkun.gif" alt="TENくんの画像">
      </div>
    </div>
  </div>
  <div class="l-footer__under">
    株式会社TEN&nbsp;10
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>