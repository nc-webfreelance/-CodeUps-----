<?php get_header(); ?>


<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-campaign layout-subPage">
  <div class="page-campaign__inner inner">
    <div class="page-campaign__tab category-tab">
      <ul class="category-tab__items">
        <li class="category-tab__item tab-active">
          <a href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>
        </li>
        <!-- ループ処理開始 -->
        <?php $genre_terms = get_terms('campaign-category', array('hide_empty' => false)); ?>
        <?php foreach ($genre_terms as $genre_term) : ?>
          <li class="category-tab__item">
            <a href="<?php echo esc_url( get_term_link( $genre_term, 'campaign-category' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
          </li>
        <?php endforeach; ?>
        <!-- ループ処理終了 -->
      </ul>
    </div>
    <div class="page-campaign__items">
      <!-- ループ処理開始 -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="page-campaign__item campaign-card campaign-card--page">
            <div class="campaign-card__image campaign-card__image--page">
              <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
            </div>
            <div class="campaign-card__body campaign-card__body--page">
              <div class="campaign-card__head campaign-card__head--page">
                <div class="campaign-card__category">
                  <?php echo esc_html( get_the_terms( get_the_ID(), 'campaign-category' )[0]->name ); ?>
                </div>
                <div class="campaign-card__title campaign-card__title--page">
                  <h2><?php the_title(); ?></h2>
                </div>
              </div>
              <div class="campaign-card__foot campaign-card__foot--page">
                <div class="campaign-card__text">
                  <p>全部コミコミ(お一人様)</p>
                </div>
                <div class="campaign-card__price">
                  <p class="campaign-card__price-before">¥<?php the_field('price_before'); ?></p>
                  <p class="campaign-card__price-after">¥<?php the_field('price_after'); ?></p>
                </div>
                <div class="page-campaign__cardText u-desktop">
                  <?php the_content(); ?>
                </div>
                <p class="page-campaign__cardDate u-desktop">2023/6/1-9/30</p>
                <p class="page-campaign__cardInfo u-desktop">
                  ご予約・お問い合わせはコチラ
                </p>
                <div class="page-campaign__cardBtn u-desktop">
                  <a class="button" href="#"><span>Contact us</span></a>
                </div>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
      <!-- ループ処理終了 -->
    </div>
    <div class="page-campaign__pagenavi pagenavi">
      <!-- wp-pagenavi -->
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>