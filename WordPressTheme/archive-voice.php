<?php get_header(); ?>


<!-- 下層ページmv -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-voice-pc.webp" type="image/webp" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-voice-pc.jpg" type="image/jpeg" media="(min-width: 768px)" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-voice-sp.webp" type="image/webp" media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-voice-sp.jpg" alt="青空とシーサー" />
      </picture>
    </div>
    <div class="sub-mv__header">
      <h1>Voice</h1>
    </div>
  </div>
</div>

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