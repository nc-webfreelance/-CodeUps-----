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





<?php if (!is_404()) : ?>
  <div class="to-top">
    <a href="#top"><span></span></a>
  </div>
<?php else : ?>
<?php endif; ?>

<?php if (is_404()) : ?>
  <footer class="footer">
  <?php elseif (is_page('thanks')) : ?>
    <footer class="footer layout-page-contact-footer">
    <?php else : ?>
      <footer class="footer layout-footer">
      <?php endif; ?>
      <div class="footer__inner inner">
        <div class="footer__head">
          <a href="<?php echo $home; ?>" class="footer__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps--white.svg" alt="コードアップスのロゴ" />
          </a>
          <div class="footer__icons">
            <a href="#" class="footer__icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-logo.svg" alt="フェイスブックのロゴ" />
            </a>
            <a href="#" class="footer__icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-logo.svg" alt="インスタグラムのロゴ" />
            </a>
          </div>
        </div>
        <nav class="footer__nav site-nav">
          <div class="footer__nav-left site-nav__left">
            <div class="site-nav__wrap">
              <ul class="site-nav__left-items">
                <li class="site-nav__left-item">
                  <a href="<?php echo $campaign; ?>">キャンペーン</a>
                </li>
                <li class="site-nav__left-item">
                  <a href="<?php echo $campaign; ?>">ライセンス取得</a>
                </li>
                <li class="site-nav__left-item">
                  <a href="<?php echo $campaign; ?>">貸切体験ダイビング</a>
                </li>
                <li class="site-nav__left-item">
                  <a href="<?php echo $campaign; ?>">ナイトダイビング</a>
                </li>
              </ul>
              <ul class="site-nav__left-items">
                <li class="site-nav__left-item">
                  <a href="<?php echo $aboutus; ?>">私たちについて</a>
                </li>
              </ul>
            </div>
            <div class="site-nav__wrap">
              <ul class="site-nav__left-items">
                <li class="site-nav__left-item">
                  <a href="<?php echo $information; ?>">ダイビング情報</a>
                </li>
                <li class="site-nav__left-item">
                  <a href="<?php echo $information; ?>?tabId=tab1">ライセンス講習</a>
                </li>
                <li class="site-nav__left-item">
                  <a href="<?php echo $information; ?>?tabId=tab3">体験ダイビング</a>
                </li>
                <li class="site-nav__left-item">
                  <a href="<?php echo $information; ?>?tabId=tab2">ファンダイビング</a>
                </li>
              </ul>
              <ul class="site-nav__left-items">
                <li class="site-nav__left-item">
                  <a href="<?php echo $blog; ?>">ブログ</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer__nav-right site-nav__right">
            <div class="site-nav__wrap">
              <ul class="site-nav__right-items">
                <li class="site-nav__right-item">
                  <a href="<?php echo $voice; ?>">お客様の声</a>
                </li>
              </ul>
              <ul class="site-nav__right-items">
                <li class="site-nav__right-item">
                  <a href="<?php echo $price; ?>">料金一覧</a>
                </li>
                <li class="site-nav__right-item">
                  <a href="<?php echo $price; ?>">ライセンス講習</a>
                </li>
                <li class="site-nav__right-item">
                  <a href="<?php echo $price; ?>">体験ダイビング</a>
                </li>
                <li class="site-nav__right-item">
                  <a href="<?php echo $price; ?>">ファンダイビング</a>
                </li>
              </ul>
            </div>
            <div class="site-nav__wrap">
              <ul class="site-nav__right-items">
                <li class="site-nav__right-item">
                  <a href="<?php echo $faq; ?>">よくある質問</a>
                </li>
              </ul>
              <ul class="site-nav__right-items">
                <li class="site-nav__right-item">
                  <a href="<?php echo $privacyPolicy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                </li>
              </ul>
              <ul class="site-nav__right-items">
                <li class="site-nav__right-item">
                  <a href="<?php echo $termsOfService; ?>">利用規約</a>
                </li>
              </ul>
              <ul class="site-nav__right-items">
                <li class="site-nav__right-item">
                  <a href="<?php echo $contact; ?>">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="footer__copyright">
          <small>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights
            Reserved.</small>
        </div>
      </div>
      </footer>



      <?php wp_footer(); ?>
      </body>

      </html>