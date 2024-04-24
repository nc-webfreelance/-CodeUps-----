<?php get_header(); ?>


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-thanks layout-subPage">
  <div class="page-thanks__inner inner">
    <div class="page-thanks__text">
      <p>お問い合わせ内容を送信完了しました。</p>
      <p>
        このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />
        お送り頂きました内容を確認の上、<br class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。<br />
        また、ご記入頂いたメールアドレスへ、
        <br class="u-mobile" />自動返信の確認メールをお送りしております。
      </p>
    </div>
    <div class="page-thanks__btn">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="button">
        <span class="button__front">TOP</span>
      </a>
    </div>
  </div>
</div>


<?php get_footer(); ?>