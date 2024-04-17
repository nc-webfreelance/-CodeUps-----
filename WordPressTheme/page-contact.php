<?php get_header(); ?>


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-contact layout-subPage">
  <div class="page-contact__inner inner">
    <div class="page-contact__items">
      <?php echo do_shortcode('[contact-form-7 id="b6d81fe" title="お問い合わせ"]'); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>


