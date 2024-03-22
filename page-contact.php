<?php /* Template Name:contact  */ ?>
<?php get_header(); ?>
<main>
  <div class="c-mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-mv.jpg" alt="お問い合わせのメインビジュアル">
    <h1>お問い合わせ</h1>
  </div>
  <div class="p-contact">
    <ul class="p-contact__bannerArea">
      <li class="p-contact__banner-item">
        <h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-tel.svg" alt="電話のロゴ">
          電話
        </h3>
        <a href="" class="p-contact__link--tel">06-7897-3878</a>
        <div class="p-contact__banner-reception">
          <p>受付時間</p>
          <span>10:00～24:00</span>
        </div>
      </li>
      <li class="p-contact__banner-item">
        <h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-mail.svg" alt="メールのロゴ">
          お問い合わせ
        </h3>
        <p class="p-contact__banner-text">
          下記フォームよりお気軽にお問い合わせ下さい
        </p>
        <div class="p-contact__banner-reception">
          <p>24時間受付</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="p-contact-form">
    <h2 class="c-subtitle">お問い合わせフォーム</h2>
    <?php echo do_shortcode('[contact-form-7 id="028c027" title="お問い合わせフォーム"]'); ?>
  </div>
</main>
<?php get_footer(); ?>