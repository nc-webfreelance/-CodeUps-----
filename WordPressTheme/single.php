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
          <div class="single-blog__image">
          <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          </div>
          <div class="single-blog__body">
          <?php the_content(); ?>
          </div>
        </div>
        <div class="two-col__pagenavi two-col__pagenavi--single-blog pagenavi">
          <div class="single-blog__wp-pagenavi wp-pagenavi" role="navigation">
            <a class="previouspostslink pagenavi-pre" rel="prev" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"></a>
            <a class="nextpostslink pagenavi-next" rel="next" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"></a>
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