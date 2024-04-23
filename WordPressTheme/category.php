<?php get_header(); ?>


<?php get_template_part('parts/sub-mv'); ?>
<?php get_template_part('parts/breadcrumb'); ?>


<div class="two-col layout-subPage">
  <div class="two-col__inner inner">
    <div class="two-col__wrap">
      <div class="two-col__left">
        <div class="two-col__cards cards">
          <?php
          $catId = get_query_var('cat');
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $cat_info = get_category($catId);
          $post_slug = get_post_field('post_name', get_queried_object_id());
          $category_link = get_category_link($catId);
          ?>
          <?php
          if (wp_is_mobile()) {
            $num = 6;
          } else {
            $num = 6;
          }
          $args = array(
            'post_type' => array('post'),
            'paged' => $paged,
            'posts_per_page' => $num,
            'category_name' => $cat_info->slug,
          );
          $wp_query = new WP_Query($args);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :
              $wp_query->the_post();
          ?>
              <a href="<?php echo the_permalink(); ?>?previous_page=category" class="cards__item card card--archive">
                <div class="card__inner">
                  <div class="card__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/no-image.jpeg" )); ?>" alt="NoImage画像" />
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
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
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