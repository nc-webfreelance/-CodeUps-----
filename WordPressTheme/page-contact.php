<?php get_header(); ?>

<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-contactForm layout-subPage">
  <div class="page-contactForm__inner inner">
    <div class="page-contactForm__items">
      <?php echo do_shortcode('[contact-form-7 id="b333011" title="お問い合わせ"]'); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
