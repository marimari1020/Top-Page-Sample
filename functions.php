<?php


add_theme_support( 'menus' );
register_nav_menus(
	array(
		'place_global' => 'global',
		 )
	);

// アイキャッチ

add_theme_support ('post-thumbnails');
set_post_thumbnail_size(90, 90, true);

add_image_size('large_thumbnail', 120, 120, true);

add_image_size('category_image', 658, 113, true);

add_image_size('pickup_thumbnail', 302, 123, true);

function cms_excerpt_more() {
	return ' ...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length(){
	return 120;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');

add_post_type_support('page', 'excerpt');


// 30文字表示抜粋　自動生成時

function the_short_excerpt() {
	add_filter('excerpt_mblength', 'short_excerpt_length', 11);
	the_excerpt();
	remove_filter('excerpt_mblength', 'short_excerpt_length', 11);
}
function short_excerpt_length() {
	return 30;
}

		  