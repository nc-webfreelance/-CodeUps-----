<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <?php
  $home = esc_url(home_url('/'));
  $service = esc_url(home_url('/service'));
  $blog = esc_url(home_url('/blog'));
  $price = esc_url(home_url('/price'));
  $faq = esc_url(home_url('/faq'));
  $information = esc_url(home_url('/information'));
  $contact = esc_url(home_url('/contact'));
  $privacypolicy = esc_url(home_url('/privacypolicy'));
  $sitemap = esc_url(home_url('/sitemap'));
  ?>


  <header class="header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
        <?php else : ?>
          <div class="header__logo">
          <?php endif; ?>
          <a href="<?php echo $home; ?>" class="header__logoLink">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/company-logo.png" alt="スターバイオレット" />
          </a>
          <?php if (is_front_page()) : ?>
        </h1>
      <?php else : ?>
    </div>
  <?php endif; ?>
  <div class="header__hamburger js-hamburger u-mobile">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav class="header__sp-nav sp-nav js-sp-nav">
    <div class="sp-nav__inner">
      <div class="sp-nav__wrapper site-nav site-nav--sp">
        <div class="site-nav__left js-drawer">
          <ul class="site-nav__left-items">
            <li class="site-nav__item">
              <a href="<?php echo $service; ?>">サービス</a>
            </li>
            <li class="site-nav__item">
              <a href="<?php echo $service; ?>#hotel">ホテル</a>
            </li>
            <li class="site-nav__item">
              <a href="<?php echo $service; ?>#trimming">トリミング</a>
            </li>
            <li class="site-nav__item">
              <a href="<?php echo $service; ?>#dog-run">ドッグラン</a>
            </li>
            <li class="site-nav__item">
              <a href="<?php echo $service; ?>#merchandise-sales">グッズ販売</a>
            </li>
          </ul>
          <ul class="site-nav__left-items">
            <li class="site-nav__item">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
          <ul class="site-nav__left-items">
            <li class="site-nav__item">
              <a href="<?php echo $price; ?>">料金表</a>
            </li>
          </ul>
        </div>
        <div class="site-nav__right js-drawer">
          <ul class="site-nav__right-items">
            <li class="site-nav__item">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
          </ul>
          <ul class="site-nav__right-items">
            <li class="site-nav__item">
              <a href="<?php echo $information; ?>">店舗情報</a>
            </li>
          </ul>
          <ul class="site-nav__right-items">
            <li class="site-nav__item">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
          <ul class="site-nav__right-items">
            <li class="site-nav__item">
              <a href="<?php echo $privacypolicy; ?>">プライバシー <br class="u-mobile">ポリシー</a>
            </li>
          </ul>
          <ul class="site-nav__right-items">
            <li class="site-nav__item">
              <a href="<?php echo $sitemap; ?>">サイトマップ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <nav class="header__pc-nav pc-nav js-pc-nav u-desktop">
    <ul class="pc-nav__items">
      <li class="pc-nav__item">
        <a href="<?php echo $service; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Service</p>
            <p class="pc-nav__jatitle">サービス</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $blog; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Blog</p>
            <p class="pc-nav__jatitle">ブログ</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $price; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Price</p>
            <p class="pc-nav__jatitle">料金</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $faq; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">FAQ</p>
            <p class="pc-nav__jatitle">よくある質問</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $information; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Information</p>
            <p class="pc-nav__jatitle">店舗情報</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $contact; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Contact</p>
            <p class="pc-nav__jatitle">お問い合わせ</p>
          </div>
        </a>
      </li>
    </ul>
  </nav>
  </div>
  </header>