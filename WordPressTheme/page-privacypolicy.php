<?php get_header(); ?>

<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-privacyPolicy layout-subPage">
  <div class="page-privacyPolicy__inner inner">
    <div class="page-privacyPolicy__content">
      <div class="page-privacyPolicy__title">
        <h2>
          <?php echo get_the_title(); ?>
        </h2>
      </div>
      <div class="page-privacyPolicy__text">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>