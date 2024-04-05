<?php get_header(); ?>

<body>


  <?php
  $home = esc_url(home_url('/ '));
  $campaign = esc_url(home_url('/campaign/ '));
  $aboutus = esc_url(home_url('/aboutus/ '));
  $information = esc_url(home_url('/information/ '));
  $blog = esc_url(home_url('/blog/ '));
  $voice = esc_url(home_url('/voice/ '));
  $price = esc_url(home_url('/price/ '));
  $faq = esc_url(home_url('/faq/ '));
  $privacyPolicy = esc_url(home_url('/privacyPolicy/ '));
  $termsOfService = esc_url(home_url('/termsOfService/ '));
  $contact = esc_url(home_url('/contact/ '));
  ?>





  <?php
  $mv_sp1 = get_field('mv_sp1');
  $mv_sp2 = get_field('mv_sp2');
  $mv_sp3 = get_field('mv_sp3');
  $mv_sp4 = get_field('mv_sp4');
  $mv_pc1 = get_field('mv_pc1');
  $mv_pc2 = get_field('mv_pc2');
  $mv_pc3 = get_field('mv_pc3');
  $mv_pc4 = get_field('mv_pc4');
  ?>

  <section id="top" class="mv js-mv-height">
    <div class="mv__inner">
      <div class="mv__slider mv-swiper swiper js-swiper">
        <div class="mv-swiper__wrapper swiper-wrapper">
          <div class="mv-swiper__slide swiper-slide">
            <picture>
              <source srcset="<?php echo $mv_pc1 ?>" media="(min-width: 768px)">
              <img src="<?php echo $mv_sp1 ?>" alt="">
            </picture>
          </div>
          <div class="mv-swiper__slide swiper-slide">
            <picture>
              <source srcset="<?php echo $mv_pc2 ?>" media="(min-width: 768px)">
              <img src="<?php echo $mv_sp2 ?>" alt="">
            </picture>
          </div>
          <div class="mv-swiper__slide swiper-slide">
            <picture>
              <source srcset="<?php echo $mv_pc3 ?>" media="(min-width: 768px)">
              <img src="<?php echo $mv_sp3 ?>" alt="">
            </picture>
          </div>
          <div class="mv-swiper__slide swiper-slide">
            <picture>
              <source srcset="<?php echo $mv_pc4 ?>" media="(min-width: 768px)">
              <img src="<?php echo $mv_sp4 ?>" alt="">
            </picture>
          </div>
        </div>
      </div>
      <div class="mv__header">
        <h2>DIVING</h2>
        <p>into the ocean</p>
      </div>
    </div>
  </section>






  <?php
  $args = array(
    'post_type' => 'campaign',
    'posts_per_page' => -1,
  ); // カスタム投稿タイプ Products
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
  ?>
    <section id="campaign" class="campaign layout-top-campaign">
      <div class="campaign__inner inner">
        <div class="campaign__title">
          <div class="section-header">
            <span class="section-header__engtitle">Campaign</span>
            <h2 class="section-header__jatitle">キャンペーン</h2>
          </div>
        </div>
        <div class="campaign__swiper swiper js-campaign-swiper">
          <div class="campaign__cards swiper-wrapper">
            <!-- ループ開始 -->
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <a href="#" class="campaign__card campaign-card swiper-slide">
                <div class="campaign-card__image">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__head">
                    <div class="campaign-card__category">
                      <?php echo esc_html(get_the_terms(get_the_ID(), 'campaign-category')[0]->name); ?>
                    </div>
                    <div class="campaign-card__title">
                      <p><?php the_title(); ?></p>
                    </div>
                  </div>
                  <div class="campaign-card__foot">
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
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
          <!-- ループ終了 -->
          </div>
        </div>
        <div class="campaign__btn">
          <a class="button" href="<?php echo $campaign; ?>"><span>View more</span></a>
        </div>
        <div class="swiper-button-prev u-desktop"></div>
        <div class="swiper-button-next u-desktop"></div>
      </div>
    </section>

    <section id="aboutus" class="aboutus layout-top">
      <div class="aboutus__inner inner">
        <div class="aboutus__title">
          <div class="section-header">
            <span class="section-header__engtitle">About us</span>
            <h2 class="section-header__jatitle">私たちについて</h2>
          </div>
        </div>
        <div class="aboutus__images">
          <div class="aboutus__first-image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-house.webp" type="image/webp" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-house.jpg" alt="青空の下に、屋根の上にシーサーの置物がある家" />
            </picture>
          </div>
          <div class="aboutus__second-image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-ocean.webp" type="image/webp" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-ocean.jpg" alt="海の中で泳ぐ二匹の黄色い魚" />
            </picture>
          </div>
        </div>
        <div class="aboutus__body">
          <div class="aboutus__head">
            <h3>
              Dive into<br />
              the Ocean
            </h3>
          </div>
          <div class="aboutus__content">
            <div class="aboutus__text">
              <p>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
            <div class="aboutus__btn">
              <a class="button" href="<?php echo $aboutus; ?>"><span>View more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="information" class="information layout-top-information">
      <div class="information__inner inner">
        <div class="information__title">
          <div class="section-header">
            <span class="section-header__engtitle">Information</span>
            <h2 class="section-header__jatitle">ダイビング情報</h2>
          </div>
        </div>
        <div class="information__body">
          <div class="information__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-ocean.webp" type="image/webp" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-ocean.jpg" alt="たくさんの魚とサンゴ礁" />
            </picture>
          </div>
          <div class="information__textBody">
            <div class="information__head">
              <h3>ライセンス講習</h3>
            </div>
            <div class="information__text">
              <p>
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </p>
            </div>
            <div class="information__btn">
              <a class="button" href="<?php echo $information; ?>"><span>View more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="blog">
      <div class="blog__inner inner">
        <div class="blog__title">
          <div class="section-header section-header--white">
            <span class="section-header__engtitle section-header__engtitle--white">
              Blog
            </span>
            <h2 class="section-header__jatitle section-header__jatitle--white">
              ブログ
            </h2>
          </div>
        </div>
        <div class="blog__cards cards">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          ); // カスタム投稿タイプ Products
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <!-- ループ開始 -->
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="cards__item card">
                <div class="card__inner">
                  <div class="card__image">
                    <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                  </div>
                  <div class="card__body">
                    <time class="card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                    <h3 class="card__title"> <?php the_title(); ?></h3>
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
        <div class="blog__btn">
          <a class="button" href="<?php echo $blog; ?>"><span>View more</span></a>
        </div>
      </div>
    </section>


    <?php
    $args = array(
      'post_type' => 'voice',
      'posts_per_page' => 2,
    ); // カスタム投稿タイプ Products
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    ?>
      <section id="voice" class="voice layout-top">
        <div class="voice__inner inner">
          <div class="voice__title">
            <div class="section-header">
              <span class="section-header__engtitle">Voice</span>
              <h2 class="section-header__jatitle">お客様の声</h2>
            </div>
          </div>
          <div class="voice__cards wide-cards">
            <!-- ループ開始 -->
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="wide-cards__item wide-card">
                <div class="wide-card__inner">
                  <div class="wide-card__body">
                    <div class="wide-card__content">
                      <div class="wide-card__meta">
                        <p class="wide-card__age"><?php the_field('voice_age'); ?>(<?php the_field('voice_gene'); ?>)</p>
                        <div class="wide-card__category">
                          <?php echo esc_html(get_the_terms(get_the_ID(), 'voice-category')[0]->name); ?>
                        </div>
                      </div>
                      <div class="wide-card__head">
                        <p><?php the_title(); ?></p>
                      </div>
                    </div>
                    <div class="wide-card__image">
                      <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                    </div>
                  </div>
                  <div class="wide-card__text">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
          <!-- ループ終了 -->
          </div>
          <div class="voice__btn">
            <a class="button" href="<?php echo $voice; ?>"><span>View more</span></a>
          </div>
        </div>
      </section>


      <section id="price" class="price layout-top">
        <div class="price__inner inner">
          <div class="price__title">
            <div class="section-header">
              <span class="section-header__engtitle">Price</span>
              <h2 class="section-header__jatitle">料金一覧</h2>
            </div>
          </div>
          <div class="price__wrapper">
            <div class="price__image">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.webp" type="image/webp" media="(min-width: 768px)" />
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.webp" type="image/webp" media="(max-width: 767px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="海の中を泳ぐたくさんの小さな赤い魚とサンゴ礁" />
              </picture>
            </div>
            <div class="price__contents">
              <div class="price__content price-menu">
                <div class="price-menu__head">
                  <h3>ライセンス講習</h3>
                </div>
                <dl class="price-menu__items">
                  <div class="price-menu__item">
                    <dt>オープンウォーターダイバーコース</dt>
                    <dd>¥50,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>アドバンスドオープンウォーターコース</dt>
                    <dd>¥60,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>レスキュー＋EFRコース</dt>
                    <dd>¥70,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__content price-menu">
                <div class="price-menu__head">
                  <h3>体験ダイビング</h3>
                </div>
                <dl class="price-menu__items">
                  <div class="price-menu__item">
                    <dt>ビーチ体験ダイビング(半日)</dt>
                    <dd>¥7,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>ビーチ体験ダイビング(1日)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>ボート体験ダイビング(半日)</dt>
                    <dd>¥10,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>ボート体験ダイビング(1日)</dt>
                    <dd>¥18,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__content price-menu">
                <div class="price-menu__head">
                  <h3>ファンダイビング</h3>
                </div>
                <dl class="price-menu__items">
                  <div class="price-menu__item">
                    <dt>ビーチダイビング(2ダイブ)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>ボートダイビング(2ダイブ)</dt>
                    <dd>¥18,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>スペシャルダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>ナイトダイビング(1ダイブ)</dt>
                    <dd>¥10,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__content price-menu">
                <div class="price-menu__head">
                  <h3>スペシャルダイビング</h3>
                </div>
                <dl class="price-menu__items">
                  <div class="price-menu__item">
                    <dt>貸切ダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="price-menu__item">
                    <dt>1日ダイビング(3ダイブ)</dt>
                    <dd>¥32,000</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
          <div class="price__btn">
            <a class="button" href="<?php echo $price; ?>"><span>View more</span></a>
          </div>
        </div>
      </section>

      <!-- contact-->
      <?php get_template_part('parts/contact'); ?>

</body>
<?php get_footer(); ?>