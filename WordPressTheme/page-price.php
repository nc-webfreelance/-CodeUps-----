<?php get_header(); ?>

<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-price-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-price-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-price-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-price-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>Price</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<div class="page-price layout-subPage">
  <div class="page-price__inner inner">
    <div class="page-price__lists">
      <table class="page-price__list price-list">
        <thead class="price-list__head">
          <tr>
            <th>ライセンス講習</th>
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
              アドバンスド<br class="u-mobile" />
              オープンウォーターコース
            </td>
            <td class="price-list__price">¥60,000</td>
          </tr>
          <tr class="price-list__item">
            <td class="price-list__name">レスキュー＋EFRコース</td>
            <td class="price-list__price">¥70,000</td>
          </tr>
        </tbody>
      </table>
      <table class="page-price__list price-list">
        <thead class="price-list__head">
          <tr>
            <th>体験ダイビング</th>
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
            <th>ファンダイビング</th>
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
            <th>スペシャルダイビング</th>
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
      </table>
    </div>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>