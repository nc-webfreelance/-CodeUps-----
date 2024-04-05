<?php get_header(); ?>


<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-faq layout-subPage">
  <div class="page-faq__inner inner">
    <ul class="page-faq__list page-faq-list">
      <!-- ループ開始 -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <li class="page-faq-list__item">
            <p class="page-faq-list__item-question js-faq-question is-open">
            <?php the_field('question'); ?>
            </p>
            <div class="page-faq-list__item-answer">
            <?php the_field('answer'); ?>
            </div>
          </li>
      <?php endwhile;
      endif; ?>
      <!-- ループ終了 -->
    </ul>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>