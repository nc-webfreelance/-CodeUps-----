<?php get_header(); ?>


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<section class="page-privacypolicy layout-subPage">
  <div class="page-privacypolicy__inner inner">
    <div class="page-privacypolicy__content">
        <h2><?php echo get_the_title(); ?></h2>
      <div class="page-privacypolicy__text">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>