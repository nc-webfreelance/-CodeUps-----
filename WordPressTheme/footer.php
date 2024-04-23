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


<?php if (!is_404()) : ?>
  <div class="to-top">
    <a href="#top"><span></span></a>
  </div>
<?php else : ?>
<?php endif; ?>


<footer class="footer  <?php if (is_page(array('contact', 'thanks'))) {echo 'layout-page-footer';} ?>">
  <div class="footer__inner inner">
    <div class="footer__head">
      <a href="<?php echo $home; ?>" class="footer__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/company-logo.png" alt="スターバイオレット" />
      </a>
      <div class="footer__icons">
        <a href="#" class="footer__icon">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-logo.svg" alt="フェイスブック" />
        </a>
        <a href="#" class="footer__icon">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-logo.svg" alt="インスタグラム" />
        </a>
      </div>
    </div>
    <nav class="footer__nav site-nav">
      <div class="site-nav__left">
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
      <div class="site-nav__right">
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
    </nav>
    <div class="footer__copyright">
      <small>&copy; 2024 Star Violet. All Rights
        Reserved.</small>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</html>