<?php get_header(); ?>

<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<div class="page-price layout-subPage">
  <div class="page-price__inner inner">
    <div class="page-price__list">
      <div class="page-price__list-item price-menu">
        <div class="price-menu__head price-menu__head--page">
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
            <dd>＋¥1,500 (1泊)</dd>
          </div>
        </dl>
      </div>
      <div class="page-price__list-item price-menu">
        <div class="price-menu__head price-menu__head--page">
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
            <dd>−¥500</dd>
          </div>
        </dl>
      </div>
      <div class="page-price__list-item price-menu">
        <div class="price-menu__head price-menu__head--page">
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
      <div class="page-price__list-item price-menu">
        <div class="price-menu__head price-menu__head--page">
          <h3>グッズ販売</h3>
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
          <div class="price-menu__item">
            <dt>洋服</dt>
            <dd>¥3,200~</dd>
          </div>
          <div class="price-menu__item">
            <dt>ケージ</dt>
            <dd>¥5,600~</dd>
          </div>
          <div class="price-menu__item">
            <dt>食器</dt>
            <dd>¥1,600~</dd>
          </div>
          <div class="price-menu__item">
            <dt>サプリメント</dt>
            <dd>¥1,000~</dd>
          </div>
          <div class="price-menu__item">
            <dt>バースデーケーキ</dt>
            <dd>¥800~</dd>
          </div>
        </dl>
        <p>※料金は全て税込価格となっております。</p>
      </div>
      <!-- <table class="page-price__list price-list">
        <thead class="price-list__head">
          <tr>
            <th>ホテル</th>
          </tr>
        </thead>
        <tbody class="price-list__body">
          <tr class="price-list__item">
            <td class="price-list__name">
              オープンウォーター<br class="u-mobile" />
              ダイバーコース
            </td>
            <td class="price-list__price">¥50,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              トリミング
            </td>
            <td class="price-list__price">¥60,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">グッズ販売</td>
            <td class="price-list__price">¥70,000</td>
          </tr>
        </tbody>
      </table>
      <table class="page-price__list price-list">
        <thead class="price-list__head">
          <tr>
            <th>トリミング</th>
          </tr>
        </thead>
        <tbody class="price-list__body">
          <tr class="price-list__item">
            <td class="price-list__name">
              ビーチ体験ダイビング<br class="u-mobile" />
              (半日)
            </td>
            <td class="price-list__price">¥7,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              ビーチ体験ダイビング<br class="u-mobile" />
              (1日)
            </td>
            <td class="price-list__price">¥14,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              ボート体験ダイビング<br class="u-mobile" />
              (半日)
            </td>
            <td class="price-list__price">¥10,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              ボート体験ダイビング<br class="u-mobile" />
              (1日)
            </td>
            <td class="price-list__price">¥18,000</td>
          </tr>
        </tbody>
      </table>
      <table class="page-price__list price-list">
        <thead class="price-list__head">
          <tr>
            <th>ドッグラン</th>
          </tr>
        </thead>
        <tbody class="price-list__body">
          <tr class="price-list__item">
            <td class="price-list__name">
              ビーチダイビング<br class="u-mobile" />
              (2ダイブ)
            </td>
            <td class="price-list__price">¥14,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              ボートダイビング<br class="u-mobile" />
              (2ダイブ)
            </td>
            <td class="price-list__price">¥18,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              スペシャルダイビング<br class="u-mobile" />
              (2ダイブ)
            </td>
            <td class="price-list__price">¥24,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              ナイトダイビング<br class="u-mobile" />
              (1ダイブ)
            </td>
            <td class="price-list__price">¥10,000</td>
          </tr>
        </tbody>
      </table>
      <table class="page-price__list price-list">
        <thead class="price-list__head">
          <tr>
            <th>グッズ販売</th>
          </tr>
        </thead>
        <tbody class="price-list__body">
          <tr class="price-list__item">
            <td class="price-list__name">
              貸切ダイビング<br class="u-mobile" />
              (2ダイブ)
            </td>
            <td class="price-list__price">¥24,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              1日ダイビング<br class="u-mobile" />
              (3ダイブ)
            </td>
            <td class="price-list__price">¥32,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">
              ナイトダイビング<br class="u-mobile" />
              (2ダイブ)
            </td>
            <td class="price-list__price">¥14,000</td>
          </tr>
        </tbody>
      </table> -->
    </div>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>