<aside class="two-col__right sidebar">
  <ul class="sidebar__list">
    <li class="sidebar__item">
      <!-- とりあえず最新のものを表示にしてる -->
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      ); // カスタム投稿タイプ Products
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="sidebar__title">
          <h3>人気記事</h3>
        </div>
        <ul class="sidebar__ranking sidebar-ranking">
          <!-- ループ開始 -->
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="sidebar-ranking__item">
              <article class="sidebar-ranking__contents">
                <a href="<?php the_permalink(); ?>" class="sidebar-ranking__contents-link">
                  <div class="sidebar-ranking__contents-image">
                    <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                  </div>
                  <div class="sidebar-ranking__contents-meta">
                    <time class="sidebar-ranking__contents-date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                    <p class="sidebar-ranking__contents-title">
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
      <?php
      $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 1,
      ); // カスタム投稿タイプ Products
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="sidebar__title">
          <h3>口コミ</h3>
        </div>
        <ul class="sidebar__voice sidebar-voice">
          <!-- ループ開始 -->
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="sidebar-voice__item">
              <div class="sidebar-voice__image">
                <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
              </div>
              <p class="sidebar-voice__meta"><?php the_field('voice_age'); ?>(<?php the_field('voice_gene'); ?>)</p>
              <p class="sidebar-voice__title">
                <?php the_title(); ?>
              </p>
            </li>
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
        <!-- ループ終了 -->
        </ul>
        <div class="sidebar-voice__btn">
          <a class="button" href="<?php echo esc_url(home_url('/voice')); ?>"><span>View more</span></a>
        </div>
    </li>
    <li class="sidebar__item">
      <?php
      $args = array(
        'post_type' => 'campaign',
        'posts_per_page' => 2,
      ); // カスタム投稿タイプ Products
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="sidebar__title">
          <h3>キャンペーン</h3>
        </div>
        <ul class="sidebar__campaign sidebar-campaign">
          <!-- ループ開始 -->
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="sidebar-campaign__item">
              <a href="#" class="sidebar-campaign__card campaign-card campaign-card--sidebar">
                <div class="campaign-card__image campaign-card__image--sidebar">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <div class="campaign-card__body campaign-card__body--sidebar">
                  <div class="campaign-card__head campaign-card__head--sidebar">
                    <div class="campaign-card__title">
                      <p><?php the_title(); ?></p>
                    </div>
                  </div>
                  <div class="campaign-card__foot campaign-card__foot--sidebar">
                    <div class="campaign-card__text">
                      <p>全部コミコミ(お一人様)</p>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥<?php the_field('price_before'); ?></p>
                      <p class="campaign-card__price-after">¥<?php the_field('price_after'); ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
        <?php endwhile;
        endif; ?>
        <!-- ループ処理終了 -->
        </ul>
        <div class="sidebar-campaign__btn">
          <a class="button" href="<?php echo esc_url(home_url('/campaign')); ?>"><span>View more</span></a>
        </div>
    </li>
    <li class="sidebar__item">
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
    </li>
  </ul>
</aside>