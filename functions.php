<?php

add_theme_support('post-thumbnails');
add_theme_support('title-tag');


// 自動タグ生成
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// function add_css_js() {//関数名add_css_js()を作成
// 	//CSSの読み込みはここから
//   //全てのページにreset.cssを読み込み
//   wp_enqueue_style('store', get_template_directory_uri().'/asset/css/reset.css');
// 	//全てのページにstyle.cssを読み込み
// 	wp_enqueue_style('style',get_template_directory_uri().'/asset/css/style.css' );
//
// 	//JavaScriptの読み込みはここから
// 	//js/main.jsをfooter直下で読み込み
// 		wp_enqueue_script('main', get_template_directory_uri().'/asset/js/main.js', array( 'jquery' ), '', true);
// }
// //関数名add_scripts()を表側で呼び出す
// add_action('wp_enqueue_scripts', 'add_css_js’);
