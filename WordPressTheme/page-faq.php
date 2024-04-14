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
          $fields = SCF::get_option_meta('theme-options', 'faq-list');
          foreach ($fields as $field_name => $fields_value) {
          ?>
            <li class="faq-list__item">
              <p class="faq-list__item-question js-faq-question is-open">
                <span><?php echo nl2br($fields_value['question']); ?></span>
              </p>
              <p class="faq-list__item-answer">
                <?php echo nl2br($fields_value['answer']); ?>
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

