<?php
function setup_my_theme()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'setup_my_theme');

//アイキャッチ画像を有効化
function my_theme_setup()
{
  add_theme_support('post-thumbnails'); //アイキャッチ画像の有効化
  set_post_thumbnail_size(400, 300); //デフォルトサイズの設定
  add_image_size('x-small', 60, 60);
}
add_action('after_setup_theme', 'my_theme_setup');

function create_my_post_types()
{  //init アクションフックに登録する関数
  //rental というカスタム投稿タイプを登録
  register_post_type(
    'logo', //投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => 'ロゴ・名刺',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'カスタム投稿タイプ「ロゴ・名刺」の説明文です。',  //説明文
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加

    )
  );
  register_post_type(
    'flyer', //投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => 'フライヤー・ポスター',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'カスタム投稿タイプ「フライヤー・ポスター」の説明文です。',  //説明文
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加

    )
  );
  register_post_type(
    'illustration', //投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => 'イラスト・パッケージ',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'カスタム投稿タイプ「ロゴ・名刺」の説明文です。',  //説明文
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加

    )
  );
  register_post_type(
    'banner', //投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => 'バナー',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'カスタム投稿タイプ「バナー」の説明文です。',  //説明文
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加

    )
  );
  register_post_type(
    'web', //投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => 'Web',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'カスタム投稿タイプ「Web」の説明文です。',  //説明文
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加

    )
  );
  register_post_type(
    'ui', //投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => 'アプリUI',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'カスタム投稿タイプ「アプリUI」の説明文です。',  //説明文
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加

    )
  );
  register_post_type(
    'others', //投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => 'others',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'カスタム投稿タイプ「others」の説明文です。',  //説明文
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加

    )
  );
}
//init アクションフックで登録
add_action('init', 'create_my_post_types');



//カテゴリーアーカイブにカスタム投稿タイプ logo を含める（表示させる）
function add_my_post_category_archive($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'logo'));
  }
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'flyer'));
  }
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'illustration'));
  }
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'banner'));
  }
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'web'));
  }
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'ui'));
  }
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'others'));
  }
}
add_action('pre_get_posts', 'add_my_post_category_archive');
