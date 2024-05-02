<?php
if (is_page('service')) {
    $title = 'Service';
} elseif (is_home()) {
    $title = 'Blog';
} elseif (is_category()) {
    $title = 'Blog';
} elseif (is_single()) {
    $title = 'Blog';
} elseif (is_page('price')) {
    $title = 'Price';
} elseif (is_page('faq')) {
    $title = 'FAQ';
} elseif (is_page('information')) {
    $title = 'Information';
} elseif (is_page('contact')) {
    $title = 'Contact';
} elseif (is_page('thanks')) {
    $title = 'Contact';
} elseif (is_page('privacypolicy')) {
    $title = 'Privacy<br>Policy';
} elseif (is_page('sitemap')) {
    $title = 'Site MAP';
} else {
    $title = 'タイトルが設定されていません';
}
?>

<div class="sub-mv js-mv-height">
    <div class="sub-mv__inner">
        <div class="sub-mv__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/dog-submv.jpg" alt="">
        </div>
        <div class="sub-mv__header">
            <h1><?php echo $title; ?></h1>
        </div>
    </div>
</div>