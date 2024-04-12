<?php get_header(); ?>


<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>




<div class="page-faq layout-subPage">
  <div class="page-faq__inner inner">
    <ul class="page-faq__list faq-list">
      <!-- ループ開始 -->
      <?php
      $faq_item = SCF::get('faq-list');
      foreach ($faq_item as $fields) {
      ?>
        <li class="faq-list__item">
          <p class="faq-list__item-question js-faq-question is-open">
            <span><?php echo nl2br($fields['question']);?></span>
          </p>
          <p class="faq-list__item-answer">
            <?php echo nl2br($fields['answer']); ?>
          </p>
        </li>
      <?php } ?>
      <!-- ループ終了 -->
    </ul>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>

