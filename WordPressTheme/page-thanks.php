<?php get_header(); ?>

<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-contact-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-contact-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-contact-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-contact-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>Contact</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<div class="page-contact layout-subPage">
      <div class="page-contact__inner inner">
        <div class="page-contact__text">
          <p>お問い合わせ内容を送信完了しました。</p>
          <p>
            このたびは、お問い合わせ頂き<br
              class="u-mobile"
            />誠にありがとうございます。<br />
            お送り頂きました内容を確認の上、<br
              class="u-mobile"
            />3営業日以内に折り返しご連絡させて頂きます。<br />
            また、ご記入頂いたメールアドレスへ、
            <br class="u-mobile" />自動返信の確認メールをお送りしております。
          </p>
        </div>
      </div>
    </div>


<?php get_footer(); ?>