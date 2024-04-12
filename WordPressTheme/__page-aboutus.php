<?php get_header(); ?>

<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

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
        <span class="section-header__title"> Gallery</span>
        <h3 class="section-header__subtitle">フォト</h3>
      </div>
    </div>
    <ul class="gallery__list gallery-list">
      <?php
      $gallery_group = SCF::get('gallery-images');
      foreach ($gallery_group as $fields) { ?>
        <li class="gallery-list__item">
          <?php
          $image = get_post_meta($post->ID, 'gallery', true);
          echo wp_get_attachment_image($fields['gallery'], 'full');
          ?>
        </li>
      <?php } ?>
    </ul>
  </div>
  <div id="gallery__modal-image"></div>
</section>



<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>