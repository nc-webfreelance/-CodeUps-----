<aside class="two-col__right sidebar">
  <ul class="sidebar__list">
    <li class="sidebar__item">
      <div class="sidebar__title">
        <h3>人気記事</h3>
      </div>
      <ul class="sidebar__article sidebar-article">
      <?php
      setPostViews( get_the_ID() );
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
                    <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
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
    <!-- <li class="sidebar__item">
      <div class="sidebar__title">
        <h3>アーカイブ</h3>
      </div>
      <ul class="sidebar__archive sidebar-archive">
        <li class="sidebar-archive__item-wrap">
          <p class="js-archive">2023</p>
          <ul class="sidebar-archive__items">
            <li class="sidebar-archive__item">
              <a href="#">3月</a>
            </li>
            <li class="sidebar-archive__item">
              <a href="#">2月</a>
            </li>
            <li class="sidebar-archive__item">
              <a href="#">1月</a>
            </li>
          </ul>
        </li>
        <li class="sidebar-archive__item-wrap">
          <p class="js-archive">2022</p>
          <ul class="sidebar-archive__items">
            <li class="sidebar-archive__item">
              <a href="#">3月</a>
            </li>
            <li class="sidebar-archive__item">
              <a href="#">2月</a>
            </li>
            <li class="sidebar-archive__item">
              <a href="#">1月</a>
            </li>
          </ul>
        </li>
      </ul>
    </li> -->
  </ul>
</aside>