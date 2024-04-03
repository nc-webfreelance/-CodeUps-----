<?php get_header(); ?>

<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-information-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-information-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-information-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-information-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>Information</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-information layout-page-information">
  <div class="page-information__inner inner">
    <div class="page-information__tab tab">
      <ul class="tab__menu">
        <li class="tab__menu-item js-tab tab-active" data-tab-id="tab1">
          <p>ライセンス<br class="u-mobile" />講習</p>
        </li>
        <li class="tab__menu-item js-tab" data-tab-id="tab2">
          <p>ファン<br class="u-mobile" />ダイビング</p>
        </li>
        <li class="tab__menu-item js-tab" data-tab-id="tab3">
          <p>体験<br class="u-mobile" />ダイビング</p>
        </li>
      </ul>
      <ul class="tab__content">
        <li class="tab__content-item js-tab-content tab-active">
          <div class="tab__content-wrap">
            <div class="tab__content-body">
              <h2>ライセンス講習</h2>
              <p>
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="tab__content-image">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab-1.webp" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab-1.jpg" alt="海に浮かぶ５人のダイバー" />
              </picture>
            </div>
          </div>
        </li>
        <li class="tab__content-item js-tab-content">
          <div class="tab__content-wrap">
            <div class="tab__content-body">
              <h2>ファンダイビング</h2>
              <p>
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="tab__content-image">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab-2.webp" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab-2.jpg" alt="海の中を泳ぐたくさんの小さな魚" />
              </picture>
            </div>
          </div>
        </li>
        <li class="tab__content-item js-tab-content">
          <div class="tab__content-wrap">
            <div class="tab__content-body">
              <h2>体験ダイビング</h2>
              <p>
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="tab__content-image">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab-3.webp" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab-3.jpg" alt="海の中を泳ぐ２匹の魚" />
              </picture>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>