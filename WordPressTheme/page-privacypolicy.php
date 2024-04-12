<?php get_header(); ?>

<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-privacypolicy layout-subPage">
  <div class="page-privacypolicy__inner inner">
    <div class="page-privacypolicy__content">
      <div class="page-privacypolicy__title">
        <h2>
          <?php echo get_the_title(); ?>
        </h2>
      </div>
      <div class="page-privacypolicy__text">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<!-- contact -->
<?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>