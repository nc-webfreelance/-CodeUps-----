
<?php
if (is_page('service')) {
    $imagePc = '/assets/images/common/sub-mv-aboutus-pc';
    $imageSp = '/assets/images/common/sub-mv-aboutus-sp';
    $title = 'Service';
} elseif (is_page('price')) {
    $imagePc = '/assets/images/common/sub-mv-price-pc';
    $imageSp = '/assets/images/common/sub-mv-price-sp';
    $title = 'Price';
} elseif (is_page('service')) {
    $imagePc = '/assets/images/common/sub-mv-service-pc';
    $imageSp = '/assets/images/common/sub-mv-service-sp';
    $title = 'service';
} elseif (is_page('faq')) {
    $imagePc = '/assets/images/common/sub-mv-faq-pc';
    $imageSp = '/assets/images/common/sub-mv-faq-sp';
    $title = 'FAQ';
} elseif (is_page('information')) {
    $imagePc = '/assets/images/common/sub-mv-pc';
    $imageSp = '/assets/images/common/sub-mv-sp';
    $title = 'Information';
} elseif (is_page('contact')) {
    $imagePc = '/assets/images/common/sub-mv-contact-pc';
    $imageSp = '/assets/images/common/sub-mv-contact-sp';
    $title = 'Contact';
} elseif (is_page('privacypolicy')) {
    $imagePc = '/assets/images/common/sub-mv-pc';
    $imageSp = '/assets/images/common/sub-mv-sp';
    $title = 'Privacy Policy';
} elseif (is_page('sitemap')) {
    $imagePc = '/assets/images/common/sub-mv-pc';
    $imageSp = '/assets/images/common/sub-mv-sp';
    $title = 'Site MAP';
} elseif (is_page('thanks')) {
    $imagePc = '/assets/images/common/sub-mv-contact-pc';
    $imageSp = '/assets/images/common/sub-mv-contact-sp';
    $title = 'Contact';
} elseif (is_single()) {
    $imagePc = '/assets/images/common/sub-mv-blog-pc';
    $imageSp = '/assets/images/common/sub-mv-blog-sp';
    $title = 'Blog';
} elseif (is_home()) {
    $imagePc = '/assets/images/common/sub-mv-blog-pc';
    $imageSp = '/assets/images/common/sub-mv-blog-sp';
    $title = 'Blog';
} else {
    $image = '';
    $title = '背景画像とタイトルが設定されていません';
}
?>




<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?><?php echo $imagePc; ?>.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?><?php echo $imagePc; ?>.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?><?php echo $imageSp; ?>.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?><?php echo $title; ?>.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1><?php echo $title; ?></h1>
    </div>
  </div>
</div>