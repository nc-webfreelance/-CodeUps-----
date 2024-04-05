<?php get_header(); ?>

<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-termsOfService layout-subPage">
  <div class="page-termsOfService__inner inner">
    <div class="page-termsOfService__content">
      <div class="page-termsOfService__title">
        <h2>
          <?php echo get_the_title(); ?>
        </h2>
      </div>
      <div class="page-termsOfService__text">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>