<?php get_header(); ?>


<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>Blog</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>


<div class="two-col layout-subPage">
  <div class="two-col__inner inner">
    <div class="two-col__wrap">
      <div class="two-col__left">
        <div class="two-col__cards cards cards--archive">
          <!-- ループ処理開始 -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="cards__item card">
                <div class="card__inner">
                  <div class="card__image">
                    <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                  </div>
                  <div class="card__body">
                    <time class="card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                    <h3 class="card__title"><?php the_title(); ?></h3>
                    <div class="card__text">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
              </a>
          <?php endwhile;
          endif; ?>
          <!-- ループ処理終了 -->

        </div>
        <div class="two-col__pagenavi pagenavi">
          <!-- wp-pagenavi -->
          <?php wp_pagenavi(); ?>
        </div>
      </div>
      <!-- two-col__right/sidebar -->
      <?php get_template_part('parts/sidebar'); ?>
    </div>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>