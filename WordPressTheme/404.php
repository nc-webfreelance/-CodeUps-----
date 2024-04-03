<?php get_header(); ?>



<div class="notFound">
  <div class="notFound__inner">

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb'); ?>

    <div class="notFound__content">
      <h1>404</h1>
      <p>
        申し訳ありません。<br />
        お探しのページが見つかりません。
      </p>
      <a class="button button--white" href="<?php echo esc_url(home_url('/')); ?>"><span>Page TOP</span></a>
    </div>
  </div>
</div>


<?php get_footer(); ?>