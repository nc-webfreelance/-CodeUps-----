<?php get_header(); ?>

<body>


  <?php
  $home = esc_url(home_url('/'));
  $service = esc_url(home_url('/service'));
  $blog = esc_url(home_url('/blog'));
  $price = esc_url(home_url('/price'));
  $faq = esc_url(home_url('/faq'));
  $information = esc_url(home_url('/information'));
  $contact = esc_url(home_url('/contact'));
  $privacypolicy = esc_url(home_url('/privacypolicy'));
  $sitemap = esc_url(home_url('/sitemap'));
  ?>


  <?php
  $mv_1 = get_field('mv_1');
  $mv_2 = get_field('mv_2');
  $mv_3 = get_field('mv_3');
  ?>


  <section id="top" class="mv js-mv-height">
    <div class="mv__inner">
      <div class="mv__slider mv-swiper swiper js-swiper">
        <div class="mv-swiper__wrapper swiper-wrapper">
          <div class="mv-swiper__slide swiper-slide">
            <img src="<?php echo $mv_1 ?>" alt="">
          </div>
          <div class="mv-swiper__slide swiper-slide">
            <img src="<?php echo $mv_2 ?>" alt="">
          </div>
          <div class="mv-swiper__slide swiper-slide">
            <img src="<?php echo $mv_3 ?>" alt="">
          </div>
        </div>
      </div>
      <div class="mv__header">
        <h2><span>Star</span><br><span>Violet</span></h2>
        <p>Dog-exclusive hotel</p>
      </div>
    </div>
  </section>


  <section id="service" class="service layout-top">
    <div class="service__inner inner">
      <div class="service__wrap">
        <div class="service__title">
          <div class="section-header">
            <h2 class="section-header__title">Service<span class="section-header__jatitle">サービス</span></h2>
          </div>
        </div>
        <div class="service__contents">
          <div class="service__content js-popUp">
            <div class="service__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-hotel.jpg" alt="" />
            </div>
            <div class="service__textBody">
              <h3>ホテル</h3>
              <p>
                24時間体制で安全かつ快適な滞在環境を提供しています。専用のケージやスイートルームを完備し、定期的な散歩や運動、特別な食事、医療管理など、ペットの健康と幸福をサポートするさまざまなサービスを提供しています。飼い主の皆様が安心してペットを預けられるよう、常に心を込めたケアを行っています。
              </p>
            </div>
          </div>
          <div class="service__content js-popUp">
            <div class="service__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-trimming.jpg" alt="" />
            </div>
            <div class="service__textBody">
              <h3>トリミング</h3>
              <p>
                ペットの美容と健康を重視し、専門のトリマーが丁寧にケアいたします。毛のカット、爪の手入れ、耳の清掃、バス＆ブローなど、ペットの個々のニーズに合わせたトリミングプランを提供しています。安全かつ快適な環境で、ペットたちがリラックスして美しくなれるよう心がけています。
              </p>
            </div>
          </div>
          <div class="service__content js-popUp">
            <div class="service__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-run.jpg" alt="" />
            </div>
            <div class="service__textBody">
              <h3>ドッグラン</h3>
              <p>
                広々とした安全なエリアで、愛犬たちが思い切り遊び、社交するのに最適な場所です。フェンスで囲まれたエリアで、愛犬たちは安心して自由に走り回ることができます。専用の遊具や障害物も備え、愛犬たちが楽しく運動できる環境を整えています。また、専門のスタッフが常駐しており、安全かつ清潔な状態を保ちながら、愛犬たちが快適に遊べるように配慮しています。
              </p>
            </div>
          </div>
          <div class="service__content js-popUp">
            <div class="service__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-sales.jpg" alt="" />
            </div>
            <div class="service__textBody">
              <h3>グッズ販売</h3>
              <p>
                高品質な犬用グッズを幅広く取り揃えており、愛犬との素敵な生活をサポートします。お散歩用のリードやハーネス、快適なベッドやクレート、健康や遊びを促進するおもちゃ、栄養バランスの整ったフードなど、豊富な品揃えが自慢です。専門的なアドバイスやお手入れ方法のアドバイスもご提供し、飼い主様と愛犬の生活をより充実させるお手伝いをいたします。
              </p>
            </div>
          </div>
        </div>
        <div class="service__btn">
          <a href="<?php echo $service; ?>" class="button">
            <span class="button__front">View more</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="blog" class="blog layout-top">
    <div class="blog__inner">
      <div class="blog__wrap">
        <div class="blog__title">
          <div class="section-header">
            <h2 class="section-header__title">Blog<span class="section-header__jatitle">ブログ</span></h2>
          </div>
        </div>
        <div class="blog__swiper swiper js-blog-swiper">
          <div class="blog__cards cards swiper-wrapper">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="cards__item card  swiper-slide">
                  <div class="card__inner">
                    <div class="card__image">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                      <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.jpeg")); ?>" alt="NoImage画像" />
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
                      <div class="card__textBlock">
                        <h3 class="card__title"><?php the_title(); ?></h3>
                        <div class="card__text">
                          <?php the_excerpt(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
            <?php endwhile;
            endif; ?>
          </div>
        </div>
        <div class="blog__btn">
          <a href="<?php echo $blog; ?>" class="button">
            <span class="button__front">View more</span>
          </a>
        </div>
      </div>
      <div class="swiper-button-prev u-desktop"></div>
      <div class="swiper-button-next u-desktop"></div>
    </div>
  </section>


  <section id="price" class="price layout-top">
    <div class="price__inner inner">
      <div class="price__wrap">
        <div class="price__title">
          <div class="section-header">
            <h2 class="section-header__title">Price<span class="section-header__jatitle">料金一覧</span></h2>
          </div>
        </div>
        <div class="price__contents  js-popUps">
          <div class="price__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img.jpg" alt="" />
          </div>
          <div class="price__list">
            <div class="price__list-item price-menu">
              <div class="price-menu__head">
                <h3>ホテル</h3>
              </div>
              <dl class="price-menu__items">
                <div class="price-menu__item">
                  <dt>小型犬</dt>
                  <dd>¥5,000 (1泊)</dd>
                </div>
                <div class="price-menu__item">
                  <dt>中型犬</dt>
                  <dd>¥6,500 (1泊)</dd>
                </div>
                <div class="price-menu__item">
                  <dt>大型犬</dt>
                  <dd>¥8,000 (1泊)</dd>
                </div>
                <div class="price-menu__item">
                  <dt>スイートルーム</dt>
                  <dd>&plus;¥1,500 (1泊)</dd>
                </div>
              </dl>
            </div>
            <div class="price__list-item price-menu">
              <div class="price-menu__head">
                <h3>トリミング</h3>
              </div>
              <dl class="price-menu__items">
                <div class="price-menu__item">
                  <dt>小型犬</dt>
                  <dd>¥3,500</dd>
                </div>
                <div class="price-menu__item">
                  <dt>中型犬</dt>
                  <dd>¥4,000</dd>
                </div>
                <div class="price-menu__item">
                  <dt>大型犬</dt>
                  <dd>¥5,500</dd>
                </div>
                <div class="price-menu__item">
                  <dt>シャンプー持ち込み</dt>
                  <dd>&minus;¥500</dd>
                </div>
              </dl>
            </div>
            <div class="price__list-item price-menu">
              <div class="price-menu__head">
                <h3>ドッグラン</h3>
              </div>
              <dl class="price-menu__items">
                <div class="price-menu__item">
                  <dt>30分</dt>
                  <dd>¥1,000</dd>
                </div>
                <div class="price-menu__item">
                  <dt>フリーパス(8:30~19:00)</dt>
                  <dd>¥2,800</dd>
                </div>
              </dl>
            </div>
            <div class="price__list-item price-menu">
              <div class="price-menu__head">
                <h3>グッズ販売&emsp;<br class="u-mobile"><span>( その他商品の種類は、料金ページをご覧ください。)</span></h3>
              </div>
              <dl class="price-menu__items">
                <div class="price-menu__item">
                  <dt>玩具</dt>
                  <dd>¥500~</dd>
                </div>
                <div class="price-menu__item">
                  <dt>ドッグフード</dt>
                  <dd>¥1,200~</dd>
                </div>
                <div class="price-menu__item">
                  <dt>お散歩グッズ</dt>
                  <dd>¥1,000~</dd>
                </div>
              </dl>
            </div>
          </div>
        </div>
        <div class="price__btn">
          <a href="<?php echo $price; ?>" class="button">
            <span class="button__front">View more</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="faq" class="faq layout-top">
    <div class="faq__inner inner">
      <div class="faq__wrap">
        <div class="faq__title">
          <div class="section-header">
            <h2 class="section-header__title section-header__title--white">FAQ<span class="section-header__jatitle">よくある質問</span></h2>
          </div>
        </div>
        <ul class="faq__items faq-list">
          <?php
          $fields = SCF::get_option_meta('theme-options', 'faq-list');
          $display_count = 0;
          foreach ($fields as $field_name => $fields_value) {
          ?>
            <li class="faq-list__item js-popUp">
              <p class="faq-list__item-question js-faq-question is-open">
                <span><?php echo nl2br($fields_value['question']); ?></span>
              </p>
              <p class="faq-list__item-answer">
                <?php echo nl2br($fields_value['answer']); ?>
              </p>
            </li>
          <?php
            $display_count++;
            if ($display_count == 4) {
              break;
            }
          }
          ?>
        </ul>
        <div class="faq__btn">
          <a href="<?php echo $faq; ?>" class="button">
            <span class="button__front">View more</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="information" class="information layout-top">
    <div class="information__inner inner">
      <div class="information__wrap">
        <div class="information__title">
          <div class="section-header">
            <h2 class="section-header__title">Information<span class="section-header__jatitle">店舗情報</span></h2>
          </div>
        </div>
        <div class="information__access">
          <div class="information__textBody">
            <div class="information__head">
              <p class="information__head-info">犬専用 ペットホテル</p>
              <h3 class="information__head-name"><ruby>Star Violet<rt>スター バイオレット</rt></ruby></h3>
            </div>
            <div class="information__text">
              <p>〒060-0806&emsp;北海道札幌市北区北６条西４丁目</p>
              <p>TEL&nbsp;:&nbsp;0120-000-0000</p>
              <p>営業時間&nbsp;:&nbsp;8:30-19:00 <br>(ペットホテルは24時間営業しております。)</p>
              <p>駐車場&nbsp;:&nbsp;10台</p>
            </div>
          </div>
          <div class="information__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5991.798240212549!2d141.34786704909456!3d43.07195482380939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2974d2c3f903%3A0xa5e2b18cdd4a47a5!2z5pyt5bmM6aeF!5e0!3m2!1sja!2sjp!4v1712648736124!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="information__btn">
          <a href="<?php echo $information; ?>" class="button">
            <span class="button__front">View more</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <?php get_template_part('parts/contact'); ?>


</body>
<?php get_footer(); ?>