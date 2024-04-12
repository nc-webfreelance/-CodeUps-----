<?php get_header(); ?>


<!-- 下層ページmv -->
<?php get_template_part('parts/sub-mv'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>


<div class="page-voice layout-subPage">
  <div class="page-voice__inner inner">
    <div class="page-voice__tab category-tab">
      <ul class="category-tab__items">
        <li class="category-tab__item tab-active">
          <a href="<?php echo get_post_type_archive_link('voice'); ?>">ALL</a>
        </li>
        <!-- ループ処理開始 -->
        <?php $genre_terms = get_terms('voice-category', array('hide_empty' => false)); ?>
        <?php foreach ($genre_terms as $genre_term) : ?>
          <li class="category-tab__item">
            <a href="<?php echo esc_url( get_term_link( $genre_term, 'voice-category' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
          </li>
        <?php endforeach; ?>
        <!-- ループ処理終了 -->
      </ul>
    </div>
    <div class="page-voice__cards wide-cards wide-cards--page">
      <!-- ループ処理開始 -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="wide-cards__item wide-card">
            <div class="wide-card__inner">
              <div class="wide-card__body">
                <div class="wide-card__content">
                  <div class="wide-card__meta">
                    <p class="wide-card__age"><?php the_field('voice_age'); ?>(<?php the_field('voice_gene'); ?>)</p>
                    <div class="wide-card__category">
                      <?php echo esc_html( get_the_terms( get_the_ID(), 'voice-category' )[0]->name ); ?>
                    </div>
                  </div>
                  <div class="wide-card__head">
                    <p><?php the_title(); ?></p>
                  </div>
                </div>
                <div class="wide-card__image">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
              </div>
              <div class="wide-card__text">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
      <!-- ループ処理終了 -->
    </div>
    <div class="page-voice__pagenavi pagenavi">
      <!-- wp-pagenavi -->
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</div>

<!-- sub-contact -->
<?php get_template_part('parts/sub-contact'); ?>

<?php get_footer(); ?>