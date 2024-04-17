<?php

function my_script_init()
{
	// Googleフォント
	wp_enqueue_style('NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
	wp_enqueue_style('Montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

	// css
	wp_enqueue_style('swiper-css', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", false);
	wp_enqueue_style('style-css', get_theme_file_uri('/assets/css/style.css'), false);

	// js
	wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.6.0.js", array('jquery'), '3.6.0', true);
	wp_enqueue_script('script-jquery', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), '1.0.1', true);
	wp_enqueue_script('swiper-js', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js", array('jquery'), '8.0.0', true);
	wp_enqueue_script('gsap-js', "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js", '3.12.5', true);
	wp_enqueue_script('gsap-scroll', "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js", '3.12.5', true);
	wp_enqueue_script('script-js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title($title)
{

	if (is_home()) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif (is_category()) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title('', false) . '';
	} elseif (is_tag()) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title('', false) . '';
	} elseif (is_post_type_archive()) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title('', false) . '';
	} elseif (is_tax()) { /* タームアーカイブの場合 */
		$title = '' . single_term_title('', false);
	} elseif (is_search()) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html(get_query_var('s')) . '」の検索結果';
	} elseif (is_author()) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif (is_date()) { /* 日付アーカイブの場合 */
		$title = '';
		if (get_query_var('year')) {
			$title .= get_query_var('year') . '年';
		}
		if (get_query_var('monthnum')) {
			$title .= get_query_var('monthnum') . '月';
		}
		if (get_query_var('day')) {
			$title .= get_query_var('day') . '日';
		}
	}
	return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length($length)
{
	return 80;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');


// アイキャッチ画像
function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}


// home.phpのbodyからクラス名削除
add_filter('body_class', function ($classes) {
	unset($classes[array_search('blog', $classes)]);
	return $classes;
});


//記事のアクセス数を表示
function getPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count . ' Views';
}


//記事のアクセス数を保存
function setPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('faq-list', 'FAQ', 'manage_options', 'theme-options', '', 5);
function is_parent_slug()
{
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}


add_action('registered_post_type', 'kaiza_posts_hierarchical', 10, 2);
function kaiza_posts_hierarchical($post_type, $pto)
{
	global $wp_post_types;
	if ($post_type != 'post') return;
	$wp_post_types['post']->hierarchical = 1;
	add_post_type_support('post', 'page-attributes');
}
