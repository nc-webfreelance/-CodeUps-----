<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>



  <?php
  $home = esc_url(home_url('/ '));
  $campaign = esc_url(home_url('/campaign/ '));
  $aboutus = esc_url(home_url('/aboutus/ '));
  $information = esc_url(home_url('/information/ '));
  $blog = esc_url(home_url('/blog/ '));
  $voice = esc_url(home_url('/voice/ '));
  $price = esc_url(home_url('/price/ '));
  $faq = esc_url(home_url('/faq/ '));
  $privacyPolicy = esc_url(home_url('/privacyPolicy/ '));
  $termsOfService = esc_url(home_url('/termsOfService/ '));
  $contact = esc_url(home_url('/contact/ '));
  ?>



  <header class="header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
        <?php else : ?>
          <div class="header__logo">
          <?php endif; ?>
          <a href="<?php echo $home; ?>" class="header__logoLink">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps--white.svg" alt="コードアップスのロゴ" />
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
      <div class="sp-nav__wrapper">
        <div class="sp-nav__left js-drawer">
          <ul class="sp-nav__left-items">
            <li class="sp-nav__left-item">
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="sp-nav__left-item">
              <a href="<?php echo $campaign; ?>">ライセンス取得</a>
            </li>
            <li class="sp-nav__left-item">
              <a href="<?php echo $campaign; ?>">貸切体験ダイビング</a>
            </li>
            <li class="sp-nav__left-item">
              <a href="<?php echo $campaign; ?>">ナイトダイビング</a>
            </li>
          </ul>
          <ul class="sp-nav__left-items">
            <li class="sp-nav__left-item">
              <a href="<?php echo $aboutus; ?>">私たちについて</a>
            </li>
          </ul>
          <ul class="sp-nav__left-items">
            <li class="sp-nav__left-item">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="sp-nav__left-item">
              <a href="<?php echo $information; ?>?tabId=tab1">ライセンス講習</a>
            </li>
            <li class="sp-nav__left-item">
              <a href="<?php echo $information; ?>?tabId=tab3">体験ダイビング</a>
            </li>
            <li class="sp-nav__left-item">
              <a href="<?php echo $information; ?>">ファンダイビング</a>
            </li>
          </ul>
          <ul class="sp-nav__left-items">
            <li class="sp-nav__left-item">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="sp-nav__right js-drawer">
          <ul class="sp-nav__right-items">
            <li class="sp-nav__right-item">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
          </ul>
          <ul class="sp-nav__right-items">
            <li class="sp-nav__right-item">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="sp-nav__right-item">
              <a href="<?php echo $price; ?>">ライセンス講習</a>
            </li>
            <li class="sp-nav__right-item">
              <a href="<?php echo $price; ?>">体験ダイビング</a>
            </li>
            <li class="sp-nav__right-item">
              <a href="<?php echo $price; ?>">ファンダイビング</a>
            </li>
          </ul>
          <ul class="sp-nav__right-items">
            <li class="sp-nav__right-item">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
          </ul>
          <ul class="sp-nav__right-items">
            <li class="sp-nav__right-item">
              <a href="<?php echo $privacyPolicy; ?>">プライバシー<br />
                ポリシー</a>
            </li>
          </ul>
          <ul class="sp-nav__right-items">
            <li class="sp-nav__right-item">
              <a href="<?php echo $termsOfService; ?>">利用規約</a>
            </li>
          </ul>
          <ul class="sp-nav__right-items">
            <li class="sp-nav__right-item">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <nav class="header__pc-nav pc-nav js-pc-nav u-desktop">
    <ul class="pc-nav__items">
      <li class="pc-nav__item">
        <a href="<?php echo $campaign; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Campaign</p>
            <p class="pc-nav__jatitle">キャンペーン</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $aboutus; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">About us</p>
            <p class="pc-nav__jatitle">私たちについて</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $information; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Information</p>
            <p class="pc-nav__jatitle">ダイビング情報</p>
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
        <a href="<?php echo $voice; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Voice</p>
            <p class="pc-nav__jatitle">お客様の声</p>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $price; ?>">
          <div class="pc-nav__text">
            <p class="pc-nav__engtitle">Price</p>
            <p class="pc-nav__jatitle">料金一覧</p>
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