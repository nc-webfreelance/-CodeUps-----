<aside class="two-col__right sidebar">
  <ul class="sidebar__list">
    <li class="sidebar__item">
      <div class="sidebar__title">
        <h3>人気記事</h3>
      </div>
      <ul class="sidebar__article sidebar-article">
        <?php
        setPostViews(get_the_ID());
        $args = array(
          'post_type' => 'post',
          'meta_key' => 'post_views_count',
          'orderby' => 'meta_value_num',
          'order' => 'DESC',
          'posts_per_page' => 3,
        ); // カスタム投稿タイプ Products
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <!-- ループ開始 -->
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="sidebar-article__item">
              <article class="sidebar-article__contents">
                <a href="<?php the_permalink(); ?>" class="sidebar-article__contents-link">
                  <div class="sidebar-article__contents-image">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpeg" alt="" />
                    <?php endif; ?>
                  </div>
                  <div class="sidebar-article__contents-meta">
                    <time class="sidebar-article__contents-date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                    <p class="sidebar-article__contents-title">
                      <?php the_title(); ?>
                    </p>
                  </div>
                </a>
              </article>
            </li>
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
        <!-- ループ終了 -->
      </ul>
    </li>
    <li class="sidebar__item">
      <div class="sidebar__title">
        <h3>カテゴリー</h3>
      </div>
      <div class="sidebar__category sidebar-category">
        <ul class="sidebar-category__items">
          <li class="sidebar-category__item">
            <a href="<?php echo esc_url(home_url('/category/hotel')); ?>">ホテル</a>
          </li>
          <li class="sidebar-category__item">
            <a href="<?php echo esc_url(home_url('/category/trimming')); ?>">トリミング</a>
          </li>
          <li class="sidebar-category__item">
            <a href="<?php echo esc_url(home_url('/category/dog-run')); ?>">ドッグラン</a>
          </li>
          <li class="sidebar-category__item">
            <a href="<?php echo esc_url(home_url('/category/merchandise-sales')); ?>">グッズ販売</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</aside>