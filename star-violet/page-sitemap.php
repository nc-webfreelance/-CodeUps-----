<?php get_header(); ?>


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


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-sitemap layout-subPage">
  <div class="page-sitemap__inner inner">
    <nav class="page-sitemap__nav site-nav">
      <div class="site-nav__left">
        <ul class="site-nav__left-items">
          <li class="site-nav__item site-nav__item--brown">
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
          <li class="site-nav__item  site-nav__item--brown">
            <a href="<?php echo $blog; ?>">ブログ</a>
          </li>
        </ul>
        <ul class="site-nav__left-items">
          <li class="site-nav__item  site-nav__item--brown">
            <a href="<?php echo $price; ?>">料金表</a>
          </li>
        </ul>
      </div>
      <div class="site-nav__right">
        <ul class="site-nav__right-items">
          <li class="site-nav__item  site-nav__item--brown">
            <a href="<?php echo $faq; ?>">よくある質問</a>
          </li>
        </ul>
        <ul class="site-nav__right-items">
          <li class="site-nav__item site-nav__item--brown">
            <a href="<?php echo $information; ?>">店舗情報</a>
          </li>
        </ul>
        <ul class="site-nav__right-items">
          <li class="site-nav__item site-nav__item--brown">
            <a href="<?php echo $contact; ?>">お問い合わせ</a>
          </li>
        </ul>
        <ul class="site-nav__right-items">
          <li class="site-nav__item site-nav__item--brown">
            <a href="<?php echo $privacypolicy; ?>">プライバシー <br class="u-mobile">ポリシー</a>
          </li>
        </ul>
        <ul class="site-nav__right-items">
          <li class="site-nav__item site-nav__item--brown">
            <a href="<?php echo $sitemap; ?>">サイトマップ</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>


<?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>