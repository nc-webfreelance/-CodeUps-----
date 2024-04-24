<?php get_header(); ?>


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<div class="two-col layout-subPage">
  <div class="two-col__inner inner">
    <div class="two-col__wrap">
      <div class="two-col__left">
        <div class="two-col__cards cards">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="cards__item card card--archive">
                <div class="card__inner">
                  <div class="card__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.jpeg")); ?>" alt="" />
                    <?php endif; ?>
                  </div>
                  <div class="card__body">
                    <div class="card__meta">
                      <time class="card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                      <div class="card__category">
                        <p><?php $cat = get_the_category();
                            $cat = $cat[0]; {
                              echo $cat->name;
                            } ?></p>
                      </div>
                    </div>
                    <h3 class="card__title"><?php the_title(); ?></h3>
                    <div class="card__text">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
              </a>
          <?php endwhile;
          endif; ?>
        </div>
        <div class="two-col__pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
      <?php get_template_part('parts/sidebar'); ?>
    </div>
  </div>
</div>


<?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>