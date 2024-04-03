<?php get_header(); ?>

<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-aboutus-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-aboutus-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-aboutus-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-aboutus-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>About us</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-aboutus layout-subPage">
  <div class="page-aboutus__inner inner">
    <div class="page-aboutus__wrap">
      <div class="page-aboutus__images">
        <div class="page-aboutus__first-image u-desktop">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-house.webp" type="image/webp" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-house.jpg" alt="青空の下に、屋根の上にシーサーの置物がある家" />
          </picture>
        </div>
        <div class="page-aboutus__second-image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-ocean.webp" type="image/webp" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-ocean.jpg" alt="海の中で泳ぐ二匹の黄色い魚" />
          </picture>
        </div>
      </div>
      <div class="page-aboutus__body">
        <div class="page-aboutus__head">
          <h2>
            Dive into<br />
            the Ocean
          </h2>
        </div>
        <div class="page-aboutus__text">
          <p>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery layout-gallery">
  <div class="gallery__inner inner">
    <div class="gallery__title">
      <div class="section-header">
        <span class="section-header__engtitle"> Gallery</span>
        <h3 class="section-header__jatitle">フォト</h3>
      </div>
    </div>
    <ul class="gallery__list gallery-list">
      <li class="gallery-list__item">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-1.webp" type="image/webp" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-1.jpg" alt="海の中を泳ぐたくさんの小さな赤い魚とサンゴ礁" />
        </picture>
      </li>
      <li class="gallery-list__item">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-2.webp" type="image/webp" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-2.jpg" alt="海に浮かむ二艘の船" />
        </picture>
      </li>
      <li class="gallery-list__item">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-3.webp" type="image/webp" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-3.jpg" alt="海の中を泳ぐ２匹の魚" />
        </picture>
      </li>
      <li class="gallery-list__item">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-4.webp" type="image/webp" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-4.jpg" alt="海の中を泳ぐ１匹の黄色い魚" />
        </picture>
      </li>
      <li class="gallery-list__item">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-5.webp" type="image/webp" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-5.jpg" alt="海の中を泳ぐたくさんの小さな魚" />
        </picture>
      </li>
      <li class="gallery-list__item">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-6.webp" type="image/webp" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery-6.jpg" alt="たくさんの魚とサンゴ礁" />
        </picture>
      </li>
    </ul>
  </div>
  <div id="gallery__modal-image"></div>
</section>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>