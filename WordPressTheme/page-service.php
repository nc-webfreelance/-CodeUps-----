<?php get_header(); ?>

<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-service layout-subPage">
  <div class="page-service__inner inner">
    <div class="page-service__tab tab">
      <ul class="tab__menu">
        <li class="tab__menu-item js-tab tab-active" data-tab-id="tab1">
          <p>ホテル</p>
        </li>
        <li class="tab__menu-item js-tab" data-tab-id="tab2">
          <p>トリミング</p>
        </li>
        <li class="tab__menu-item js-tab" data-tab-id="tab3">
          <p>ドッグラン</p>
        </li>
        <li class="tab__menu-item js-tab" data-tab-id="tab4">
          <p>グッズ販売</p>
        </li>
      </ul>
      <ul class="tab__content">
        <li class="tab__content-item js-tab-content tab-active">
          <div class="tab__content-wrap">
            <div class="tab__content-body">
              <h2>ホテル</h2>
              <p>
                当ペットホテルは、飼い主の皆様の安心を第一に考え、ペットのために24時間体制で安全かつ快適な滞在環境を提供しています。専用のケージやスイートルームを完備し、ペットの健康と幸福をサポートするさまざまなサービスを提供しています。定期的な散歩や運動、特別な食事、医療管理など、ペットが最高のケアを受けられるように心がけています。そのため、飼い主の皆様が安心してペットを預けられるよう、常に心を込めたケアを行っています。
              </p>
              <p>料金&nbsp;:&nbsp;1泊&emsp;小型犬¥5,000~&emsp;中型犬¥6,500~&emsp;大型犬¥8,000~</p>
            </div>
            <div class="tab__content-image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-hotel.jpg" alt="" />
            </div>
          </div>
        </li>
        <li class="tab__content-item js-tab-content">
          <div class="tab__content-wrap">
            <div class="tab__content-body">
              <h2>トリミング</h2>
              <p>
                トリミングサービスでは、ペットの美容と健康を大切にし、専門のトリマーが丁寧にケアします。毛のカットや爪の手入れ、耳の清掃、バス＆ブローなど、ペットの個々のニーズに合わせたトリミングプランを提供しています。安全で快適な環境で、ペットたちがリラックスして美しくなれるよう心がけています。経験豊富なスタッフが、愛情を込めてペットの外見と内面の両方を引き立てます。
              </p>
              <p>料金&nbsp;:&nbsp;小型犬¥3,000~&emsp;中型犬¥4,500~&emsp;大型犬¥6,000~</p>
            </div>
            <div class="tab__content-image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-trimming.jpg" alt="" />
            </div>
          </div>
        </li>
        <li class="tab__content-item js-tab-content">
          <div class="tab__content-wrap">
            <div class="tab__content-body">
              <h2>ドッグラン</h2>
              <p>
                当施設のドッグランは、広々とした安全なエリアで、愛犬たちが思い切り遊び、社交するのに最適な場所です。フェンスで囲まれたエリアで、愛犬たちは安心して自由に走り回ることができます。専用の遊具や障害物も備え、愛犬たちが楽しく運動できる環境を整えています。また、専門のスタッフが常駐しており、愛犬たちが安全かつ清潔な状態で遊べるように配慮しています。こうした環境で、愛犬たちは他の仲間と交流し、健康的に遊び、成長することができます。
              </p>
              <p>料金&nbsp;:&nbsp;¥1,000&nbsp;(30分)</p>
            </div>
            <div class="tab__content-image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-run.jpg" alt="" />
            </div>
          </div>
        </li>
        <li class="tab__content-item js-tab-content">
          <div class="tab__content-wrap">
            <div class="tab__content-body">
              <h2>グッズ販売</h2>
              <p>
                当店では、ペットとの素敵な生活を支援するために、高品質な犬用グッズを幅広く取り揃えています。お散歩用のリードやハーネス、快適なベッドやクレート、健康や遊びを促進するおもちゃ、栄養バランスの整ったフードなど、豊富な品揃えが自慢です。また、専門的なアドバイスやお手入れ方法の提供も行っており、飼い主様と愛犬の生活をより充実させるお手伝いをさせていただきます。
              </p>
              <p>料金につきましては、お手軽なものから高価なものまで幅広く取り揃えております。</p>
            </div>
            <div class="tab__content-image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-toy.jpg" alt="" />
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- sub-contact -->
<?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>