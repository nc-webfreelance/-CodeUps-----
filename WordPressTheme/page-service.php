<?php get_header(); ?>


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<section class="page-service layout-subPage">
  <div class="page-service__inner inner">
    <ul class="page-service__contents">
      <li>
        <a id="hotel" class="page-service__content">
          <div class="page-service__textBlock">
            <h2>ホテル</h2>
            <p class="page-service__text">
              当ペットホテルは、飼い主の皆様の安心を第一に考え、ペットのために24時間体制で安全かつ快適な滞在環境を提供しています。専用のケージやスイートルームを完備し、ペットの健康と幸福をサポートするさまざまなサービスを提供しています。定期的な散歩や運動、特別な食事、医療管理など、ペットが最高のケアを受けられるように心がけています。そのため、飼い主の皆様が安心してペットを預けられるよう、常に心を込めたケアを行っています。
            </p>
            <div class="page-service__price">
              <p>料金 : 1泊</p>
              <p><span>小型犬¥5,000~</span><span>中型犬¥6,500~</span><span>大型犬¥8,000~</span></p>
            </div>
          </div>
          <div class="page-service__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-hotel.jpg" alt="" />
          </div>
        </a>
      </li>
      <li>
        <a id="trimming" class="page-service__content">
          <div class="page-service__textBlock">
            <h2>トリミング</h2>
            <p class="page-service__text">
              トリミングサービスでは、ペットの美容と健康を大切にし、専門のトリマーが丁寧にケアします。毛のカットや爪の手入れ、耳の清掃、バス＆ブローなど、ペットの個々のニーズに合わせたトリミングプランを提供しています。安全で快適な環境で、ペットたちがリラックスして美しくなれるよう心がけています。経験豊富なスタッフが、愛情を込めてペットの外見と内面の両方を引き立てます。
            </p>
            <div class="page-service__price">
              <p>料金 : </p>
              <p><span>小型犬¥3,000~</span><span>中型犬¥4,500~</span><span>大型犬¥6,000~</span></p>
            </div>
          </div>
          <div class="page-service__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-trimming.jpg" alt="" />
          </div>
        </a>
      </li>
      <li>
        <a id="dog-run" class="page-service__content">
          <div class="page-service__textBlock">
            <h2>ドッグラン</h2>
            <p class="page-service__text">
              当施設のドッグランは、広々とした安全なエリアで、愛犬たちが思い切り遊び、社交するのに最適な場所です。フェンスで囲まれたエリアで、愛犬たちは安心して自由に走り回ることができます。専用の遊具や障害物も備え、愛犬たちが楽しく運動できる環境を整えています。また、専門のスタッフが常駐しており、愛犬たちが安全かつ清潔な状態で遊べるように配慮しています。こうした環境で、愛犬たちは他の仲間と交流し、健康的に遊び、成長することができます。
            </p>
            <div class="page-service__price">
              <p>料金 : ¥1,000 (30分)</p>
            </div>
          </div>
          <div class="page-service__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-run.jpg" alt="" />
          </div>
        </a>
      </li>
      <li>
        <a id="merchandise-sales" class="page-service__content">
          <div class="page-service__textBlock">
            <h2>グッズ販売</h2>
            <p class="page-service__text">
              当店では、ペットとの素敵な生活を支援するために、高品質な犬用グッズを幅広く取り揃えています。お散歩用のリードやハーネス、快適なベッドやクレート、健康や遊びを促進するおもちゃ、栄養バランスの整ったフードなど、豊富な品揃えが自慢です。また、専門的なアドバイスやお手入れ方法の提供も行っており、飼い主様と愛犬の生活をより充実させるお手伝いをさせていただきます。
            </p>
            <div class="page-service__price page-service__price--info">
              <p>料金につきましては、お手軽なものから高価なものまで幅広く取り揃えております。</p>
            </div>
          </div>
          <div class="page-service__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-sales.jpg" alt="" />
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>


<?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>