<?php get_header(); ?>


<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-faq-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-faq-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-faq-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-faq-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>FAQ</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-faq layout-subPage">
  <div class="page-faq__inner inner">
    <ul class="page-faq__list page-faq-list">
      <!-- ループ開始 -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <li class="page-faq-list__item">
            <p class="page-faq-list__item-question js-faq-question is-open">
            <?php the_field('question'); ?>
            </p>
            <div class="page-faq-list__item-answer">
            <?php the_field('answer'); ?>
            </div>
          </li>
      <?php endwhile;
      endif; ?>
      <!-- ループ終了 -->
    </ul>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>