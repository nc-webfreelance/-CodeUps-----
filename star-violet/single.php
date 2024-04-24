<?php get_header(); ?>


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<section class="two-col layout-single-blog">
  <div class="two-col__inner inner">
    <div class="two-col__wrap">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="two-col__left">
            <div class="two-col__article single-blog">
              <time class="single-blog__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
              <h2 class="single-blog__title"><?php the_title(); ?></h2>
              <?php if (has_post_thumbnail()) : ?>
                <div class="single-blog__image">
                  <?php the_post_thumbnail('full'); ?>
                </div>
              <?php endif; ?>
              <div class="single-blog__body">
                <?php the_content(); ?>
              </div>
              <div class="single-blog__pagenavi">
                <div class="single-blog__pagenavi-pre">
                  <?php previous_post_link('%link', '< 前の記事', ((isset($_GET['previous_page']) && $_GET['previous_page'] === 'category') ? true : false)); ?>
                </div>
                <div class="single-blog__pagenavi-archive">
                  <a href="<?php echo esc_url(home_url('/blog')); ?>">一覧へ戻る</a>
                </div>
                <div class="single-blog__pagenavi-next">
                  <?php next_post_link('%link', '次の記事 >', ((isset($_GET['previous_page']) && $_GET['previous_page'] === 'category') ? true : false)); ?>
                </div>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
      <?php get_template_part('parts/sidebar'); ?>
    </div>
  </div>
</section>


<?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>