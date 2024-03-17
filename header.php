<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header-logoArea">
      <img src="<?php echo get_template_directory_uri(); ?>/images/header/logo-white.png" alt="株式会社TENの会社ロゴ" class="white">
      <img src="<?php echo get_template_directory_uri(); ?>/images/header/logo-black.png" alt="株式会社TENの会社ロゴ" class="black">
      <p>株式会社TEN 10</p>
    </div>
    <div class="l-header__navArea c-display--pc">
      <nav class="l-header__nav">
        <ul>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <nav class="l-header__nav--sns">
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/header/Facebook.png" alt="Facebookのロゴ">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/header/Instagram.png" alt="Instagramのロゴ">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/header/X.png" alt="Xのロゴ" class="white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/header/news-X.png" alt="Xのロゴ" class="black">
          </li>
        </ul>
      </nav>
    </div>
    <button class="l-header__hamburger-button c-display--sp">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </button>
    <div class="l-header__hamburger-menu">
      <nav class="l-header__hamburger-list">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
          <li><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></li>
          <li><a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
      <nav class="l-header__hamburger-sns">
        <ul>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/header/Facebook.png" alt="Facebookのロゴ">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/header/Instagram.png" alt="Instagramのロゴ">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/header/X.png" alt="Xのロゴ">
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>