<?php get_header(); ?>


<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>




<section class="two-col layout-single-blog">
  <div class="two-col__inner inner">
    <div class="two-col__wrap">
      <!-- ループ処理開始 -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="two-col__left">
            <div class="two-col__article single-blog">
              <time class="single-blog__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
              <h2 class="single-blog__title"><?php the_title(); ?></h2>
              <?php if (has_post_thumbnail()) : ?>
                <div class="single-blog__image">
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                </div>
              <?php endif; ?>
              <div class="single-blog__body">
                <?php the_content(); ?>
              </div>
            </div>
            <div class="two-col__pagenavi two-col__pagenavi--single-blog pagenavi">
              <div class="single-blog__wp-pagenavi wp-pagenavi" role="navigation">
                <div class="previouspostslink pagenavi-pre category-next">
                  <?php next_post_link('%link', '', ((isset($_GET['previous_page']) && $_GET['previous_page'] === 'category') ? true : false)); ?>
                </div>
                <div class="nextpostslink pagenavi-next category-pre">
                  <?php previous_post_link('%link', '', ((isset($_GET['previous_page']) && $_GET['previous_page'] === 'category') ? true : false)); ?>
                </div>
              </div>

            </div>
          </div>
      <?php endwhile;
      endif; ?>
      <!-- ループ処理終了 -->
      <!-- two-col__right/sidebar -->
      <?php get_template_part('parts/sidebar'); ?>
    </div>
  </div>
</section>


<!-- contact -->
<?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>