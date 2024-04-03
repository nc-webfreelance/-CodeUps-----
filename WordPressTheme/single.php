<?php get_header(); ?>


<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-blog-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>Blog</h1>
    </div>
  </div>
</div>

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


<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>