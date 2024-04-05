<?php get_header(); ?>


<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

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