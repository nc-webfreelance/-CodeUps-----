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
          <?php
          $cat_info = get_category(get_query_var('cat'));
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          ?>
          <?php
          if (wp_is_mobile()) {
            $num = 6; // スマホの表示数(全件は-1)
          } else {
            $num = 6; // PCの表示数(全件は-1)
          }
          $args = array(
            'post_type' => array('post'), // 投稿タイプのスラッグ(通常投稿なので'post')
            'paged' => $paged, // ページネーションがある場合に必要
            'posts_per_page' => $num, // 表示件数（変更不要）
            'category_name' => $cat_info->slug,
          );
          $wp_query = new WP_Query($args);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :
              $wp_query->the_post();
          ?>
              <a href="<?php the_permalink(); ?>" class="cards__item card">
                <div class="card__inner">
                <div class="card__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpeg" alt="" />
                    <?php endif; ?>
                  </div>
                  <div class="card__body">
                    <div class="card__meta">
                      <time class="card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                      <div class="card__category">
                        <p><?php $cat = get_the_category();
                            $cat = $cat[0]; {
                              echo $cat->name;
                            } ?></p>
                      </div>
                    </div>
                    <h3 class="card__title"><?php the_title(); ?></h3>
                    <div class="card__text">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
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

<!-- contact -->
<?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>