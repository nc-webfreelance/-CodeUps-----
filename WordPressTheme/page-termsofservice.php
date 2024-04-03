<?php get_header(); ?>

<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>Terms of Service</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-termsOfService layout-subPage">
  <div class="page-termsOfService__inner inner">
    <div class="page-termsOfService__content">
      <div class="page-termsOfService__title">
        <h2>
          <?php echo get_the_title(); ?>
        </h2>
      </div>
      <div class="page-termsOfService__text">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>